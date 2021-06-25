<!-- leftbar-tab-menu -->
<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a href="/" class="logo logo-metrica d-block text-center">
            <span>
                <img src="{{ url('img/logo-sidebar.png') }}" alt="logo-small" class="logo-sm">
            </span>
        </a>
        <nav class="nav">
            <a href="#MetricaAnalytics" class="nav-link active" data-toggle="tooltip-custom" data-placement="right"
                title="" data-original-title="Revisión" data-trigger="hover">
                <i data-feather="eye" class="align-self-center menu-icon icon-dual"></i>
            </a>
            <!--end MetricaAnalytics-->

            <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title=""
                data-original-title="Perfil" data-trigger="hover">
                <i data-feather="user" class="align-self-center menu-icon icon-dual"></i>
            </a>
            <!--end MetricaApps-->

            @role('Administrador|Supervisor|Secretario')
            <a href="#MetricaUikit" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title=""
                data-original-title="Incapacidades" data-trigger="hover">
                <i data-feather="folder" class="align-self-center menu-icon icon-dual"></i>
            </a>
            <!--end MetricaUikit-->
            @endrole

            <a href="#MetricaPages" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title=""
                data-original-title="Certificados" data-trigger="hover">
                <i data-feather="paperclip" class="align-self-center menu-icon icon-dual"></i>
            </a>
            <!--end MetricaPages-->

            <a href="#MetricaAuthentication" class="nav-link" data-toggle="tooltip-custom" data-placement="right"
                title="" data-original-title="Noticias" data-trigger="hover">
                <i data-feather="globe" class="align-self-center menu-icon icon-dual"></i>
            </a>
            <!--end MetricaAuthentication-->

        </nav>
        <!--end nav-->
        <div class="pro-metrica-end">
            <a href="https://github.com/LauraCamilaPaez/project-sena" target="_blank" class="help"
                data-toggle="tooltip-custom" data-placement="right" title="" data-original-title="GitHub">
                <i data-feather="github" class="align-self-center menu-icon icon-md icon-dual mb-4"></i>
            </a>
            {{-- Foto de perfil del sidebar parte inferior --}}
            <a href="" class="profile">
                <img src="{{ url('img/profile-picture.png') }}" alt="profile-user" class="rounded-circle thumb-sm">
            </a>
        </div>
    </div>
    <!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="/analytics/analytics-index" class="logo">
                <span>
                    <img src="{{ url('http://metrica.laravel.themesbrand.com/assets/images/logo-dark.png') }}"
                        alt="logo-large" class="logo-lg logo-dark">
                    <img src="{{ url('img/logo.png') }}" alt="logo-large" class="logo-lg logo-light">
                </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-body slimscroll">
            <div id="MetricaAnalytics" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Revisión</h6>
                </div>
                <ul class="nav">

                    @role('Administrador|Supervisor|Secretario')
                    <li class="nav-item"><a class="nav-link" href="{{ url('users') }}">Usuarios</a></li>
                    @endrole

                    <li class="nav-item "><a class="nav-link" href="{{ url('training_center') }}">Centros de
                            Formación</a></li>
                    <li class="nav-item "><a class="nav-link" href="{{ url('campus') }}">Instalación</a></li>
                    {{--  <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contáctenos</a></li>  --}}
                    {{--  <li class="nav-item "><a class="nav-link" href="{{ url('incapacidad') }}">Enviar Incapacidad</a>  --}}
                    </li>

                    @role('Administrador|Supervisor')
                    <li class="nav-item "><a class="nav-link" href="{{ url('genders') }}">Géneros</a></li>
                    <li class="nav-item "><a class="nav-link" href="{{ url('document_types') }}">Tipos de
                            Documento</a></li>
                    @endrole
                </ul>
            </div><!-- end Revisión -->

            <div id="MetricaApps" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Perfil</h6>
                </div>
                <ul class="nav metismenu">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript: void(0);"><span class="w-100">{{ auth()->user()->names }}</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ url('edit-profile') }}">Perfil</a></li>
                        </ul>
                        {{-- <li class="nav-item "><a class="nav-link" href="{{ url('inability') }}">Incapacidades</a></li> --}}
                    </li>
                    <!--end nav-item-->
                </ul>
            </div><!-- end Perfil -->

            <div id="MetricaUikit" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Incapacidades</h6>
                </div>
                <ul class="nav">
                    {{-- <li class="nav-item"><a class="nav-link" href="/pages/pages-tour">Ver</a></li> --}}
                    @role('Administrador')
                    <li class="nav-item "><a class="nav-link" href="{{ url('inability') }}">Incapacidades</a></li>
                    <li class="nav-item "><a class="nav-link" href="{{ url('incapacidad') }}">Enviar Incapacidad</a>
                    </li>
                    {{-- <li class="nav-item"><a class="nav-link" href="/pages/pages-profile">Crear</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/pages-timeline">Editar</a></li> --}}
                    @role('Supervisor|Secretario')
                    {{-- <li class="nav-item"><a class="nav-link" href="/pages/pages-treeview">Eliminar</a></li> --}}
                    {{-- <li class="nav-item "><a class="nav-link" href="{{ url('inability') }}">Incapacidades</a></li> --}}
                    {{--  <li class="nav-item "><a class="nav-link" href="{{ url('incapacidad') }}">Enviar Incapacidad</a>  --}}
                    </li>
                    @endrole
                    @endrole


                </ul>
            </div><!-- end Incapacidades -->

            <div id="MetricaPages" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Certificados</h6>
                </div>
                <ul class="nav">
                    <li class="nav-item "><a class="nav-link" href="{{ url('status_certificate') }}">Estado del Certificado</a></li>
                    <li class="nav-item "><a class="nav-link" href="{{ url('list-contract') }}">Mis Contratos</a></li>
                    <li class="nav-item "><a class="nav-link" href="{{ url('contracts') }}">Contratos</a></li>


                </ul>
            </div><!-- end Pages -->
            <div id="MetricaAuthentication" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Noticias y Contacto</h6>
                </div>
                <ul class="nav metismenu">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript: void(0);"><span class="w-100">Revisión</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="{{ url('news') }}">Noticias</a></li>
                        </ul>
                    </li>
                    <!--end nav-item-->
                </ul>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="{{ route('contact') }}">Contáctenos</a></li>
                </ul>
            </div><!-- end News-->
        </div>
        <!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
<!-- end leftbar-tab-menu-->
