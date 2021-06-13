<?php

use App\Models\Gender;
use App\Models\DocumentType;

?>
    <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title>Registro | Senalab</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body class="account-body accountbg">


<div class="container">
    @if ($errors->any())
        <div class="alert alert-warning">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <div class="row vh-100 ">
        <div class="col-12 align-self-center">
            <div class="auth-page">
                <div class="card auth-card shadow-lg">
                    <div class="card-body">
                        <div class="px-3">
                            <div class="auth-logo-box">
                                <a href="/analytics/analytics-index" class="logo logo-admin"><img
                                        src="{{ url('img/logo-sidebar.png') }}"
                                        height="55" alt="logo" class="auth-logo"></a>
                            </div><!--end auth-logo-box-->

                            <div class="text-center auth-logo-text">
                                <h4 class="mt-0 mb-3 mt-5">Registrate ahora en Senalab</h4>
                                <p class="text-muted mb-0">Obten tu cuenta de senalab gratuitamente.</p>
                            </div> <!--end auth-logo-text-->
                            <form class="form-horizontal auth-form my-4" action="{{ route('register') }}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="names">Nombres</label>
                                    <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i>
                                                </span>
                                        <input type="text" class="form-control" name="names" id="names"
                                               placeholder="Ingresa tu nombre" value="{{ old('names') }}">
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label for="lastnames">Apellidos</label>
                                    <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-user"></i>
                                                </span>
                                        <input type="text" class="form-control" name="lastnames" id="lastnames"
                                               placeholder="Ingresa tus apellidos" value="{{ old('lastnames') }}">
                                    </div>
                                </div><!--end form-group-->


                                <div class="form-group">
                                    <label for="gender">Género</label>
                                    <select name="gender" id="gender" class="form-control">
                                        <option value="" selected>Seleccionar...</option>
                                        @foreach(Gender::all() as $gender)
                                            <option value="{{ $gender->id }}">{{ $gender->gender }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="document_type">Tipo de Documento</label>
                                    <select name="document_type" id="document_type" class="form-control">
                                        <option value="" selected>Seleccionar...</option>
                                        @foreach(DocumentType::all() as $document_type)
                                            <option
                                                value="{{ $document_type->id }}">{{ $document_type->document_type }}</option>
                                        @endforeach
                                    </select>
                                </div>

                                <div class="form-group">
                                    <label for="document">Número de documento</label>
                                    <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-mail"></i>
                                                </span>
                                        <input type="text" class="form-control" value="{{ old('document') }}" name="document" id="document"
                                               placeholder="Ingresa tu número de documento">
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label for="email">Correo Electrónico</label>
                                    <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-mail"></i>
                                                </span>
                                        <input type="email" class="form-control" value="{{ old('email') }}" name="email" id="email"
                                               placeholder="Ingresa tu correo electrónico">
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group">
                                    <label for="password">Contraseña</label>
                                    <div class="input-group mb-3">
                                                <span class="auth-form-icon">
                                                    <i class="dripicons-lock"></i>
                                                </span>
                                        <input type="password" class="form-control"  name="password" id="password"
                                               placeholder="Ingresa tu contraseña">
                                    </div>
                                </div><!--end form-group-->

                                <div class="form-group">


                                    <div class="form-group">
                                        <label for="mobile">Número de celular</label>
                                        <div class="input-group mb-3">
                                                    <span class="auth-form-icon">
                                                        <i class="dripicons-phone"></i>
                                                    </span>
                                            <input type="text" class="form-control"  value="{{ old('mobile') }}" name="mobile" id="mobile"
                                                   placeholder="Ingresa tu número de celular">
                                        </div>
                                    </div><!--end form-group-->

                                    <div class="form-group">
                                        <label for="phone">Número de télefono</label>
                                        <div class="input-group mb-3">
                                                    <span class="auth-form-icon">
                                                        <i class="dripicons-phone"></i>
                                                    </span>
                                            <input type="text" class="form-control" name="phone" id="phone"
                                                   placeholder="Ingresa tu número de télefono"  value="{{ old('phone') }}">
                                        </div>
                                    </div><!--end form-group-->
                                </div><!--end form-group-->

                                <div class="form-group row mt-4">
                                    <div class="col-sm-12">
                                        <div class="custom-control custom-switch switch-success">
                                            <input type="checkbox" class="custom-control-input"
                                                   id="customSwitchSuccess">
                                            <label class="custom-control-label text-muted" for="customSwitchSuccess">Para
                                                registrarte acepta
                                                los términos y condiciones de Senalab<a href="#" class="text-primary">
                                                    Términos</a></label>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end form-group-->

                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button
                                            class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light"
                                            type="submit">Registrate <i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div><!--end col-->
                                </div> <!--end form-group-->
                            </form><!--end form-->
                        </div><!--end /div-->

                        <div class="m-3 text-center text-muted">
                            <p class="">¿Ya tienes cuenta de Senalab?<a href="{{ route('login') }}"
                                                                        class="text-primary ml-2">Ingresa aquí</a></p>
                        </div>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end auth-card-->
        </div><!--end col-->
    </div><!--end row-->
</div>

<!-- jQuery  -->
<script src="{{ url('js/app.js') }}"></script>
</body>

</html>
