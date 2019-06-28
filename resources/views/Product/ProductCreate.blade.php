@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header"><center><h1>Add Product.</h1></center></div>

                <div class="card-body ">
                    <!--@include('Client.partial.errors')-->
                    @if($errors->all())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                            <form action="{{route('product.store')}}" method="post">
                             @csrf
                                 
                                <div class="form-group">
                                    <label for="product_name">Product Name :</label>
                                    <input type="text" class="form-control" id="product_name" name="product_name" placeholder="Product Name" style=" width:350px;" >
                                </div>
                                <div class="form-group">
                                    <label for="has_sac">HAS/SAC:</label>
                                    <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="has_sac" name="has_sac" placeholder="HAS/SAC" style=" width:350px;" >
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-info">Insert</button>      
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection