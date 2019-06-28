@extends('layouts.app')
@include('navigation.CssRelation')
@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"><center><h1>All Inqueries</h1></center></div>

                <div class="card-body ">
                 <table>
                        <thead>
                            <th>INQUIRY ID</th>
                            <th>NAME</th>
                            <th>DATE</th>
                            <th>VIEW</th>
                            <th>DELETE</th>
                        </thead>
                     
                     <tbody>
                        
                               @foreach($messages as $message)
                         <tr>
                            <td >{{$message->id}}</td>
                             <td ><h4><a href="{{route('message.show',$message->id)}}"> {{$message->name}}</a></h4></td>
                             <td>{{$message->created_at->diffForHumans()}}</td>
                             <td> <a href="{{route('message.show',$message->id)}}" class="btn btn-success"> view</a></td>
                             <td>
                                <form onsubmit="return confirm('Are you sure you want to delete this Post ?');" class="d-inline-block" action="{{route('message.destroy',$message->id)}}" method="post">
                            @csrf
                            @method('delete')
                                                       
                            <button type="submit" class="btn btn-danger" style="height:33px;" >DELETE</button>
                        </form>
                             </td>
                             
                         </tr>
                         @endforeach   
                    
                     
                     </tbody>
                 </table>
                <!-- @foreach($messages as $meassage)
                   <a href="#"> {{$message->name}}</a>
                    {{$message->email}}
                    {{$message->Contact}}
                 @endforeach-->
                </div>
            </div>
        </div>
    </div>
    {{$messages->links()}}
</div>

@endsection