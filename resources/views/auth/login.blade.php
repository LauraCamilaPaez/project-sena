<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8"/>
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description"/>
    <meta content="" name="author"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>

    <!-- App favicon -->
    <link rel="shortcut icon" href="{{ url('img/logo-sidebar.png') }}">
    <link rel="stylesheet" href="{{ url('css/app.css') }}">
</head>
<body class="account-body accountbg">

<!-- content -->

<!-- Log In page -->
<div class="container">
    <div class="row vh-100 ">
        <div class="col-12 align-self-center">
            <div class="auth-page">
                <div class="card auth-card shadow-lg">
                    <div class="card-body">
                        <div class="px-3">
                            <div class="auth-logo-box">
                                <a href="/" class="logo logo-admin"><img src="{{ url('img/logo-sidebar.png') }}"
                                                                         height="55" alt="logo" class="auth-logo"></a>
                            </div>
                            <!--end auth-logo-box-->
                            <div class="text-center auth-logo-text">
                                <h4 class="mt-0 mb-3 mt-5">Vamos a SENALAB !</h4>
                                <p class="text-muted mb-0">Inicia sesión para empezar.</p>
                            </div>
                            <!--end auth-logo-text-->

                            <form  class="form-horizontal auth-form my-4" method="post" action="{{ route('login') }}">
                                @csrf
                                <div class="form-group">
                                    <label for="username">Correo Electrónico</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-user"></i>
                                        </span>
                                        <input id="email" type="email" placeholder="Escribe aquí el Correo" class="form-control "
                                               name="email" value="" required
                                               autocomplete="email" autofocus>


                                    </div>
                                </div>
                                <!--end form-group-->

                                <div class="form-group">
                                    <label for="userpassword">Contraseña</label>
                                    <div class="input-group mb-3">
                                        <span class="auth-form-icon">
                                            <i class="dripicons-lock"></i>
                                        </span>

                                        <input id="password" type="password" placeholder="Escribe aquí la contraseña"
                                               class="form-control " name="password" value="" required
                                               autocomplete="current-password">


                                    </div>
                                </div>
                                <!--end form-group-->


                                <div class="form-group mb-0 row">
                                    <div class="col-12 mt-2">
                                        <button
                                            class="btn btn-gradient-primary btn-round btn-block waves-effect waves-light"
                                            type="submit">Ingresar<i class="fas fa-sign-in-alt ml-1"></i></button>
                                    </div>
                                    <!--end col-->
                                </div>
                                <!--end form-group-->
                            </form>
                            <!--end form-->
                        </div>
                        <!--end /div-->

                        <div class="m-3 text-center text-muted">
                            <p class="">¿Aún no tienes una cuenta? <a
                                    href="{{ route('register') }}" class="text-primary ml-2">Registrate
                                gratis</a></p>
                        </div>
                    </div>
                    <!--end card-body-->
                </div>
            </div>
            <!--end auth-page-->
        </div>
        <!--end col-->
    </div>
    <!--end row-->
</div>
<!--end container-->
<!-- End Log In page -->

<!-- jQuery  -->
<script src="{{ url('js/app.js') }}"></script>
</body>

</html>
