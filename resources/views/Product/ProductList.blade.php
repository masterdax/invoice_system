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

                <div class="card-header"><center><h1>Product List</h1></center></div>

                <div class="card-body ">
                 <table>
                     <THEAD>
                         <TH>PRODUCT ID</TH>
                         <TH>PRODUCT NAME</TH>
                         <TH>HAS/SAC</TH>
                         <TH>EDIT</TH>
                         <TH>DELETE</TH>
                     </THEAD>
                     
                     <tbody>
                        
                               @foreach($productDetails as $product)
                         <tr>
                            
                             <td ><h4><a href="#"> {{$product->id}}</a></h4></td>
                             <td ><h4> <a href="{{route('product.show',$product->id)}}"> {{$product->Product_name}}</a>
                             </h4></td>
                             <td ><h4> {{$product->has_sac}}</h4></td>
                             
                             <td> <a href="{{route('product.edit',$product->id)}}" class="btn btn-info"> Edit </a></td>
                             <td>
                                <form onsubmit="return confirm('Are you sure you want to delete this Post ?');" class="d-inline-block" action="{{route('product.destroy',$product->id)}}" method="post">
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