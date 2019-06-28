<?php

namespace App\Http\Controllers;

use App\BankDetail;
use Illuminate\Http\Request;

class BankDetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $Accounts = BankDetail::all();
        return view('Bank.BankAcList',compact('Accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bankDetail = BankDetail::orderBy('id','desc')->paginate();
        return view('Bank.Bankcreate',compact('bankDetail'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'bank_name' =>'required',
            'branch' => 'required',
            'acc_hold_name' =>'required',
            'account_number' =>'required|digits:14|unique:bank_details',
            'account_type' =>'required',


        ]);
        $permitted_chars = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';

        BankDetail::create([
           
            'bank_name' => $request->bank_name,
            'branch_name'=> $request->branch,
            'acc_holder_name'=> $request->acc_hold_name,
            'account_number'=> $request->account_number,
            'ifsc_code'=> $request->ifsc,
            'acc_type'=> $request->account_type,
            'bank_address'=> $request->bank_address,
        ]);
        session()->flash('message','Bank data inserted Successfully.');
        return redirect(route('bank.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function show($bankDetail)
    {
        $account = BankDetail::find($bankDetail);
        return view('Bank.BankShow',['account' =>$account]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function edit($bankDetail)
    {
        $bank = BankDetail:: find($bankDetail);

        return view ('Bank.BankEdit',compact('bank'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, BankDetail $bank)
    {

        

        $bank->bank_name = $request->bank_name;
        $bank->branch_name = $request->branch_name;
        $bank->acc_holder_name = $request->acc_hold_name;
        $bank->account_number = $request->account_number;
        $bank->ifsc_code = $request->ifsc;
        $bank->acc_type = $request->account_type;
        $bank->bank_address = $request->bank_address;
        $bank->save();
        session()->flash('message','Bank data has been updated Successfully.');
        return redirect(route('bank.index'));

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\BankDetail  $bankDetail
     * @return \Illuminate\Http\Response
     */
    public function destroy($account)
    {

       $BankAccount = BankDetail::find($account);
       $BankAccount->delete();

       return redirect(route('bank.index'));
       
    }
}
