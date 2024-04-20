@extends('layouts.app')

@section('title')
create
@endsection

@section('content')
<div class="paginacion">
  <form class="form-text" action="{{route('productos.update', $productos->id)}}" method="POST" enctype="multipart/form-data">
    @csrf
    @method('UPDATE')

    @include('products.form')
    
    <button type="submit" class="btn btn-primary" value="enviar">Actualizar</button>
  </form>
</div>
@endsection