@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header"><center><h1>Add client Details.</h1></center></div>

                <div class="card-body ">
                    <!--@include('Client.partial.errors')-->
                    @if($errors->all())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                            <form action="{{route('client.store')}}" method="post">
                             @csrf
                                 
                                <div class="form-group">
                                    <label for="client_name">Name :</label>
                                    <input type="text" class="form-control" id="client_name" name="client_name" placeholder="client name" style=" width:350px;" >
                                </div>
                                <div class="form-group">
                                    <label for="client_contact">Contact NO:</label>
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
                                    <input type="text" onkeypress="return isNumberKey(event)" class="form-control" id="client_contact" name="client_contact" placeholder="contact number" style=" width:350px;" >
                                </div>
                                <div class="form-group">
                                    <label for="client_email">Email :</label>
                                    <input type="email" class="form-control" id="client_email" name="client_email" placeholder="email" style=" width:350px;" >
                                </div>
                                <div class="form-group">
                                    <label for="gst_no">GST NO :</label>
                                    <input type="text" class="form-control" id="gst_no" name="gst_no" placeholder="GST NO" style=" width:350px;" >
                                </div>
                                <div class="form-group">
                                    <label for="client_address">Address</label>
                                    <textarea class="form-control" id="client_address" name="client_address" rows="3" style=" width:350px; resize: none;"></textarea>
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