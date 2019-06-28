@extends('layouts.app')
@include('navigation.CssRelation')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
        	       @if(session()->has('message'))
                        <h1 class="alert alert-success">{{session()->get('message')}}</h1>
                    @endif

                    <script src="/javascripts/application.js" type="text/javascript" charset="utf-8" async defer>
                    	function printpage()
                    	{
                    		window.print();
                    	}
                    </script>
            <div class="card">

                <div class="card-header"><center><h1>All Inqueries</h1></center></div>

                <div class="card-body ">
                 <table>
                     <thead>
                         <tr>
                             <th>CLIENT ID</th>
                             <th>CLIENT NAME</th>
                             <th>DATE</th>
                             <th>VIEW</th>
                             <th>EDIT</th>
                             <th>DELETE</th>
                         </tr>
                     </thead>
                     <tbody>
                        
                               @foreach($clients as $client)
                         <tr>
                            <td >{{$client->id}}</td>
                             
                             <td ><h4><a href="{{route('client.show',$client->id)}}"> {{$client->client_name}}</a></h4></td>
                             <td>{{$client->created_at}}</td>
                             <td> <a href="{{route('client.show',$client->id)}}" class="btn btn-success"> View</a></td>
                             <td> <a href="{{route('client.edit',$client->id)}}" class="btn btn-info"> Edit </a></td>
                             <td>
                                <form onsubmit="return confirm('Are you sure you want to delete this Post ?');" class="d-inline-block" action="{{route('client.destroy',$client->id)}}" method="post">
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
        <button class="btn btn-primary" onclick="printpage()">Print</button>

        
    </div>
    {{$clients->links()}}
</div>
@endsection