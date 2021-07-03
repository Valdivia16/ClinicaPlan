<!DOCTYPE html>
<html lang="es">
<head>
    <title>Biblioteca IDO</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="diseno/css/animate.css">

    <link rel="stylesheet" href="diseno/css/owl.carousel.min.css">
    <link rel="stylesheet" href="diseno/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="diseno/css/magnific-popup.css">

    <link rel="stylesheet" href="diseno/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="diseno/css/jquery.timepicker.css">


    <link rel="stylesheet" href="diseno/css/flaticon.css">
    <link rel="stylesheet" href="diseno/css/style.css">
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
    <div class="container">
        <img src="diseno/images/ido.png" width="100px" height="100px">
        <h1 class="navbar1" href="index.html" ><span><strong>Clinica Plasencia</strong></span></h1>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="oi oi-menu"></span> Menú
        </button>
        <div class="collapse navbar-collapse" id="ftco-nav">

        </div>

    </div>
</nav>
<!-- END nav -->

@yield("content")





<!-- loader -->

<script src="{{asset("js/font-awesome.js")}}" crossorigin="anonymous"></script>

<script src="diseno/js/jquery.min.js"></script>
<script src="diseno/js/jquery-migrate-3.0.1.min.js"></script>
<script src="diseno/js/popper.min.js"></script>
<script src="diseno/js/bootstrap.min.js"></script>
<script src="diseno/js/jquery.easing.1.3.js"></script>
<script src="diseno/js/jquery.waypoints.min.js"></script>
<script src="diseno/js/jquery.stellar.min.js"></script>
<script src="diseno/js/owl.carousel.min.js"></script>
<script src="diseno/js/jquery.magnific-popup.min.js"></script>
<script src="diseno/js/jquery.animateNumber.min.js"></script>
<script src="diseno/js/bootstrap-datepicker.js"></script>
<script src="diseno/js/scrollax.min.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="diseno/js/google-map.js"></script>
<script src="diseno/js/main.js"></script>
<script src="{{asset("js/imagen.js")}}"></script>
<script src="{{asset("js/areas.js")}}"></script>
<script src="{{asset("js/cursos.js")}}"></script>
<script src="{{asset("js/prestalibro.js")}}"></script>
<script src="{{asset("js/categoria.js")}}"></script>
<script src="{{asset("js/usuario.js")}}"></script>
<script src="{{asset("js/libropdf.js")}}"></script>
<script src="{{asset("js/libro.js")}}"></script>




<style>
    .navbar1{
        color: #272731; text-shadow: grey 0.01em 0.01em 0.01em; font-size: 40px;
    }
    .image-preview-input-tipo-categoria {
        position: relative;
        overflow: hidden;
        margin: 0px;
        color: #333;
        background-color: #fff;
        border-color: #ccc;
    }

    .image-preview-input-tipo-categoria input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .image-preview-input-title-tipo-categoria {
        margin-left: 2px;
    }

    .image-preview-input {
        position: relative;
        overflow: hidden;
        margin: 0px;
        color: #333;
        background-color: #fff;
        border-color: #ccc;
    }

    .image-preview-input input[type=file] {
        position: absolute;
        top: 0;
        right: 0;
        margin: 0;
        padding: 0;
        font-size: 20px;
        cursor: pointer;
        opacity: 0;
        filter: alpha(opacity=0);
    }

    .image-preview-input-title {
        margin-left: 2px;
    }

    .image-class {
        border-radius: 50%;
        object-fit: cover;
    }
    .image-class:hover{
        opacity: 0.7;
        transition: all 0.1s ease-in-out;
    }
</style>
</body>
</html>
