@extends('layouts.app')
@section('content')


    <h1>Contratos</h1>
    <p>Aquí podrás encontrar todos los contratos almacenados en el sistema.</p>
    @role('Administrador')
    <a href="" class="btn btn-primary btn-sm" href="">Crear Nuevo</a>
    @endrole
    <div class="card-body">
        <div class="table-sm table-responsive">
            <table class="table table-bordered table-striped table-hover">
                <thead>
                <tr class="bg-beanred text-white">
                    <th>#</th>
                    <th>Usuario</th>
                    <th>Contrato</th>
                    <th>Estado</th>
                    <th>Fecha creación</th>
                    @role('Administrador')
                    <th>Acciones</th>
                    @endrole
                </tr>
                </thead>
                <tbody>
                @foreach($status_certificates as $status_certificate)
                    <tr class="active">
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $status_certificate->users->names }}</td>
                        <td>{{ $status_certificate->contract_id}}</td>
                        <td>{{ $status_certificate->status}}</td>
                        <td>{{ $status_certificate->created_at}}</td>
                        @role('Administrador')
                        <td>
                            <button>Responder</button>
                        </td>
                        @endrole
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
