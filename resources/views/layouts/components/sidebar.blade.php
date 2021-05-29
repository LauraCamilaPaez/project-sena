<!-- leftbar-tab-menu -->
<div class="leftbar-tab-menu">
    <div class="main-icon-menu">
        <a href="http://metrica.laravel.themesbrand.com/analytics/analytics-index"
           class="logo logo-metrica d-block text-center">
                    <span>
                        <img src="{{ url('img/logo-sidebar.png') }}" alt="logo-small"
                             class="logo-sm">
                    </span>
        </a>
        <nav class="nav">
            <a href="#MetricaAnalytics" class="nav-link active" data-toggle="tooltip-custom" data-placement="right" title=""
               data-original-title="Revisión" data-trigger="hover" >
                <i data-feather="eye" class="align-self-center menu-icon icon-dual"></i>
            </a><!--end MetricaAnalytics-->

            <a href="#MetricaApps" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title=""
               data-original-title="Perfil" data-trigger="hover">
                <i data-feather="user" class="align-self-center menu-icon icon-dual"></i>
            </a><!--end MetricaApps-->

            <a href="#MetricaUikit" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title=""
               data-original-title="Incapacidades" data-trigger="hover">
                <i data-feather="folder" class="align-self-center menu-icon icon-dual"></i>
            </a><!--end MetricaUikit-->

            <a href="#MetricaPages" class="nav-link" data-toggle="tooltip-custom" data-placement="right" title=""
               data-original-title="Certificados" data-trigger="hover">
                <i data-feather="paperclip" class="align-self-center menu-icon icon-dual"></i>
            </a><!--end MetricaPages-->

            <a href="#MetricaAuthentication" class="nav-link" data-toggle="tooltip-custom" data-placement="right"
               title="" data-original-title="Noticias" data-trigger="hover">
                <i data-feather="globe" class="align-self-center menu-icon icon-dual"></i>
            </a> <!--end MetricaAuthentication-->

        </nav><!--end nav-->
        <div class="pro-metrica-end">
            <a href="https://github.com/LauraCamilaPaez/project-sena" target="_blank" class="help" data-toggle="tooltip-custom" data-placement="right" title=""
               data-original-title="GitHub">
                <i data-feather="github" class="align-self-center menu-icon icon-md icon-dual mb-4"></i>
            </a>
            <a href="" class="profile">
                <img src="{{ url('img/profile-picture.png') }}" alt="profile-user"
                     class="rounded-circle thumb-sm">
            </a>
        </div>
    </div><!--end main-icon-menu-->

    <div class="main-menu-inner">
        <!-- LOGO -->
        <div class="topbar-left">
            <a href="/analytics/analytics-index" class="logo">
                        <span>
                            <img src="{{ url('http://metrica.laravel.themesbrand.com/assets/images/logo-dark.png') }}"
                                 alt="logo-large" class="logo-lg logo-dark">
                            <img src="{{ url('img/logo.png') }}" alt="logo-large"
                                 class="logo-lg logo-light">
                        </span>
            </a>
        </div>
        <!--end logo-->
        <div class="menu-body slimscroll">
            <div id="MetricaAnalytics" class="main-icon-menu-pane active">
                <div class="title-box">
                    <h6 class="menu-title">Revisión</h6>
                </div>
                <ul class="nav ">
                    <li class="nav-item "><a class="nav-link" href="/analytics/analytics-index">Usuarios</a></li>
                    <li class="nav-item "><a class="nav-link" href="/analytics/analytics-index">Perfil</a></li>
                    <li class="nav-item "><a class="nav-link" href="/analytics/analytics-customers">Incapacidades</a></li>
                    <li class="nav-item "><a class="nav-link" href="/analytics/analytics-reports">Certificados</a></li>
                </ul>
            </div><!-- end Revisión -->

            <div id="MetricaApps" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Perfil</h6>
                </div>
                <ul class="nav metismenu">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript: void(0);"><span class="w-100">Name-User</span><span
                                class="menu-arrow"><i class="mdi mdi-chevron-right"></i></span></a>
                        <ul class="nav-second-level" aria-expanded="false">
                            <li><a href="/apps/email-inbox">Editar Foto</a></li>
                            <li><a href="/apps/email-read">Editar datos personales</a></li>
                            <li><a href="/apps/email-read">Editar contraseña</a></li>
                        </ul>
                    </li><!--end nav-item-->
                </ul>
            </div><!-- end Perfil -->

            <div id="MetricaUikit" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Incapacidades</h6>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="/pages/pages-profile">Crear</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/pages-tour">Ver</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/pages-timeline">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/pages-treeview">Eliminar</a></li>
                </ul>
            </div><!-- end Incapacidades -->

            <div id="MetricaPages" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Certificados</h6>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="/pages/pages-profile">Crear</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/pages-tour">Ver</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/pages-timeline">Editar</a></li>
                    <li class="nav-item"><a class="nav-link" href="/pages/pages-treeview">Eliminar</a></li>
                </ul>
            </div><!-- end Pages -->
            <div id="MetricaAuthentication" class="main-icon-menu-pane">
                <div class="title-box">
                    <h6 class="menu-title">Authentication</h6>
                </div>
                <ul class="nav">
                    <li class="nav-item"><a class="nav-link" href="/authentication/auth-login">SENALAB</a></li>
                    <li class="nav-item"><a class="nav-link" href="/authentication/auth-login-alt">SENA</a></li>
                    <li class="nav-item"><a class="nav-link" href="/authentication/auth-register">CEET</a></li>
                </ul>
            </div><!-- end News-->
        </div><!--end menu-body-->
    </div><!-- end main-menu-inner-->
</div>
<!-- end leftbar-tab-menu-->
