@extends('layout.app')
@section('title', 'ActualizarProducto')

@section('content')
    <div class="container">

        <h1></h1>Actualizar Producto</h1>
        <form acction="{{ route('products.update',$id)}}" method="post">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="title">ID</label>
                <input type="text" name="id" value="{{ $id }}" class="form-control" readonly>
            </div>
            <div class="form-group">
                <label for="title">Descripcion</label>
                <input type="text" name="descripcion" placeholder="descripcion" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Precio</label>
                <input type="text" name="precio" placeholder="precio" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="title">Cantidad</label>
                <input type="text" name="cantidad" placeholder="cantidad"  class="form-control" required>
            </div>
            <button type="submit">Submit</button>
        </form>
    </div>
@endsection
