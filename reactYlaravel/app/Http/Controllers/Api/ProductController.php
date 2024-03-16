<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
   
    public function index()
    {
        $products = Product::all();
        return $products;
    }

   
    public function store(Request $request)
    {
        $product =new Product();
        $product->nombre_libro = $request->nombre_libro;
        $product->nombres_autor = $request->nombres_autor;
        $product->fecha_nacimiento = $request->fecha_nacimiento;
        $product->fecha_fallecimiento = $request->fecha_fallecimiento;
        $product->genero_libro = $request->genero_libro;
        $product->fecha_publicacion = $request->fecha_publicacion;
        $product->editorial = $request->editorial;
        
        $product->save();
    }

    
    public function show(string $id)
    {
        
        $product = Product::findOrFail($id);
        return $product;
    }

    
    public function update(Request $request, string $id)
    {
        $product= Product::findOrFail($request->id);
        $product->nombre_libro = $request->nombre_libro;
        $product->nombres_autor = $request->nombres_autor;
        $product->fecha_nacimiento = $request->fecha_nacimiento;
        $product->fecha_fallecimiento = $request->fecha_fallecimiento;
        $product->genero_libro = $request->genero_libro;
        $product->fecha_publicacion = $request->fecha_publicacion;
        $product->editorial = $request->editorial;

        $product ->save();
        return $product;
    }

    
    public function destroy(string $id)
    {
        $product = Product::destroy($id);
        return $product;

    }
}
