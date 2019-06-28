
@extends('layouts.app')
    <!-- CUSTOM STYLE  -->
    <link href="{{ asset('css/custom-style.css') }}" rel="stylesheet" />
    <style>
      .table-bordered{
        border: 1px solid #000 !important;
      }
    </style>
@section('content')
<div class="container">
  <table class="table table-striped table-bordered table-hover mb-0">
    <tr>
      <td colspan="7" class="text-center"><strong>TAX INVOICE</strong></td>
    </tr>
    <tr>
      <td rowspan="5">
        <strong>MITAL ENGINEERING WORKS</strong><br>
        992/1/20, G.I.D.C Estate,
        <br>
        Makarpura, Vadodara-390010
        <br>
        (M):- 9998042119
        <br>
        Email: mital.engineering@gmail.com
        <br>
        PAN No.:
        <br>
        GST No.: 24AFPPA2846CIZU
        <br>
        Gujarat - 24     
      </td>
    </tr>
    <tr>
      <td>
        <label> <strong> Invoice No.</strong></label> 
        {{$invoice_details[0]->id}}
      </td>
      <td>
        <label><strong>Dated</strong></label>
         {{$invoice_details[0]->dated}}
      </td>
    </tr>
    <tr>
      <td>
         <label><strong> Challan No.</strong></label> 
          {{$invoice_details[0]->challan_no}}
      </td>
      <td>
         <label><strong> Mode/Terms of Payment.</strong></label> 
            {{$invoice_details[0]->mode_terms_of_payment}}
      </td>
    </tr>
    <tr>
      <td>
          <label><strong> Supplier's Ref.</strong></label> 
          {{$invoice_details[0]->suppliers_ref}}
      </td>
      <td>
          <label> <strong> Other Reference(s)</strong></label> 
          {{$invoice_details[0]->other_ref}}
      </td>
    </tr>
    <tr>
      <td>
          <label> <strong> Buyer's Order No. </strong></label> 
            {{$invoice_details[0]->buyers_order_no}}
      </td>
      <td>
          <label> <strong>Date</strong></label> 
            {{$invoice_details[0]->buyers_order_date}}
      </td>
    </tr>
    <tr>
      <td rowspan="4">
        <strong> Bill To:</strong> <br>
        <strong> {{$invoice_details[0]->clients->client_name}}</strong><br>
       {{$invoice_details[0]->clients->client_address}}
        <br>GST No.: {{$invoice_details[0]->clients->gst_no}}<br>
      </td>
    </tr>
    <tr>
      <td>
        <strong> Dispatch Document No. </strong>
        <br>
        {{$invoice_details[0]->dispatch_document_no}}
      </td>
      <td>
        <strong> Delivery Note Date </strong>
        <br>
        {{$invoice_details[0]->delivery_note_date}}
      </td>
    </tr>
    <tr>
      <td>
        <strong>Dispatched Through</strong> 
        <br>
        {{$invoice_details[0]->dispatched_through}}
      </td>
      <td>
        <strong>Destination</strong>
        <br>
        {{$invoice_details[0]->destination}}
      </td>
    </tr>
    <tr>
      <td colspan="2">
        <strong>Terms of Delivery</strong> <br>
        {{$invoice_details[0]->terms_of_delivery}}
      </td>
    </tr>
  </table>
  <table class="table table-striped table-bordered table-hover">
    <thead>
      <tr>
        <th>Sr. No.</th>
        <th width="30.5%">Description of Goods</th>
        <th>HSN/SAC Code</th>
        <th>Qty</th>
        <th>Rate</th>
        <th>per</th>
        <th class="text-right">Amount(Rs.)</th>
      </tr>
    </thead>
    <tbody>
      <!-- Loop through data -->
      <?php $sr = 1; ?>
      @foreach($final_invoice_array as $invoice_data)
      <tr>
          <td>{{$sr}}</td>
          <td>{{$invoice_data['product_name']}}</td>
          <td>{{$invoice_data['hsn_sac']}}</td>
          <td>{{$invoice_data['qty']}}</td>
          <td>{{$invoice_data['rate']}}</td>
          <td></td>
          <td class="text-right">{{$invoice_data['amount']}}</td>
      </tr>
      <?php $sr++; ?>
      @endforeach
      <!-- Loop through data end-->
      
      <!-- Total Quantity start -->
      <tr>
        <td colspan="2"></td>
        <td>Total</td>
        <td>{{$total_qty}}</td>
        <td></td>
        <td></td>
        <td></td>
      </tr>
      <!-- Total Quantity end -->
      
      <!-- Amount calculations start -->
      <tr>
        <td colspan="4" rowspan="4">
          <strong>Amount Chargeable(in words): <br>
            {{ucfirst($grand_total_words)}} only.
          </strong>
        </td>
        <td colspan="2">
          <strong>Total Amount</strong>
        </td>
        <td class="text-right">
          {{$total_amount}}
        </td>
      </tr>
      <tr>
        <td colspan="2">
          <strong>CGST 9%</strong>
        </td>
        <td class="text-right">
          {{$cgst}}
        </td>
      </tr>
       <tr>
        <td colspan="2">
          <strong>SGST 9%</strong>
        </td>
        <td class="text-right">
          {{$sgst}}
        </td>
      </tr>
       <tr>
        <td colspan="2">
          <strong>Grand Total</strong>
        </td>
        <td class="text-right">
          {{$grand_total}}
        </td>
      </tr>
      <!-- Amount calculations end -->

      <tr>
        <td colspan="3">
          <strong>Company's Bank Details</strong>
          <br>Bank Name: Test
          <br>Branch: Test
          <br>Account No.: Test
          <br>IFSC Code No. : Test
        </td>
        <td colspan="4" class="text-center">
          For, MITAL ENGINEERING WORKS
          <br>
          <br>
          <br>
          <span class="text-center"><strong>Authorized Sign.</strong></span>
        </td>
      </tr>
    </tbody>
  </table>
           
     </div>
      <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 text-center">
          <p class="m-0">SUBJECT TO VADODARA JURISDICTION</p>
          <p>This is a Computer Generated Invoice</p>
        </div>
      </div>
    </div>
@endsection
