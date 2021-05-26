<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>SENALAB - SENA Certified</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <link rel="shortcut icon" href="{{ url('img/logo-sidebar.png') }}" type="image/x-icon">

    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>

<body>

@include('layouts.components.sidebar')
<!-- Top Bar Start -->

@include('layouts.components.navbar')
<!-- Top Bar End -->

<div class="page-wrapper">

    <!-- Page Content-->
    <div class="page-content-tab">

        <!-- content -->
        <div class="container-fluid">
            <!-- Page-Title -->
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
                        <h4 class="page-title">Certificados</h4>
                        <p>Aquí podrás encontrar el listado de todos los certificados que tienen los Instructores
                            SENA.</p>

                        <section>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table  table-bordered" id="makeEditable">
                                        <thead>
                                        <tr>
                                            <th>Nombres</th>
                                            <th>Apellidos</th>
                                            <th>Correo Electrónico</th>
                                            <th name="buttons">Acciones</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Nestor Andrés</td>
                                            <td>Rodríguez García</td>
                                            <td>nestor@gmail.com</td>
                                            <td name="buttons">
                                                <div class=" pull-right">
                                                    <button id="bEdit" type="button"
                                                            class="btn btn-sm btn-soft-success btn-circle mr-2"
                                                            onclick="rowEdit(this);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-pencil"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                        </svg>
                                                        </i></button>
                                                    <button id="bElim" type="button"
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
                                        </tr>
                                        <tr class="success">
                                            <td>Diego Armando</td>
                                            <td>Rojas Marín</td>
                                            <td>diego@gmail.com</td>
                                            <td name="buttons">
                                                <div class=" pull-right">
                                                    <button id="bEdit" type="button"
                                                            class="btn btn-sm btn-soft-success btn-circle mr-2"
                                                            onclick="rowEdit(this);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-pencil"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                        </svg>
                                                    </button>
                                                    <button id="bElim" type="button"
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
                                        <tr class="danger">
                                            <td>Michael David</td>
                                            <td>Amado Rodríguez</td>
                                            <td>michael@gmail.com</td>
                                            <td name="buttons">
                                                <div class=" pull-right">
                                                    <button id="bEdit" type="button"
                                                            class="btn btn-sm btn-soft-success btn-circle mr-2"
                                                            onclick="rowEdit(this);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-pencil"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                        </svg>
                                                    </button>
                                                    <button id="bElim" type="button"
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
                                        </tr>
                                        <tr class="info">
                                            <td>Jorge Eliecer</td>
                                            <td>Morales Henao</td>
                                            <td>jorge@gmail.com</td>
                                            <td name="buttons">
                                                <div class=" pull-right">
                                                    <button id="bEdit" type="button"
                                                            class="btn btn-sm btn-soft-success btn-circle mr-2"
                                                            onclick="rowEdit(this);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-pencil"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                        </svg>
                                                    </button>
                                                    <button id="bElim" type="button"
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
                                        </tr>
                                        <tr class="warning">
                                            <td>Juan Pablo</td>
                                            <td>Cadena Quintero</td>
                                            <td>juan@gmail.com</td>
                                            <td name="buttons">
                                                <div class=" pull-right">
                                                    <button id="bEdit" type="button"
                                                            class="btn btn-sm btn-soft-success btn-circle mr-2"
                                                            onclick="rowEdit(this);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-pencil"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                        </svg>
                                                    </button>
                                                    <button id="bElim" type="button"
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
                                        </tr>
                                        <tr class="active">
                                            <td>Laura Camila</td>
                                            <td>Paez Barbosa</td>
                                            <td>Laura@gmail.com</td>
                                            <td name="buttons">
                                                <div class=" pull-right">
                                                    <button id="bEdit" type="button"
                                                            class="btn btn-sm btn-soft-success btn-circle mr-2"
                                                            onclick="rowEdit(this);">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                             fill="currentColor" class="bi bi-pencil"
                                                             viewBox="0 0 16 16">
                                                            <path
                                                                d="M12.146.146a.5.5 0 0 1 .708 0l3 3a.5.5 0 0 1 0 .708l-10 10a.5.5 0 0 1-.168.11l-5 2a.5.5 0 0 1-.65-.65l2-5a.5.5 0 0 1 .11-.168l10-10zM11.207 2.5 13.5 4.793 14.793 3.5 12.5 1.207 11.207 2.5zm1.586 3L10.5 3.207 4 9.707V10h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.293l6.5-6.5zm-9.761 5.175-.106.106-1.528 3.821 3.821-1.528.106-.106A.5.5 0 0 1 5 12.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.468-.325z"/>
                                                        </svg>
                                                        </button>
                                                    <button id="bElim" type="button"
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
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                                <span class="float-right">
                                        <button id="but_add" class="btn btn-danger">Eliminar todo</button>
                                    </span><!--end table-->
                            </div>
                        </section>


                    </div><!--end page-title-box-->

                </div><!--end col-->
            </div>
            <div class="row">
                <div class="col-md-12">
                    @yield('content')
                </div>
            </div>
        </div>

        <!-- Footer -->
        @include('layouts.components.footer')
    </div>
    <!-- end page content -->
</div>
<!-- end page-wrapper -->

<!-- jQuery  -->
<script src="{{ url('js/app.js') }} "></script>
</body>
</html>
