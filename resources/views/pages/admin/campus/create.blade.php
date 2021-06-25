@extends('layouts.app')
@section('content')

<h1>Nueva Instalación</h1>
<p>Crea una nueva instalación en el sistema.</p>
<div class="container mt-3">
    <form action="{{ url('campus') }}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-4">
                <div class="form-group">
                    <label for="">Instalación</label>
                    <input type="text" class="form-control" name="name" id="name" required>
                </div>
                <div class="form-group">
                    <label for="">Dirección</label>
                    <input type="text" class="form-control" name="address" id="address" required>
                </div>
                <div class="form-group">
                    <label for="">Teléfono</label>
                    <input type="text" class="form-control" name="phone" id="phone" required>
                </div>
                <div class="form-group">
                    <label for="training_center_id">Centro de Formación</label>
                    <select name="training_center_id" id="training_center_id" class="form-control">
                        <option value="" selected>Seleccionar</option>
                        @foreach($training_centers as $training_center)
                        <option value="{{ $training_center->id }}">{{ $training_center->name }}</option>
                        @endforeach
                    </select>
                </div>

            </div>
        </div>
        <button class="btn btn-primary">Crear Instalación</button>
        <a class="btn btn-danger" href="{{url('campus')}}">Cancelar</a>
    </form>
</div>
@endsection
