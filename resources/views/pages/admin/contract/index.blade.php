@extends('layouts.app')
@section('content')

    <h1>Contratos</h1>
    <p>Aquí podrás encontrar todos contratos que hay en el sistema</p>
    <a class="btn btn-primary btn-sm" href="{{ route('contracts.create') }}">Crear Nuevo</a>
    <div class="card-body">
        <div class="table-sm table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr class="bg-beanred text-white">
                    <th>#</th>
                    <th>Nombre</th>
                    <th>Fecha Inicio</th>
                    <th>Fecha Fin</th>
                    <th>Valor del Contrato</th>
                    <th>Pdf</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach($contracts as $contract)
                    <tr class="active">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $contract->users->names }}</td>
                        <td>{{ $contract->date_start }}</td>
                        <td>{{ $contract->date_end }}</td>
                        <td>{{ $contract->value}}</td>
                        <td><a target="_blank"
                               href="storage/{{ str_replace('public/','',$contract->pdf)}}">Descargar</a></td>
                        <td name="buttons">
                            <div class=" pull-right">
                                <a href="{{ route('contracts.edit', $contract->id) }}" id="bEdit" type="button"
                                   class="btn btn-sm btn-soft-success btn-circle mr-2"
                                   onclick="rowEdit(this);">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                         fill="currentColor" class="bi bi-pencil"
                                         viewBox="0 0 16 16">
                                        <path
                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                    </svg>
                                </a>
                                </a>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
