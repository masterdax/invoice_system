@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><h1>Account Detail</h1></center></div>

                <div class="card-body ">
                    
                
                    <div class="col-md-8 "> <strong>Bank Name </strong><span class="col-md-2">: {{$account->bank_name}}</span></div> 
                <hr>
                    <div class="col-md-8 "> <strong>branch Name </strong><span class="col-md-2">: {{$account->branch_name}}</span></div> 
                
                <hr>
                
                    <div class="col-md-8 "> <strong>Account Holder Name </strong><span class="col-md-2">: {{$account->acc_holder_name}}</span></div> 
                
                <hr>
                
                    <div class="col-md-8 "> <strong>A/C Number </strong><span class="col-md-2">: {{$account->account_number}}</span></div> 
                
                <hr>
                
                    <div class="col-md-8 "> <strong>Account Type </strong><span class="col-md-2">: {{$account->acc_type}}</span></div> 
                <hr>
                
                    <div class="col-md-8 "> <strong>IFSC Code </strong><span class="col-md-2">: {{$account->ifsc_code}}</span></div> 
                
                <hr>

                <div class="col-md-8 "><strong> Bank Address</strong>   <span class="col-md-2">: {{$account->bank_address}}</span> </div>
                
              </div>
            </div>
        </div>
    </div>
</div>
@endsection