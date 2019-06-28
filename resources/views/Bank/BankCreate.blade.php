@extends('layouts.app')

@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-7">
            <div class="card">
                <div class="card-header"><center><h1>Add Bank Account details.</h1></center></div>

                <div class="card-body ">
                    <!--@include('Client.partial.errors')-->
                    @if($errors->all())
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $error)
                                <li>{{$error}}</li>
                            @endforeach
                        </div>
                    @endif
                            <form action="{{route('bank.store')}}" method="post">
                             @csrf
                                 
                                
                                <div class="form-group">
                                    <label for="bank_name">Bank Name :</label>
                                    <input type="text" class="form-control" id="bank_name" name="bank_name" placeholder="Bank name" style=" width:350px;" >
                                </div>
                                <div class="form-group">
                                    <label for="branch">branch :</label>
                                    <input type="text" class="form-control" id="branch" name="branch" placeholder="Branch name" style=" width:350px;" >
                                </div>
                                <div class="form-group">
                                    <label for="acc_hold_name">Account holder Name :</label>
                                    <input type="text" class="form-control" id="acc_hold_name" name="acc_hold_name" placeholder="Account Holder Name" style=" width:350px;" >
                                </div>
                                <div class="form-group">
                                    <label for="account_number">Account number :</label>
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
                                    <input type="text" class="form-control" onkeypress="return isNumberKey(event)" id="account_number" name="account_number" placeholder="Account Number" style=" width:350px;" >
                                </div>
                                
                                <div class="form-group">
                                    <label for="ifsc">IFSC code :</label>
                                    <input type="text" class="form-control" id="ifsc" name="ifsc" placeholder="IFSC Code" style=" width:350px;" >
                                </div>
                                <div class="form-group">
                                    <label for="account_type">Account Type :</label>
                                    <select type="text" class="form-control" id="account_type" name="account_type" placeholder="Account Type" style=" width:350px;" >
                                        <option value="Saving Account">Saving Account</option>
                                        <option value="Current Accoun">Current Account</option>
                                        <option value="-">-</option>
                                        option
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="bank_address"> Bank Address</label>
                                    <textarea class="form-control" id="bank_address" name="bank_address" placeholder="Bank address" rows="3" style=" width:350px; resize: none;"></textarea>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-outline-info">Add bank Account</button>      
                                </div>
                            </form>
                        </div>
            </div>
        </div>
    </div>
</div>
@endsection