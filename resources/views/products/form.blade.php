@extends('layout.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h2>Crear Nuevo producto</h2>
    </div>
    <div class="card-body">

        <form acction="{{ route('save')}}" method="post">
            @csrf
            @method('PUT')
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
</div>
@endsection
