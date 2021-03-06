@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">

                <h1>Mis contratos</h1>
                <p>Bienvenido aquí podrá encontrar todos sus contratos activos e inactivos</p>
                <section>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table  table-bordered table-striped table-hover" id="makeEditable">
                                <thead>
                                <tr class="bg-beanred text-white">
                                    <th>#</th>
                                    <th>Nombres</th>
                                    <th>Fecha Inicio</th>
                                    <th>Fecha Fin</th>
                                    <th>Valor del contrato</th>
                                    <th>Contrato</th>
                                    <th>Certificado</th>
                                    @role('Administrador')
                                    <th name="buttons">Acciones</th>
                                    @endrole
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($contracts as $contract)
                                    <tr class="active">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $contract->users->names }}</td>
                                        <td>{{ $contract->date_start }}</td>
                                        <td>{{ $contract->date_end }}</td>
                                        <td>{{ $contract->value }}</td>
                                        <td><a  target="_blank" href="storage/{{ str_replace('public/','',$contract->pdf)}}">Descargar</a></td>
                                        <td>
                                            @php
                                                @$status_certificate = \App\Models\StatusCertificate::where('user_id',$contract->users->id)->where('contract_id',$contract->id)->first()
                                            @endphp

                                            @if(@$status_certificate->status == "Solicitado")
                                                <span class="badge badge-info">Solicitado</span>
                                            @elseif(@$status_certificate->status == "Entregado")
                                                @php($status_certificate = \App\Models\StatusCertificate::where('contract_id',$contract->id)->first())
                                                <a target="_blank"
                                                   href="storage/{{ str_replace('public/','',$status_certificate->certificate)}}">Descargar</a>

                                            @elseif(@$status_certificate->status == "Error")
                                                <span class="badge badge-danger">Paila bro</span>
                                            @else
                                                <form action="{{ route('status_certificate.store') }}" method="post">
                                                    @csrf
                                                    <input type="hidden" name="user_id"
                                                           value="{{ $contract->users->id }}">
                                                    <input type="hidden" name="contract_id" value="{{ $contract->id }}">
                                                    <button class="btn btn-sm btn-outline-gray" type="submit">
                                                        Solicitar
                                                    </button>
                                                </form>
                                            @endif


                                        </td>
                                        @role('Administrador')
                                        <td name="buttons">
                                            <div class=" pull-right">
                                                <a href="" id="bEdit" type="button"
                                                   class="btn btn-sm btn-soft-success btn-circle mr-2"
                                                   onclick="rowEdit(this);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-pencil"
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </td>
                                        @endrole
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                </section>


            </div><!--end page-title-box-->

        </div><!--end col-->
    </div>
@endsection
