@extends('layouts.app')
@section('content1')

    <h1>Editar Género</h1>
    <div class="container mt-3">
        <form action="{{ route('genders.update', $gender->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Género</label>
                        <input type="text" class="form-control" name="gender" id="gender" value="{{ $gender->gender }}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Actualizar Género</button>
            <a href="{{ url('genders') }}" class="btn btn-danger text-white">Cancelar</a>
        </form>
    </div>
@endsection
