
    @extends('layout')
    @section('title','Productos')
    @section('encabezado','Lista de Productos')
    @section('Content')
        
    
<a href="products/form" class="btn btn-primary"> Nuevo Producto</a>
@if(session()->has('message'))
<div class="aler aler-success">
{{session()->get('message')}}
</div>
@endif
  
<br>
<table  class="table thead-lightr">
    <thead>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Cost</th>
            <th>Price</th>
            <th>Quantity</th>
            <th>Brand</th>
            <th></th>
        </tr>
    </thead>

    <tbody>
        @foreach($productsList as $product)
        <tr>
            <td>{{$product->id}}</td>
            <td>{{$product->name}}</td>
            <td>{{$product->cost}}</td>
            <td>{{$product->price}}</td>
            <td>{{$product->quantity}}</td>
            <td>{{$product->brand}}</td>
            <th>
                <a href="#" class="btn btn-warning">Editar</a>
                {{-- <a href="/ListProducts/delete/{{$product->id}}" class="btn btn-danger">Borrar</a> --}}
                <a href="{{ route ('prodDelete',['id'=>$product->id])}}" class="btn btn-danger">Borrar</a>
                
            </th>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection
