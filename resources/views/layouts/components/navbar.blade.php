<!-- Top Bar Start -->
<div class="topbar">
    <!-- Navbar -->
    <nav class="navbar-custom">
        <ul class="list-unstyled topbar-nav float-right mb-0">
            <li class="dropdown">
                <a class="nav-link dropdown-toggle waves-effect waves-light nav-user" data-toggle="dropdown" href="#"
                   role="button"
                   aria-haspopup="false" aria-expanded="false">
                    <img src="{{ auth()->user()->profile_picture }}" alt="profile-user"
                         class="rounded-circle"/>
                    <span class="ml-1 nav-user-name hidden-sm"> {{ @Auth::user()->names }} <i class="mdi mdi-chevron-down"></i> </span>
                </a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{ url('edit-profile') }}"><i class="dripicons-gear text-muted mr-2"></i> Perfil </a>
                    <a class="dropdown-item" href="{{ url('list-contract') }}"><i class="dripicons-gear text-muted mr-2"></i> Mis Certificados</a>
                    <a class="dropdown-item" href="{{ url('inability') }}"><i class="dripicons-gear text-muted mr-2"></i> Mis Incapacidades</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" onclick="document.getElementById('logout').submit()"><i class="dripicons-exit text-muted mr-2"></i> Cerrar Sesión</a>
                </div>
            </li>
        </ul><!--end topbar-nav-->
        <form action="{{ route('logout') }}" method="post" id="logout">
            @csrf
        </form>
        <ul class="list-unstyled topbar-nav mb-0">
            <li>
                <a href="/crm/crm-index">
                            <span class="responsive-logo">
                                <img src="http://metrica.laravel.themesbrand.com/assets/images/logo-sm.png"
                                     alt="logo-small" class="logo-sm align-self-center" height="34">
                            </span>
                </a>
            </li>
            <li>
                <button class="button-menu-mobile nav-link">
                    <i data-feather="menu" class="align-self-center"></i>
                </button>
            </li>
        </ul>
    </nav>
    <!-- end navbar-->
</div>
<!-- Top Bar End -->
