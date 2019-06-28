<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ClientDetail;
use App\Product;
use App\GeneratedInvoice;
use App\InvoiceClients;
use App\BankDetail;

class InvoiceController extends Controller
{

    public function index()
    {
        $invoice_clients = InvoiceClients::with('clients')->get();

    	return view('Invoice.index', compact('invoice_clients'));
    }

    public function createInvoice()
    {
    	$clients = ClientDetail::get();
    	$products = Product::select('id','Product_name')->get()->toArray();

    	return view('invoice.create_invoice', compact('clients','products'));
    }

    public function saveInvoice(Request $request)
    {
        
        $invoice_clients = new InvoiceClients();
        $invoice_clients->invoice_clients_id = $request->client;
        $invoice_clients->dated = $request->invoice_date;
        $invoice_clients->challan_no = $request->challan_no;
        $invoice_clients->mode_terms_of_payment = $request->mode_of_payment;
        $invoice_clients->suppliers_ref = $request->supplier_ref;
        $invoice_clients->other_ref = $request->other_ref;
        $invoice_clients->buyers_order_no = $request->buyer_order_no;
        $invoice_clients->buyers_order_date = $request->buyers_order_date;
        $invoice_clients->dispatch_document_no = $request->dispatch_doc_no;
        $invoice_clients->delivery_note_date = $request->delivery_note_date;
        $invoice_clients->dispatched_through = $request->dispatched_through;
        $invoice_clients->destination = $request->destination;
        $invoice_clients->terms_of_delivery = $request->terms_delivery;
        $invoice_clients->save();

        for($products = 0; $products < count($request->product); $products++)
        {
            $generated_invoice = new GeneratedInvoice();
            $generated_invoice->invoice_clients_id = $invoice_clients->id;
            $generated_invoice->product_id = $request->product[$products];
            $generated_invoice->rate = (float)$request->rate[$products];
            $generated_invoice->quantity = $request->quantity[$products];
          
            $generated_invoice->save();
        }
        session()->flash('message','Client data has been added Successfully.');
        return redirect('invoice.create_invoice');
    }

    public function generateInvoice($client_id = null)
    {
        // $invoice_details = GeneratedInvoice::with(['clients','products','invoice_clients'])
        //                     ->where('invoice_clients_id',$client_id)->get();
        //InvoiceClients::with(['clients','products','generatedInvoice'])->get();

        $invoice_details = InvoiceClients::join('generated_invoice', 'generated_invoice.invoice_clients_id','invoice_clients.id')
        ->join('client_details','invoice_clients.invoice_clients_id','client_details.id')
        ->join('products','generated_invoice.product_id','products.id')
        ->where('invoice_clients.id',$client_id)
        ->get();


        $invoice_array = [];
        $final_invoice_array = [];
        foreach($invoice_details as $invoice_data)
        {
            $invoice_array['product_name'] = $invoice_data->Product_name;
            $invoice_array['hsn_sac'] = $invoice_data->has_sac;
            $invoice_array['qty'] = $invoice_data->quantity;
            $invoice_array['rate'] = $invoice_data->rate;
            $invoice_array['amount'] = $invoice_data->rate * $invoice_data->quantity;
            array_push($final_invoice_array, $invoice_array);
        }

        $total_amount = array_sum(array_column($final_invoice_array, 'amount'));
        $total_qty = array_sum(array_column($final_invoice_array, 'qty'));

        $cgst = ($total_amount * 9)/100;
        $sgst = ($total_amount * 9)/100;
        $grand_total = $total_amount+$cgst+$sgst;
        $numberFormatter = new \NumberFormatter('en', \NumberFormatter::SPELLOUT);
        $grand_total_words = $numberFormatter->format($grand_total);

        // Bank details
        $bank_details = BankDetail::get();

        return view('Invoice.my_invoice', compact('invoice_details','final_invoice_array','total_amount','total_qty','cgst','sgst','grand_total','grand_total_words','bank_details'));
    }
}
