
@extends('layouts.app')
@include('navigation.CssRelation')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	

                    
            <div class="card">

                <div class="card-header"><center><h1>All Inqueries</h1></center></div>

                <div class="card-body ">
                	@if(session()->has('message'))
                        <h1 class="alert alert-success">{{session()->get('message')}}</h1>
                    @endif
                 <table>
                        <thead>
                            <th>BANK ID</th>
                            <th>BANK NAME</th>
                            <th>A/C NUMBER</th>
                            <th>DATE</th>

                        </thead>
                     
                     <tbody>
                        
                               @foreach($Accounts as $bankDetail)
                         <tr>
                            <td >{{$bankDetail->id}}</td>
                             
                             <td ><h4><a href="{{route('bank.show',$bankDetail->id)}}"> {{$bankDetail->bank_name}}</a></h4></td>
                             <td ><h4><a href="{{route('bank.show',$bankDetail->id)}}"> {{$bankDetail->account_number}}</a></h4></td>
                             <td>{{$bankDetail->created_at->diffForHumans()}}</td>
                             <td> <a href="{{route('bank.show',$bankDetail->id)}}" class="btn btn-success"> View</a></td>
                             <td> <a href="{{route('bank.edit',$bankDetail->id)}}" class="btn btn-info"> Edit </a></td>
                             <td>
                                <form onsubmit="return confirm('Are you sure you want to delete this Post ?');" class="d-inline-block" action="{{route('bank.destroy',$bankDetail->id)}}" method="post">
                            @csrf
                            @method('delete')
                                                       
                            <button type="submit" class="btn btn-danger" >DELETE</button>
                        </form>
                             </td>
                         </tr>
                         @endforeach   
                     </tbody>
                 </table>
                </div>
            </div>
        </div>
        

        
    </div>
    
</div>
@endsection