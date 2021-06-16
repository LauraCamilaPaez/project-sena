@extends('layouts.app')
@section('content1')

    <h1>Crear Objetivo General</h1>
    <div class="container mt-3">
        <form action="{{ url('general_objective') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Objetivo General</label>
                        <input type="text" class="form-control" name="description" id="description">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Crear Objetivo</button>
            <a href="{{ url('general_objective') }}" class="btn btn-danger text-white">Cancelar</a>
        </form>
    </div>
@endsection
