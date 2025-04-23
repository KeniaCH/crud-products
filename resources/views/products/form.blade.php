@extends('layout.app')
@section('title', 'Alta de Productos')

@section('content')
    <div class="container">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form acction="{{ route('products.store')}}" method="post">
            @csrf
            @method('POST')
            <div class="form-group">
                <label for="title">Descripcion</label>
                <input type="text" name="descripcion" placeholder="descripcion" class="form-control" >
            </div>
            <div class="form-group">
                <label for="title">Precio</label>
                <input type="text" name="precio" placeholder="precio" class="form-control" >
            </div>
            <div class="form-group">
                <label for="title">Cantidad</label>
                <input type="text" name="cantidad" placeholder="cantidad"  class="form-control" >
            </div>
            <button type="submit" class="btn btn-primary">Guardar</button>
            <a href="{{ route('products.index') }}" class="btn btn-primary">Volver</a>
        </form>
    </div>
@endsection
