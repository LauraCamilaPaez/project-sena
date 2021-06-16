@extends('layouts.app')
@section('content1')

    <h1>Crear Objetivo Específico</h1>
    <div class="container mt-3">
        <form action="{{ url('specific_objective') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Objetivo Específico</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Crear Objetivo</button>
            <a href="{{ url('specific_objective') }}" class="btn btn-danger text-white">Cancelar</a>
        </form>
    </div>
@endsection
