<?php

namespace App\Http\Controllers;

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
    public function store(Request $request)
    {
        $producto = [
            'descripcion' => $request->descripcion,
            'precio' => $request->precio,
            'cantidad' => $request->cantidad,
        ];
        Product::create($producto);
        return redirect()->route('products.index');
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $user = Product::find($id);
        $user->descripcion = 'Chamarra';
        $user->precio = '100';
        $user->cantidad = '10';
        $user->save();
        return 'Producto actualizado';
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);
        $product->delete();
        return 'Producto eliminado';
    }
}
