@extends('layout')
@section('title','Nuevo Producto')
<br>
<br>
@section('encabezado','Nuevo Producto')
@section('Content') 
 

<form action="{{route('products.save')}}" method="POST" class="container">
  @csrf
  {{-- <input type="hidden" name="id" value="{{old('id') ? old('id' : $product->id }}"> --}}
      <div class="mb-3 row">
        <label for="nombre" class="col-sm-2 col-form-label">Nombre</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="name" name="name" value="{{old('name') ? old('name') : $product->name }}">
        </div>
      </div>
      @error('name')
          <p class="text-danger">
            {{$message}}
          </p>
      @enderror

      <div class="mb-3 row">
        <label for="nombre" class="col-sm-2 col-form-label">Costo</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"  id="cost" name="cost" value="{{old('cost') ? old('cost'): $product->cost}}">
        </div>
      </div>
      @error('cost')
          <p class="text-danger">
            {{$message}}
          </p>
      @enderror

      <div class="mb-3 row">
        <label for="nombre" class="col-sm-2 col-form-label">Precio</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"  id="price"  name="price" value="{{old('price') ? old('price'): $product->price}}">
        </div>
      </div>
      @error('price')
          <p class="text-danger">
            {{$message}}
          </p>
      @enderror

      <div class="mb-3 row">
        <label for="nombre" class="col-sm-2 col-form-label">Cantidad</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"  id="quantity" name="quantity" value="{{old('quantity') ? old('quantity') : $product->quantity}}">
        </div>
      </div>
      @error('quantity')
      <p class="text-danger">
        {{$message}}
      </p>
       @enderror
      <div class="mb-3 row">
        <label for="nombre" class="col-sm-2 col-form-label">Marca</label>
        <div class="col-sm-10">
          <input type="text" class="form-control"  id="brand" name="brand" value="{{old('brand') ? old('brand') : $products->brand }}">
        </div>
      </div>
      @error('brand')
      <p class="text-danger">
        {{$message}}
      </p>
      @enderror

<div class="mb-3 row">
        <div class="col-sm-10"></div>
        <div class="col-sm-10"></div>
  </div>
<div class="mb-3 row"> 
    <div class="col-sm-10"> </div>
    <div class="col-sm-2">
    <button type="submit" class="btn btn-primary">Guardar</button>
</div>
</div>
</form>
  @endsection 