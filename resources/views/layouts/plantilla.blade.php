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
    <link href="/assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="/assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="/assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Template Main CSS File -->
    <link href="/assets/css/style.css" rel="stylesheet">

    <link href="/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
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

        <div class="profile" data-toggle="modal" data-target="#modalPerfil">
            <a href="#" >
            <img type="button"  src="foto/{{Auth::user()->foto}}" alt="jol.jpg" class="img-fluid rounded-circle">
                <p class="text-light" style="text-align:center">{{Auth::user()->email}}</p>
            </a>

        </div>

        <nav id="navbar" class="nav-menu navbar">
            <ul>
                <li><a href="{{route('home')}}" class="nav-link scrollto "><i class="bx bx-home"></i> <span>Inicio</span></a></li>
                <li><a href="{{route('registro.crear')}}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Registro Usuarios</span></a></li>
                <li><a href="{{route('registroPaciente')}}" class="nav-link scrollto"><i class="bx bx-user"></i> <span>Registro de Pacientes</span></a></li>
                <li><a href="{{route('formularioDos')}}" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Registro de patología</span></a></li>
                <li><a href="" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Registro de Atención Médica</span></a></li>
                <li><a href="" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Historial del Paciente</span></a></li>
                <li><a href="{{route('referenciaEnfermedad')}}" class="nav-link scrollto"><i class="bx bx-book-content"></i> <span>Código de referencia de <br>enfermedades</span></a></li>
                <li><a href="{{route('inventario')}}" class="nav-link scrollto"><i class="bx bx-archive"></i> <span>Invenatrio de médicamentos</span></a></li>
                <li><a href="" class="nav-link scrollto"><i class="bx bx-file-blank"></i> <span>Informes</span></a></li>
                <li><a class="nav-link scrollto" href="{{ route('logout') }}"
                         onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="bx bx-chevron-left"></i>
                        {{ __('Cerrar Sesión') }}
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
                    <li><a href="{{route('login.index')}}" class="smoothScroll">Iniciar Sesión</a></li>
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

    <!-- Modal -->

</main><!-- End #main -->

<!-- ======= Footer ======= -->


<div class="modal fade" id="modalEditarPerfil" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #2a2a35">
                <h5 class="modal-title" style="color: white"><span class="fas fa-pencil-alt"></span> Editar referencia
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span style="color: white" aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" action="{{route("editarPerfil")}}" enctype="multipart/form-data">
                @method('PUT')
                @csrf
                <div class="modal-body" style="object-fit: fill">
                    <div class="form-group">
                        <label for="codigo">Nombre:</label>
                        <input required="required" type="text"
                               class="form-control
                                 @error('name') is-invalid @enderror" name="name" id="name"
                               value="{{Auth::user()->name}}">
                        @error('name')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message}}</strong>
                            </span>
                        @enderror
                    </div>



                </div>

                <div class="form-group row">

                    <label for="imagenCategoria" class="col-md-4 col-form-label text-md-right" style="text-align: justify">Nueva imagen</label>
                    <div class="input-group image-preview">
                        <div class="form-group col-md-6">
                            <button type="button" class="btn btn-outline-danger image-preview-clear"
                                    style="display:none;">
                                <span class="fas"></span> Borrar
                            </button>
                            <!-- image-preview-input -->
                            <div class="btn btn-default image-preview-input" style="text-align: center">
                                <span class="fas "></span>
                                <span class="image-preview-input-title">Seleccionar</span>
                                <input type="file" accept="image/png, image/jpeg, image/gif"
                                       name="foto"/>


                                <!-- rename it -->
                            </div>
                            </span>
                        </div><!-- /input-group image-preview [TO HERE]-->
                    </div>
                </div>
                <div class="modal-footer">
                    <input type="hidden" name="id" id="id">
                    <button type="submit" class="btn btn-success">Guardar</button>
                </div>
            </form>
        </div>
    </div>
</div>



    <!-- Button trigger modal perfil sirve la ver el perfil y el boton de editar -->
<div class="modal fade" id="modalPerfil" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background: #2a2a35">
                <h5  style="color: white" class="modal-title" id="exampleModalLabel">Perfil</h5>
                <button type="button" style="color: white" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" style="object-fit: fill">
                <form>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Nombre: </label>
                        <label for="recipient-name" class="col-form-label">{{Auth::user()->name}}</label>

                    </div>
                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">Correo Electronico: </label>
                        <label for="recipient-name" class="col-form-label">{{Auth::user()->email}}</label>

                    </div>

                    <div class="form-group">
                        <label for="recipient-name" class="col-form-label">foto :</label>
                        <img src="foto/{{Auth::user()->foto}}" alt="jol.jpg" srcset="" height="90px" width="120px" >

                    </div>

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cerrar</button>
                <div class="profile" data-toggle="modal" data-target="#modalEditarPerfil">
                  <button type="button"  class="btn btn-primary" data-dismiss="modal">Editar</button>
                </div>
            </div>
        </div>
    </div>
</div>


<a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

<!-- Vendor JS Files -->
<script src="/assets/vendor/aos/aos.js"></script>
<script src="/assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
<script src="/assets/vendor/php-email-form/validate.js"></script>
<script src="/assets/vendor/purecounter/purecounter.js"></script>
<script src="/assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="/assets/vendor/typed.js/typed.min.js"></script>
<script src="/assets/vendor/waypoints/noframework.waypoints.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<!-- Template Main JS File -->
<script src="/assets/js/main.js"></script>
<script src="{{asset('js/referencia.js')}}"></script>
<script src="{{asset('js/perfil.js')}}"></script>
@yield('js')

</body>

</html>
