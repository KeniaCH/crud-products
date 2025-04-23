@extends('layout.app')
@section('title', 'Ver Producto')

@section('content')
    <div class="container" class="mt-3">
        <h1>Detalles del Producto</h1>
        <p><strong>ID:</strong> {{ $product->id }}</p>
        <p><strong>Descripcion:</strong> {{ $product->descripcion }}</p>
        <p><strong>Precio:</strong> {{ $product->precio }}</p>
        <p><strong>Cantidad:</strong> {{ $product->cantidad }}</p>
        <a href="{{ route('products.index') }}" class="btn btn-primary">Volver a la lista de productos</a>

    </div>
@endsection
