@extends('layout')

@section('content')
<div class="container">
    <div class="row ">
        <div class="col-sm-6">
        <form action="/" method="POST">
            @csrf
            <div class="form-group">
                <label for="name">Nombre</label>
                <input type="text" class="form-control" name="name" placeholder="Ingresa tu Nombre" required>
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" name="email" placeholder="Ingresa tu dirección de Coreo" required>
            </div>
            <button type="submit" class="btn btn-primary">Registrate</button>
        </form>
    </div>
    </div>
</div>
<!-- /.row -->
@endsection

