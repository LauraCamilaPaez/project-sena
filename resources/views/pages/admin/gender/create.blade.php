@extends('layouts.app')
@section('content')

    <h1>Nuevo Género</h1>
    <p>Crea un nuevo género en el sistema.</p>
    <div class="container mt-3">
        <form action="{{ url('genders') }}" method="post">
            @csrf
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Género</label>
                        <input type="text" class="form-control" name="gender" id="gender" required>
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Crear Género</button>
            <a class="btn btn-danger" href="{{url('genders')}}">Cancelar</a>
        </form>
    </div>
@endsection
