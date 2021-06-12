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
                <div class="col-md-12">
                        <br>
                    <div class="card">
                        <div class="card-body">
                            @if(session('status'))
                                <br>
                                <div class="alert alert-outline-success alert-warning-shadow mb-0 alert-dismissible fade show" role="alert">
                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                        <span aria-hidden="true"><i class="mdi mdi-close"></i></span>
                                    </button>
                                    <strong>Bien hecho!</strong> {{ session('status') }}
                                </div>
                            @endif

                            @yield('content')
                        </div>
                    </div>
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
