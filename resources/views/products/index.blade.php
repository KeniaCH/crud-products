@extends('layout.app')
@section('content')
    <h1> Lista de Productos</h1>

   {{--<alert class="alert alert-{{}}">
        @if (session('success'))
            {{ session('success') }}
        @endif
    </alert>--}}
    <table class="table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>DESCRIPCION</th>
                <th>PRECIO</th>
                <th>CANTIDAD</th>
                <th>ACCIONES</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->id }}</td>
                    <td>{{ $product->descripcion }}</td>
                    <td>{{ $product->precio }}</td>
                    <td>{{ $product->cantidad }}</td>
                    <td>
                        <a href="{{ route('products.show', $product->id) }}" class="btn btn-info">Ver</a>
                        <a href="{{ route('products.edit', $product->id) }}" class="btn btn-warning">Editar</a>
                        <form acction="{{ route('products.destroy', $product->id) }}" method="post" style="display:inline;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Eliminar</button>
                        </form>

                    </td>
                </tr>

            @endforeach
        </tbody>

        <a href="{{ route('products.create') }}" class="btn btn-primary">Crear nuevo producto</a>
@endsection
