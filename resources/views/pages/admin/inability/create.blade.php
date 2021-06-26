@extends('layouts.app')
@section('content')

    <h1>Nueva Incapacidad</h1>
    <div class="container mt-3">
        <form action="{{ url('inability') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="col-md-12">
                <div class="form-group">
                    <label for="pdf">Pdf</label>
                    <input type="file" class="form-control" name="pdf" id="pdf">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Fecha Inicio</label>
                    <input type="date" class="form-control" name="date_start" id="date_start">
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    <label for="">Fecha Fin</label>
                    <input type="date" class="form-control" name="date_end" id="date_end">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Nombres</label>
                        <input type="text" class="form-control" name="names" id="names1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Apellidos</label>
                        <input type="text" class="form-control" name="lastnames" id="lastnames1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Correo electrónico</label>
                        <input type="email" class="form-control" name="email" id="email1">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="gender">Género</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="" selected>Seleccionar...</option>
                            @foreach($genders as $gender)
                                <option value="{{ $gender->id }}">{{ $gender->gender }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="document_type">Tipo de Documento</label>
                        <select name="document_type" id="document_type" class="form-control">
                            <option value="" selected>Seleccionar...</option>
                            @foreach($document_types as $document_type)
                                <option value="{{ $document_type->id }}">{{ $document_type->document_type }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="document">Documento</label>
                        <input type="number" class="form-control" name="document" id="document1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone">Teléfono Fijo</label>
                        <input type="number" class="form-control" name="phone" id="phone1">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="mobile">Teléfono Móvil</label>
                        <input type="number" class="form-control" name="mobile" id="mobile1">
                    </div>
                </div>
            </div>
            <hr>
            <button class="btn btn-primary">Crear Incapacidad</button>
            <a class="btn btn-danger" href="{{url('inability')}}">Cancelar</a>
        </form>
    </div>
@endsection
