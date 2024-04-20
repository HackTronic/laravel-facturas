

<div class="mb-3">
    <label for="inputNombre" class="form-label">Nombre: </label>
    <input type="text" name="Nombre" id="inputNombre" value="{{$producto->Nombre}}">
  </div>

  <div class="mb-3">
    <label for="inputDescripcion" class="form-label">Descripción: </label>
    <input type="text" name="Descripcion" id="inputDescripcion" value="{{$producto->Descripcion}}">
  </div>
  <div class="mb-3">
    <label for="inputPrecio" class="form-label">Precio: </label>
    <input type="number" name="Precio" id="inputPrecio" step="any" value="{{$producto->Precio}}">
  </div>
  <div class="mb-3">
    <label for="lugar">Lugar: </label>
    <select name="Fk_id_establecimiento" id="lugar">
      @foreach ($establecimientos as $establecimiento)
  
        <option value="{{$establecimiento['id']}}">{{$establecimiento['Nombre_establec']}}</option>
          
      @endforeach
    </select>
    <button><ion-icon name="trash-outline"></ion-icon></button>
  </div>
  <div class="mb-3">
    <label for="inputFecha" class="form-label">Fecha: </label>
    <input type="date" name="Fecha_registro" id="inputFecha" value="{{$producto->Fecha_registro}}">
  </div>
  <div class="mb-3">
    <label for="inputCategoria">Categoria: </label>
    <select name="Fk_id_categoria" id="inputCategoria">
      @foreach ($categorias as $categoria)
  
        <option value="{{$categoria['id']}}">{{$categoria['Nombre_categoria']}}</option>
          
      @endforeach
    </select>
  </div>
  <div class="mb-3">
      <label for="inputImagen" class="form-label">Imagen: </label>
      <input type="file" name="Imagen" id="inputImagen" accept="image/jpeg" value="{{$producto->Imagen}}">
      @error('file')
          <br>
          <small class="text-danger">Solo imagenes con formato .jpeg</small>
      @enderror
  </div>

  
  