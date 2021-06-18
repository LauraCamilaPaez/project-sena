@extends('layouts.app')
@section('content1')

    <h1>Nuevo Contrato</h1>
    <div class="container mt-3">
        <form action="{{ url('contracts') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">User</label>
                        <select name="user_id" id="user_id" class="form-control">
                            @foreach($users as $user)
                            <option value="{{ $user->id }}">{{ $user->names }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fecha Inicio</label>
                        <input type="date" class="form-control" name="date_start" id="date_start">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fecha Fin</label>
                        <input type="date" class="form-control" name="date_end" id="date_end">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Valor del contrato</label>
                        <input type="number" class="form-control" name="value" id="value">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone">Pdf</label>
                        <input type="text" class="form-control" name="pdf" id="pdf">
                    </div>
                </div>
            </div>
            <hr>
            <button class="btn btn-primary">Crear Contrato</button>
            <a class="btn btn-danger" href="{{url('contracts')}}">Cancelar</a>
        </form>
    </div>
@endsection
