@extends('layouts.app')
@section('content')

    <h1>Editar Instalación</h1>
    <p>Edita la instalación</p>
    <div class="container mt-3">
        <form action="{{ route('campus.update', $campus->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Instalación</label>
                        <input type="text" class="form-control" name="name" id="name" required value="{{ $campus->name }}">
                    </div>
                    <div class="form-group">
                        <label for="">Dirección</label>
                        <input type="text" class="form-control" name="address" id="address" required value="{{ $campus->address }}">
                    </div>
                    <div class="form-group">
                        <label for="">Teléfono</label>
                        <input type="text" class="form-control" name="phone" id="phone" required value="{{ $campus->phone }}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Guardar Instalación</button>
            <a class="btn btn-danger" href="{{url('campus')}}">Cancelar</a>
        </form>
    </div>
@endsection
