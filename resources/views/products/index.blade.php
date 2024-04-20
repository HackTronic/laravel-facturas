@extends('layouts.app')

@section('title')
create
@endsection

@section('content')
<div class="paginacion">
    <table id="mi_tabla" class="table table-striped" style="width:100%">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Lugar</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            @foreach($productos as $producto)
            <tr>
                    <td>{{$producto->Nombre}}</td>
                    <td>{{$producto->Descripcion}}</td>
                    <td>{{$producto->Precio}}</td>
                    <td>{{$producto->Nombre_establec}}</td>
                    <td>
                        <img src="{{asset($producto->Imagen)}}" alt="{{$producto->Nombre}}" class="img-fluid" width="80px" height="80px">
                    </td>
                    <td>
                        <form action="{{route('productos.delete', $producto->id)}}" method="POST">
                            @csrf
                            @method('DELETE')
                            
                            <button type="submit" onclick="return confirm('¿Quieres borrar?')">
                                <ion-icon name="trash-outline"></ion-icon>
                            </button>
                                                     
                        </form>
                        <a href="{{route('productos.edit', $producto->id)}}">
                            <button onclick="return confirm('¿Quieres editar?')">
                                <ion-icon name="create-outline"></ion-icon>
                            </button>
                        </a>
                    </td>
                    
            </tr>
            @endforeach
            
        </tbody>
        <tfoot>
            <tr>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Precio</th>
                <th>Lugar</th>
                <th>Imagen</th>
                <th>Acciones</th>
            </tr>
        </tfoot>
    </table>
</div>
@endsection