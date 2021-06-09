@extends('layouts.app')
@section('content')

    <h1>Editar Objetivo General</h1>
    <div class="container mt-3">
        <form action="{{ route('general_objective.update', $general_objectives->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Objetivo General</label>
                        <input type="text" class="form-control" name="description" id="description" value="{{ $general_objectives->description }}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Actualizar Objetivo</button>
            <a href="{{ url('general_objective') }}" class="btn btn-danger text-white">Cancelar</a>
        </form>
    </div>
@endsection
