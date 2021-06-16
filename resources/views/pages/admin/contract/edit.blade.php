@extends('layouts.app')
@section('content1')

    <h1>Editar Contrato</h1>
    <div class="container mt-3">
        <form action="{{ route('contracts.update', $contracts->id) }}" method="post">
            @csrf
            @method('PUT')
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Código</label>
                        <input type="text" class="form-control" name="code" id="code" value="{{ $contracts->code }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fecha Inicio</label>
                        <input type="date" class="form-control" name="date_start" id="date_start" value="{{ $contracts->date_start }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Fecha Fin</label>
                        <input type="date" class="form-control" name="date_end" id="date_end" value="{{ $contracts->date_end }}">
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="">Valor</label>
                        <input type="number" class="form-control" name="value" id="value" value="{{ $contracts->value }}">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label for="phone">Pdf</label>
                        <input type="text" class="form-control" name="pdf_contract" id="pdf_contract" value="{{ $contracts->pdf_contract }}">
                    </div>
                </div>
            </div>
            <hr>
            <button class="btn btn-primary">Actualizar Contrato</button>
            <a class="btn btn-danger" href="{{url('contracts')}}">Cancelar</a>
        </form>
    </div>
@endsection
