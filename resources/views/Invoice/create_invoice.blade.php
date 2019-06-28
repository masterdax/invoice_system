@extends('layouts.app')
@include('navigation.CssRelation')
@section('content')

<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><h1>Invoice</h1></center></div>

                <div class="card-body ">
                    <form method="post" action="{{url('/store-invoice')}}">
                        {{csrf_field()}}
                	<div class="form-group">
                		<label>Client</label>
                		<select name="client" class="form-control">
                			@foreach($clients as $client)
								<option value="{{$client->id}}">{{$client->client_name}}</option>
                			@endforeach
                		</select>	
                	</div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Invoice Date</label>
                                <input type="text" name="invoice_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Challan No.</label>
                                <input type="text" name="challan_no" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mode/Terms of Payment</label>
                                <input type="text" name="mode_of_payment" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Supplier's Ref.</label>
                                <input type="text" name="supplier_ref" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Other Ref.</label>
                                <input type="text" name="other_ref" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Buyer's oreder no.</label>
                                <input type="text" name="buyer_order_no" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Date</label>
                                <input type="text" name="buyers_order_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dispatch Document No.</label>
                                <input type="text" name="dispatch_doc_no" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Delivery Note Date</label>
                                <input type="text" name="delivery_note_date" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Dispatched Through</label>
                                <input type="text" name="dispatched_through" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Destination</label>
                                <input type="text" name="destination" class="form-control">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Terms of Delivery</label>
                                <textarea name="terms_delivery" class="form-control"></textarea>
                            </div>
                        </div>
                    </div>
             		<div class="form-group"><label>Add product</label></div>
             		<table>
             			<thead>
             				<tr>
	             				<td>Product</td>
	             				<td>Rate</td>
	             				<td>Quantity</td>
	             				<td>Action</td>
             				</tr>
             			</thead>
             			<tbody>
             				<tr>
             					<td>
             						<select name="product[]" class="form-control product-list">
             							@foreach($products as $key=>$val)
             							<option value="{{ $val['id'] }}">{{$val['Product_name']}}</option>  
             							@endforeach
             						</select>
             					</td>
             					<td><input type="text" class="form-control" name="rate[]" required></td>
             					<td><input type="number" min="1" class="form-control" name="quantity[]" required></td>
             					<td>
                                    
             					</td>
             				</tr>
             			</tbody>
             		</table>
                    <a href="javascript:void(0)" class="btn btn-default add-row text-right  "><i class="fa fa-plus" aria-hidden="true"></i></a>
                    <div class="row float-right">
                        <input type="submit" name="storeInvoice" class="btn btn-success " value="Save">
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>
<script type="text/javascript">
    $(document).ready(function(){
        $(".add-row").click(function(){
            // var name = $("#name").val();
            // var email = $("#email").val();
            // var markup = "<tr><td><input type='checkbox' name='record'></td><td>" + name + "</td><td>" + email + "</td></tr>";
            // $("table tbody").append(markup);
            
            var products = '<select name="product[]" class="form-control product-list">';
            @foreach($products as $key=>$val)
             products += '<option value="{{ $val["id"] }}">{{$val["Product_name"]}}</option>';
            @endforeach
        products += '</select>';
               var markup = '<tr><td>'+products+'</td> <td><input type="text" name="rate[]" class="form-control" required></td><td><input type="text" name="quantity[]" class="form-control" required></td><td><input type="button"  class="btn btn-danger delete-row" value="delete" /></td></tr>';
         $("table tbody").append(markup);
         });
    //     // Find and remove selected table rows
       $('table').on('click', 'input[type="button"]', function () {
            $(this).closest('tr').remove();
        })
    });  
</script>
@endsection