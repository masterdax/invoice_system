@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><h1>Account Detail</h1></center></div>

                <div class="card-body ">
                    
                <h1>Product Show</h1>
                <h1>{{$products -> Product_name}}</h1>
              </div>
            </div>
        </div>
    </div>
</div>
@endsection