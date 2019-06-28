@extends('layouts.app')

@section('content')

<div class="container mt-5">
	<SCRIPT language=Javascript>
      <!--
      function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;

         return true;
      }
      //-->
   </SCRIPT>
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header"><center><h1>Edit Product.</h1></center></div>

                <div class="card-body ">
                    <!--@include('Client.partial.errors')-->
                    @if($errors->all())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                            <form action="{{route('product.update',$productedit->id)}}" method="post">
                             @csrf
                            @method('put')
                                <div class="form-group">
                                    <label for="product_name">Product Name :</label>
                                    <textarea class="form-control" id="product_name" name="product_name" rows="1" style=" width:350px; resize: none;" >{{$productedit->Product_name }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="has_sac">HAS/SAC:</label>
                                    <textarea class="form-control text-center" onkeypress="return isNumberKey(event)" id="has_sac" name="has_sac" rows="1" style=" width:350px; resize: none;" onpaste="return false" >{{$productedit->has_sac}}</textarea>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-info">update</button>      
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection