@extends('layouts.app')
@section('content')

    <h1>Nuevo Centro de Formación</h1>
    <p>Crea un nuevo centro de Formación en el sistema.</p>
    <div class="container mt-3">
        <form action="{{ url('training_center') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Centro de Formación</label>
                        <input type="text" class="form-control" name="name" id="name" required>
                    </div>
                    <div class="form-group">
                        <label for="">Dirección</label>
                        <input type="text" class="form-control" name="address" id="address" required>
                    </div>
                    <div class="form-group">
                        <label for="">Número de Identificación Tributaria</label>
                        <input type="text" class="form-control" name="nit" id="nit" required>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Crear Centro</button>
            <a class="btn btn-danger" href="{{url('training_center')}}">Cancelar</a>
        </form>
    </div>
@endsection
