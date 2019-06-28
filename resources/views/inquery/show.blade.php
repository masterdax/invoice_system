@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><h1>Inquery</h1></center></div>

                <div class="card-body ">
                <div class="col-md-8 "> <strong>Name </strong><span class="col-md-2">: {{$message ->name}}</span></div>
                 
                <hr>
                <div class="col-md-8 "><strong>E-Mail</strong>   <span class="col-md-2">: {{$message ->email}}</span> </div>
                
                <hr>
                <div class="col-md-8 "><strong>Contact</strong>   <span class="col-md-2">: {{$message ->Contact}}</span> </div>
                
                
                <hr>
                <div class="col-md-8 "><strong>Comapny Name.</strong>   <span class="col-md-2">: {{$message ->companyName}}</span> </div>
                
                
               
                <hr>
                <div class="col-md-8 "><strong>Message<span class="col-md-10 ">:</span>  </strong></div>
                   <div class="col-md-12 ">{{$message ->YourMessage}}</div>

                  <hr>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection