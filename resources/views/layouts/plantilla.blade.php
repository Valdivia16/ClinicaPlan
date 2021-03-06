<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
     @yield("titulo")
    <link rel="icon" type="image/png" href="/diseno/images/imagen.png">
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="/assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <!-- =======================================================
    * Template Name: iPortfolio - v3.3.0
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    ======================================================== -->
</head>
<body>
<!-- ======= Mobile nav toggle button ======= -->
<i class="bi bi-list mobile-nav-toggle d-xl-none"></i>
<!-- ======= Header ======= -->
<header id="header">
    <div class="d-flex flex-column">
        <div class="profile">
            <img src="diseno/images/doctora.jpg" alt="" class="img-fluid rounded-circle">
            <p class="text-light" style="text-align:center">{{Auth::user()->email}}</p>
        </div>
        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="{{route('home')}}" class="nav-link scrollto active"><i class="bx bx-home"></i> <span>Inicio</span></a></li>
                <li><a href="{{route('registroPaciente')}}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Registro de Pacientes</span></a></li>
                <li><a href="{{route('listaPaciente')}}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Lista de Pacientes</span></a></li>
                <li><a href="#portfolio" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>C??digo de referencia de <br>enfermedades</span></a></li>
                <li><a href="#services" class="nav-link scrollto"><i class="bx bx-archive"></i> <span>Invenatrio de m??dicamentos</span></a></li>
                <li><a class="dropdown-item" href="{{ route('logout') }}"
                         onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="bx bx-chevron-left"></i>
                        {{ __('Cerrar Sesi??n') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </nav><!-- .nav-menu -->
    </div>
</header><!-- End Header -->
<main id="main">
    <!-- ======= Breadcrumbs ======= -->
    <section class="breadcrumbs">
        <div class="container">
            <div class="d-flex justify-content-between align-items-center">
                @yield("tituloenca")
                <!-- ======= Breadcrumbs =======
                <ol>
                    <li><a href="{{route('login.index')}}" class="smoothScroll">Iniciar Sesi??n</a></li>
                    <li><a href="{{route('registro.crear')}}" class="smoothScroll">Registro</a></li>
                </ol>
                -->
            </div>
        </div>
    </section><!-- End Breadcrumbs -->
    <section class="inner-page">
        <div class="container">
            @yield('contenido')
        </div>
    </section>
</main><!-- End #main -->
<!-- ======= Footer ======= -->
<a href="#" class="back-to-top d-flex align-items-center justify-content-center">
    <i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/vendor/purecounter/purecounter.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/typed.js/typed.min.js"></script>
<script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>
</body>
</html>
