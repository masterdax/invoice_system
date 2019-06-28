@extends('layouts.app')
@include('navigation.CssRelation')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
                   @if(session()->has('message'))
                        <h1 class="alert alert-success">{{session()->get('message')}}</h1>
                    @endif
            <div class="card">
                <div class="card-header"><center><h1>Generated Invoices</h1></center></div>

                <div class="card-body ">
                 <table>
                     <thead>
                         <tr>
                            <th>Sr.</th>
                             <th>Invoice for</th>
                             <th>Created At</th>
                             <th>Action</th>
                         </tr>
                     </thead>
                     <tbody>
                       <?php $sr=1; ?>
                        @foreach($invoice_clients as $client)
                        <tr>
                            <td>{{$sr}}</td>
                            <td >{{$client->clients->client_name}}</td>
                            <td >{{$client->created_at}}</td>
                            <td>
                                <a href="{{ url('/generate-invoice/') }}/{{$client->invoice_clients_id}}" class="btn btn-primary" style="color:#fff">Invoice</a>
                                <form onsubmit="return confirm('Are you sure you want to delete this Post ?');" class="d-inline-block" action="{{route('client.destroy',$client->id)}}" method="post">
                                    @csrf
                                    @method('delete')
                                                       
                                     <button type="submit" class="btn btn-danger" >DELETE</button>
                                </form>
                            </td>
                        </tr>
                         <?php $sr++; ?>
                     @endforeach   
                     </tbody>
                 </table>
                </div>
            </div>
        </div>
      
    </div>
   
</div>
@endsection