
@extends('layouts.app')
@section('content1')

    <h1>Actualizar Usuario</h1>
    <div class="container mt-3">
        <form action="{{ route('inability.update',$inability->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text" class="form-control" name="names" value="{{ $inability->names }}" id="names">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="lastnames" value="{{ $inability->lastnames }}" id="lastnames">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email" value="{{ $inability->email }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gender">Género</label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value="" selected>Seleccionar...</option>
                            @foreach($genders as $gender)
                                <option {{ $gender->id == $inability->gender ? 'selected' : '' }} value="{{ $gender->id }}">{{ $gender->gender }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="document_type">Tipo de Documento</label>
                        <select name="document_type" id="document_type" class="form-control" required>
                            <option value="" selected>Seleccionar...</option>
                            @foreach($document_types as $document_type)
                                <option {{ $inability->document_type==$document_type->id ? 'selected' : '' }} value="{{ $document_type->id }}">{{ $document_type->document_type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="document">Documento</label>
                        <input type="text" class="form-control" value="{{ $inability->document }}" name="document" id="document">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone">Teléfono Fijo</label>
                        <input type="text" class="form-control" value="{{ $inability->phone }}" name="phone" id="phone">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="mobile">Teléfono Móvil</label>
                        <input type="text" class="form-control" value="{{ $inability->mobile }}" name="mobile" id="mobile">
                    </div>
                </div>
            </div>
            <hr>
            <button class="btn btn-primary">Actualizar Usuario</button>
            <a href="{{ url('inability') }}" class="btn btn-danger">Cancelar</a>
        </form>
    </div>
@endsection
