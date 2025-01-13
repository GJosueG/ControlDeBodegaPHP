<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>@yield('title', 'Control De Bodega')</title>
    <link rel="stylesheet" href="{{ asset('css/site.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">

</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-primary">
        <!-- Navbar Brand -->
        <h1><a class="navbar-brand ps-3 text-white" href="">Control De Bodega</a></h1>
        <!-- Sidebar Toggle -->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0 text-white" id="sidebarToggle" href="#!">
            <i class="fas fa-bars"></i>
        </button>
        <ul class="navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-user fa-fw"></i>
                </a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    @if (auth()->user() && auth()->user()->hasRole('Administrador'))
                        <li><a class="dropdown-item" href="">Administrar usuarios</a></li>
                    @endif
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="">Configurar perfil</a></li>
                    <li><hr class="dropdown-divider" /></li>
                    <li><a class="dropdown-item" href="">Cerrar Sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion" style="background-color: #2c3e50;">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading text-light">Resumen</div>
                        <a class="nav-link text-light" href="">
                            <div class="sb-nav-link-icon text-light"><i class="fas fa-users"></i></div>
                            Empleados
                        </a>

                        <!-- Mantenimiento -->
                        <div class="sb-sidenav-menu-heading text-light">Mantenimiento</div>

                        <!-- Control de Herramientas -->
                        <a class="nav-link collapsed text-light" href="#" data-bs-toggle="collapse" data-bs-target="#collapseHerramientas" aria-expanded="false" aria-controls="collapseHerramientas">
                            <div class="sb-nav-link-icon text-light"><i class="fas fa-hammer"></i></div>
                            Control de Herramientas
                            <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                        </a>
                        <div class="collapse" id="collapseHerramientas" aria-labelledby="headingHerramientas" data-bs-parent="#sidenavAccordion">
                            <nav class="sb-sidenav-menu-nested nav">
                                <a class="nav-link text-light" href="">Herramientas</a>
                                <a class="nav-link text-light" href="">Ingreso de Herramientas</a>
                                <a class="nav-link text-light" href="">Salida de Herramientas</a>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="sb-sidenav-footer" style="background-color: #1f2d3d;">
                    <div class="small text-light">Sesión activa como:</div>
                    <span class="text-light"></span>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <main role="main" class="pb-3">
                        @yield('content')
                    </main>
                </div>
            </main>
            <footer class="py-4 bg-dark text-white mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-light">Control De Bodega</div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('js/scripts.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script src="{{ asset('js/bootstrap.js') }}"></script>
</body>
</html>
