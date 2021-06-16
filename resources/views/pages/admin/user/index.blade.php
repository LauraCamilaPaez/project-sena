@extends('layouts.app')
@section('content1')
    <div class="row">
        <div class="col-sm-12">
            <div class="page-title-box">
                <div class="float-right">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="javascript:void(0);">Perfil</a></li>
                        <li class="breadcrumb-item "><a href="javascript:void(0);">Incapacidades</a></li>
                        <li class="breadcrumb-item active">Certificados</li>
                    </ol>
                </div>
                <h1>Usuarios</h1>
                <p>Buenvenido, aquí podrá gestionar todos los Usuarios registrados en SENALAB</p>
                 @role('Administrador')
                <a class="btn btn-primary btn-sm" href="{{ route('users.create') }}">Crear Usuario</a>
                  @endrole
                <section>
                    <div class="card-body">
                        <form action="" method="GET">
                            <div class="row">
                                <div class="col-md-3">
                                    <input type="search" name="q" class="form-control" value="{{ @$_GET['q'] }}" placeholder="Buscar...">
                                    <br>
                                </div>
                                <div class="col-md-3">
                                    <button class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                                        </svg></button>
                                    @if(@$_GET['q'])
                                        <a href="{{ route('users.index') }}">Eliminar filtro</a>
                                    @endif
                                </div>
                            </div>
                        </form>

                        <div class="table-responsive">
                            <table class="table  table-bordered table-striped table-hover" id="makeEditable">
                                <thead>
                                <tr class="bg-beanred text-white">
                                    <th>#</th>
                                    <th>Nombres</th>
                                    <th>Apellidos</th>
                                    <th>Correo Electrónico</th>
                                    <th>Telefono</th>
                                    @role('Administrador')
                                    <th name="buttons">Acciones</th>
                                    @endrole
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($users as $user)
                                    <tr class="active">
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->names }}</td>
                                        <td>{{ $user->lastnames }}</td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->mobile }}</td>
                                        @role('Administrador')
                                        <td name="buttons">
                                            <div class=" pull-right">
                                                <a href="{{ route('users.edit',$user->id) }}" id="bEdit" type="button"
                                                        class="btn btn-sm btn-soft-success btn-circle mr-2"
                                                        onclick="rowEdit(this);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-pencil"
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                    </svg>
                                                </a>

                                                <form action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: inline">
                                                    @csrf
                                                    @method('DELETE')
                                                <button id="bElim" type="submit"
                                                        class="btn btn-sm btn-soft-danger btn-circle"
                                                        onclick="rowElim(this);">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                         fill="currentColor" class="bi bi-trash"
                                                         viewBox="0 0 16 16">
                                                        <path
                                                            d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                                        <path fill-rule="evenodd"
                                                              d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                                                    </svg>
                                                </button>
                                                </form>

                                                <button id="bAcep" type="button"
                                                        class="btn btn-sm btn-soft-purple mr-2 btn-circle"
                                                        style="display:none;" onclick="rowAcep(this);"><i
                                                        class="dripicons-checkmark"></i></button>
                                                <button id="bCanc" type="button"
                                                        class="btn btn-sm btn-soft-info btn-circle"
                                                        style="display:none;" onclick="rowCancel(this);"><i
                                                        class="dripicons-cross" aria-hidden="true"></i></button>
                                            </div>
                                        </td>
                                        @endrole
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                        {{ $users->links() }}

                    </div>
                </section>


            </div><!--end page-title-box-->

        </div><!--end col-->
    </div>
@endsection
