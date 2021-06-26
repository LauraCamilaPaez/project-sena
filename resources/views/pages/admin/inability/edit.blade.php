@extends('layouts.app')
@section('content')

    <h1>Actualizar Incapacidad</h1>
    <div class="container mt-3">
        <form action="{{ route('inability.update',$inability->id) }}" method="post" enctype="multipart/form-data">
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
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone">Pdf</label>
                        <input type="text" class="form-control" name="pdf_inability" id="pdf_inability" value="{{ $inability->pdf}}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fecha Inicio</label>
                        <input type="date" class="form-control" name="date_start" id="date_start" value="{{ $inability->date_start }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fecha Fin</label>
                        <input type="date" class="form-control" name="date_end" id="date_end" value="{{ $inability->date_end }}">
                    </div>
                </div>
            </div>
            <hr>
            <button class="btn btn-primary">Actualizar Incapacidad</button>
            <a href="{{ url('inability') }}" class="btn btn-danger">Volver</a>
        </form>
    </div>
@endsection
