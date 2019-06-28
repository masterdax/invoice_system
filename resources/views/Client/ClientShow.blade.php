@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><h1>Inquery</h1></center></div>

                <div class="card-body ">
                                    
                    <div class="col-md-8 "> <strong>Client Name </strong><span class="col-md-2">: {{$client->client_name}}</span></div> 
                
                <hr>
                
                    <div class="col-md-8 "> <strong>Contact NO </strong><span class="col-md-2">: {{$client->client_contact}}</span></div> 
                
                <hr>
                
                    <div class="col-md-8 "> <strong>E-mail </strong><span class="col-md-2">: {{$client->client_email}}</span></div> 
                
                <hr>
                
                    <div class="col-md-8 "> <strong>GST NO </strong><span class="col-md-2">: {{$client->gst_no}}</span></div> 
                
                <hr>

                <div class="col-md-8 "><strong>Address</strong>   <span class="col-md-2">: {{$client->client_address}}</span> </div>
                <hr>    
              </div>
            </div>
        </div>
    </div>
</div>
@endsection