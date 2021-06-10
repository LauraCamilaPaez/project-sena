@extends('layouts.app')
@section('content')

    <h1>Editar Centro de Formación</h1>
    <p>Edita el centro de Formación en el sistema.</p>
    <div class="container mt-3">
        <form action="{{ route('training_center.update', $training_center->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Centro de Formación</label>
                        <input type="text" class="form-control" name="name" id="name" required value="{{ $training_center->name }}">
                    </div>
                    <div class="form-group">
                        <label for="">Dirección</label>
                        <input type="text" class="form-control" name="address" id="address" required value="{{ $training_center->address }}">
                    </div>
                    <div class="form-group">
                        <label for="">Número de Identificación Tributaria</label>
                        <input type="text" class="form-control" name="nit" id="nit" required value="{{ $training_center->nit }}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Guardar Centro</button>
            <a class="btn btn-danger" href="{{url('training_center')}}">Cancelar</a>
        </form>
    </div>
@endsection
