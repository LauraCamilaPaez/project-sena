@extends('layouts.app')
@section('content')

    <h1>Editar Objetivo Específico</h1>
    <div class="container mt-3">
        <form action="{{ route('specific_objective.update', $specific_objectives->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Objetivo Específico</label>
                        <input type="text" class="form-control" name="description" id="description" value="{{ $specific_objectives->description }}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Actualizar Objetivo</button>
            <a href="{{ url('specific_objective') }}" class="btn btn-danger text-white">Cancelar</a>
        </form>
    </div>
@endsection
