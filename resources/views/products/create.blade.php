@extends('layouts.app')

@section('title')
create
@endsection

@section('content')
<div class="paginacion">
  <form class="form-text" action="{{route('productos.store')}}" method="POST" enctype="multipart/form-data">
    @csrf

    @include('products.form')
    <button type="submit" class="btn btn-primary" value="enviar">Guardar</button>
  </form>
</div>
@endsection

    
 
  