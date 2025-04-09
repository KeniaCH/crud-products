@extends('layout.app')
@section('content')
    <h1>Product List</h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>DESCRIPCION</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->descripcion }}</td>
                    <td>{{ $product->precio }}</td>
                    <td>{{ $product->cantidad }}</td>

                </tr>

            @endforeach
        </tbody>

        {{--<a href="{{ route('products.create') }}" class="btn btn-primary">Crear nuevo producto</a>--}}
@endsection
