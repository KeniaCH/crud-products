<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProcductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('products.index',compact('products'));

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreProcductRequest $request)
    {
        /*$messages =[
            'required' => 'El campo :attribute es requerido',
            'numeric' => 'El campo :attribute debe ser un número',
            'string' => 'El campo :attribute debe ser una cadena de texto',
            'max' => 'El campo :attribute no debe exceder :max caracteres',
        ];
        $validate = $request->validate([
            'descripcion'=> 'required|string|max:100',
            'precio'=> 'required|numeric',
            'cantidad'=> 'required|numeric',
        ], $messages);*/
        $validate = $request->validated();
        $product = new Product();
        $product->descripcion = $request->descripcion;
        $product->precio = $request->precio;
        $product->cantidad = $request->cantidad;
        $product->save();

        return redirect()->route('products.index')->with('success', 'Producto creado con éxito');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product=  Product::find($id);
        return view('products.show', compact('product'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('products.edit', compact('id'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Product::find($id);
        $user->descripcion = $request->descripcion;;
        $user->precio = $request->precio;
        $user->cantidad = $request->cantidad;
        $user->save();
        return redirect()->route('products.index'->with('success', 'Producto actualizado con éxito'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('products.index');
    }
}
