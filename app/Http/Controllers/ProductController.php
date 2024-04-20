<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Establishment;
use Illuminate\Http\Request;


class ProductController extends Controller
{
    public function welcome()
    {
        return view("welcome");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $productos = Product::all();
       
        return view('products.index',compact('productos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categorias = Category::all();
        $establecimientos = Establishment::all();
        $producto = Product::all();
        return view('products.create',compact('establecimientos','categorias','producto'));
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $categorias = Category::all();
        $establecimientos = Establishment::all();

        $producto = new Product();

        $producto->Nombre = $request->input('Nombre');
        $producto->Precio = $request->input('Precio');
        $producto->Descripcion = $request->input('Descripcion');

        $producto->Fk_id_establecimiento = $request->input('Fk_id_establecimiento');

        $producto->Fecha_registro = $request->input('Fecha_registro');

        $producto->Fk_id_categoria = $request->input('Fk_id_categoria');

        $producto->Imagen = "imagen";

        
        if($request->hasFile('Imagen')) {
            //$request->validate(['file'=> 'required|image|max:2048']);
            $file = $request->file('Imagen');
            $destinationPath = 'imagenes/';
            $filename = date("d-m-Y") . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('Imagen')->move($destinationPath, $filename);
            $producto->Imagen = $destinationPath . $filename;
        }
        
        $producto->Activos = 1;
        $producto->save();
        return view('products.create',compact('establecimientos','categorias'));
    }

    /**
     * Display the specified resource.
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categorias = Category::all();
        $establecimientos = Establishment::all();
        $producto = Product::findOrFail($id);
        
        return view('products.create',compact('producto','establecimientos','categorias'));
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $producto = Product::findOrFail($id);
        $producto->Nombre = $request->input('Nombre');
        $producto->Precio = $request->input('Precio');
        $producto->Descripcion = $request->input('Descripcion');

        $producto->Fk_id_establecimiento = $request->input('Fk_id_establecimiento');

        $producto->Fecha_registro = $request->input('Fecha_registro');

        $producto->Fk_id_categoria = $request->input('Fk_id_categoria');

        $producto->Imagen = "imagen";

        
        if($request->hasFile('Imagen')) {
            //$request->validate(['file'=> 'required|image|max:2048']);
            $file = $request->file('Imagen');
            $destinationPath = 'imagenes/';
            $filename = date("d-m-Y") . '-' . $file->getClientOriginalName();
            $uploadSuccess = $request->file('Imagen')->move($destinationPath, $filename);
            $producto->Imagen = $destinationPath . $filename;
        }
        
        $producto->Activos = 1;
        $producto->save();
        return view('products.index',compact('producto'));

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $producto = Product::findOrFail($id);
        $producto->delete();
        $productos = Product::all();
        return view('products.index',compact('productos'));
        
        
        
    }
}
