@extends('layouts.app')


@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header"><center><h1>Update client Details.</h1></center></div>

                <div class="card-body ">
                    @if(session()->has('message'))
                        <h1 class="alert alert-success">{{session()->get('message')}}</h1>
                    @endif

                    @if($errors->all())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                            <form action="{{route('client.update',$client->id)}}" method="post">
                            @csrf
                            @method('put') 
                                    
                                <div class="form-group">
                                    <label for="client_name">Name :</label>
                                    <textarea class="form-control" id="client_name" name="client_name" rows="1" style=" width:350px; resize: none;" >{{$client->client_name}}</textarea>
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
                                    <textarea class="form-control" id="client_contact" onkeypress="return isNumberKey(event)" name="client_contact" rows="1" style=" width:350px; resize: none;" >{{$client->client_contact}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="client_email">Email :</label>
                                    <textarea type="email"class="form-control" id="client_email" name="client_email" rows="1" style=" width:350px; resize: none;" >{{$client->client_email}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="gst_no">GST NO :</label>
                                    <textarea class="form-control" id="gst_no" name="gst_no" rows="1" style=" width:350px; resize: none;" >{{$client->gst_no}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="client_address">Address</label>
                                    <textarea class="form-control" id="client_address" name="client_address" rows="3" style=" width:350px; resize: none;">{{$client->client_address}}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-info">Update</button>      
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection