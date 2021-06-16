@extends('layouts.app')
@section('content1')

    <h1>Nuevo Tipo de Documento</h1>
    <div class="container mt-3">
        <form action="{{ route('document_types.update', $document_type->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Tipo de Documento</label>
                        <input type="text" class="form-control" name="document_type" id="document_type" value="{{ $document_type->document_type }}">
                    </div>
                </div>
            </div>
            <button class="btn btn-primary">Actualizar Tipo de Documento</button>
            <a class="btn btn-danger" href="{{ url('document_types') }}">Cancelar</a>
        </form>
    </div>
@endsection
