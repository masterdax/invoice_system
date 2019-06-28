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
                <div class="card-header"><center><h1>Update Bank Details.</h1></center></div>

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
                            <form action="{{route('bank.update',$bank->id)}}" method="post">
                            @csrf
                            @method('put') <table>
                                
                                  
                                <div class="form-group">
                                    <label for="bank_name">Bank Name :</label>
                                    <textarea class="form-control" id="bank_name" name="bank_name" rows="1" style=" width:350px; resize: none;" >{{$bank->bank_name}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="branch_name">Branch Name:</label>
                                    <textarea class="form-control" id="branch_name" name="branch_name" rows="1" style=" width:350px; resize: none;" >{{$bank->branch_name}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="acc_hold_name">Account holder Name :</label>
                                    <textarea type="email"class="form-control" id="acc_hold_name" name="acc_hold_name" rows="1" style=" width:350px; resize: none;" >{{$bank->acc_holder_name}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="account_number">Account Number :</label>
                                    <textarea class="form-control" id="account_number" onkeypress="return isNumberKey(event)" name="account_number" rows="1" style=" width:350px; resize: none;" >{{$bank->account_number}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="ifsc">IFSC Code :</label>
                                    <textarea class="form-control" id="ifsc" name="ifsc" rows="1" style=" width:350px; resize: none;" >{{$bank->ifsc_code}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="account_type">Account type :</label>
                                    <textarea class="form-control" id="account_type" name="account_type" rows="1" style=" width:350px; resize: none;" >{{$bank->acc_type}}</textarea>
                                </div>
                                <div class="form-group">
                                    <label for="bank_address">Bank Address</label>
                                    <textarea class="form-control" id="bank_address" name="bank_address" rows="3" style=" width:350px; resize: none;">{{$bank->bank_address}}</textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-info">Update Bank Details</button>      
                                </div>

                            </form>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection