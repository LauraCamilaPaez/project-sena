@extends('layouts.app')
@section('content')


    <h1>Estado del Certificado</h1>
    <p>Aquí podrsás encontrar todos tus certificados y sus estados (Activo o Inactivo).</p>
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
                        <td><a href="{{ $status_certificate->contracts->pdf}}" target="_blank">Descargar </a></td>
                        <td>{{ $status_certificate->status}}</td>
                        <td>{{ $status_certificate->created_at}}</td>
                        @role('Administrador')
                        <td>
                            <button data-target="#qk-{{ $loop->iteration }}" data-toggle="modal"
                                    class="btn btn-sm btn-gradient-info">Responder
                            </button>
                        </td>

                        @endrole

                        <form action="{{ route('status_certificate.update',$status_certificate->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            @method('PUT')
                            <div class="modal fade" id="qk-{{ $loop->iteration }}" tabindex="-1" role="dialog"
                                 aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Contrato
                                                de {{ auth()->user()->names }}</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <span class="badge badge-success">Nombres</span>
                                            <h2>{{ $status_certificate->users->names }}</h2>
                                            <span class="badge badge-success">Valor contrato</span>
                                            <h2>{{ $status_certificate->contracts->value }}</h2>
                                            <span class="badge badge-success">Estado</span>
                                            <h2>{{ $status_certificate->status }}</h2>
                                            <span class="badge badge-success">Fecha</span>
                                            <h2>{{ $status_certificate->created_at }}</h2>
                                            <span for="pdf" class="badge badge-success">Cargar</span>
                                            <input type="file" class="form-control" name="pdf" id="pdf">
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar
                                            </button>
                                            <button type="submit" class="btn btn-primary">Guardar cambios</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

@endsection
