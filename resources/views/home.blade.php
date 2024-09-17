@extends('layouts.app')
<style>
    .carousel-image {
        width: 100%;
        height: 500px;
        object-fit: contain;
    }
</style>

@section('content')
<div style="width: 100%;">
    <img class="animate__animated animate__pulse" src="images/Mundito.jpeg" style="height: 100%; width: 100%; position: absolute; filter: brightness(80%);">
    <div style="display: flex; justify-content: center; align-items: center; flex-direction: column; position: absolute; width: 100%; height: 100vh;">
        <img class="animate__animated animate__backInDown" src="images/Bienve.png" style="width:300px; object-fit: cover; top:auto">
        <img class="animate__animated animate__backInUp" src="images/Sloganxd.png" style="width:600px; object-fit: cover; top:auto">
    </div>
    <div style="position: relative; width: 100%;">
        <img class="animate__animated animate__backInDown" src="images/LogoProdami-SinFondo-Niletras.png" style="position: absolute; width:250px; right: 40px; top: 40px; object-fit: cover;">
        <p class="animate__animated animate__zoomIn" style="font-family: 'DM Serif Display'; position: absolute; right: 40px; top: 290px; text-align: right; width: 100%">
            <strong style="color:white; width: 100%">PROYECTOS DE AUTOMATIZACIÓN</strong>
        </p>
        <p class="animate__animated animate__backInDown" style="font-family: 'DM Serif Display'; position: absolute; color:white; right: 40px; top: 310px; text-align: right; width: 100%">
            <strong style="color:white; width: 100%">Y MANTENIMIENTO INDUSTRIAL</strong>
        </p>
    </div>
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <!--<h3 style="text-align: center; font-family: 'Arial', sans-serif;"><a class="btn button is-warning" style="color: black;" href="/acercaNosotros"><strong>Conocenos</strong></a></h3>-->
    <section class="hero" style="position: relative; width: 100%;">
        <div class="hero-body" style="background-color: #4C7487; position:relative; width: 100%;">
            <br><br>
            <div class="columns" style="width: 100%;">
                <div class="column" style="width: 100%;">
                    <h1 style="color: black; font-family: 'DM Serif Display'; width: 100%" class="title is-1">¿Quiénes somos?</h1>
                    <a style="margin-left: 10px; font-family: 'Montserrat'; width: 100%" href="/acercaNosotros"><button class="button is-warning">Conocenos</button></a>
                </div>
                <div class="column" style="width: 100%;">
                    <img src="images/quienes.png" width="200px" style="position: absolute; width:150px; right: 40px; top: 40px;">
                </div>
            </div>
        </div>
    </section>
</div>
<section class="hero" style="position: relative; width: 100%; background-color: #C7C7C7;">
    <div class="hero-body" style="width: 100%;">
        <p class="title" style="text-align: center; color: black; font-family: 'DM Serif Display'; width: 100%">Nuestros Servicios</p>
        <p class="subtitle" style="text-align: center; color: black; font-family: 'Montserrat'; width: 100%">En PRODAMI, nos sentimos orgullosos de nuestros servicios, tales como:</p>
    </div>
</section>

<div class="container" style="display: flex; flex-direction: column; align-items: center; width: 100%;">
<br><br>
    <div class="columns" style="width: 100%;"> 
        <div class="column" style="width: 100%;">
            <a href="/servicios" style="width: 100%"><img src="images/Auto.png"></a>
        </div>
        <div class="column" style="width: 100%;">
            <a href="/servicios" style="width: 100%"><img src="images/PSILERIA.jpg"></a>
        </div>
        <div class="column" style="width: 100%;">
            <a href="/servicios" style="width: 100%"><img src="images/DM.png"></a>
        </div>
    </div>
    <div class="button-container" style="margin-top: 20px;">
        <a href="/servicios">
            <button class="btn btn-warning" style="text-align: center; color: black; font-family: 'Montserrat';">Ver todos los servicios</button>
        </a>
    </div>
</div>
<br>
<section class="hero" style="position: relative; width: 100%; background-color: #C7C7C7;">
    <div class="hero-body" style="width: 100%;">
        <p class="title" style="text-align: center; font-family: 'DM Serif Display'; color:black; width: 100%">Nuestros Clientes</p>
        <p class="subtitle" style="text-align: center; color:black; font-family: 'Montserrat'; width: 100%">Tenemos clientes a los cuales, les hemos
            ofrecido proyectos, calidad y excelencia, conocelos:</p>
    </div>
</section>

<br>
<div class="animate__animated animate__zoomIn hero-body" style="background-color: FFFFFF; width: 100%;">
    <div class="container" style="width: 100%"><br>
        <h1 style="text-align: center; font-family: 'DM Serif Display'; width: 100%">Conoce a nuestros principales clientes</h1>
        <div class="row" style="width: 100%">
            <div class="carousel slide" data-bs-ride="carousel" data-bs-interval="3000" style="width: 100%">
                <div class="carousel-inner" style="width: 100%">
                    <div class="carousel-item active" style="background-color: white;">
                        <img src="images\american.jpeg" style="width: 400px; height: 300px;" class="d-block w-100 carousel-image">
                        <h5 style="color: black; text-align: center; font-family: 'Montserrat';">American Plastics</h5>
                    </div>
                    <div class="carousel-item" style="background-color: white;">
                        <img src="images\jabil.png" style="width: 400px; height: 300px;" class="d-block w-100 carousel-image">
                        <h5 style="color: black; text-align: center; font-family: 'Montserrat';">Jabil Inc</h5>
                    </div>
                    <div class="carousel-item " style="background-color: white;">
                        <img src="images\atexcaco.jpeg" style="width: 400px; height: 300px;" class="d-block w-100 carousel-image">
                        <h5 style="color: black; text-align: center; font-family: 'Montserrat';">Proyecto Hidroelectrica Atexcaco</h5>
                    </div>
                    <div class="carousel-item " style="background-color: white;">
                        <img src="images\confetex.jpeg" style="width: 400px; height: 300px;" class="d-block w-100 carousel-image">
                        <h5 style="color: black; text-align: center; font-family: 'Montserrat';">Confetex S.A de C.V</h5>
                    </div>
                    <div class="carousel-item ">
                        <img src="images\repro.png" style="width: 400px; height: 300px;" class="d-block w-100 carousel-image">
                        <h5 style="color: black; text-align: center; font-family: 'Montserrat';">Renpro Concreteros</h5>
                    </div>
                    <div class="carousel-item " style="background-color: white;">
                        <img src="images/caballito.png" style="width: 400px; height: 300px;" class="d-block w-100 carousel-image">
                        <h5 style="color: black; text-align: center; font-family: 'Montserrat';">Residencial "Tierra Bonita"</h5>
                    </div>
                    <div class="carousel-item ">
                        <img src="images\ies.png" style="width: 400px; height: 300px;" class="d-block w-100 carousel-image">
                        <h5 style="color: black; text-align: center; font-family: 'Montserrat';">IES</h5>
                    </div>
                </div>
            </div>
        </div>
        <h5 style="text-align: center; font-family: 'Montserrat';">¿Quieres conocer mas? <a style="text-align: center;" href="/client_pro">Da clic aqui</a></h5>
    </div>
    <br>
</div>
<br>

<section class="hero" style="background-color: #C7C7C7; width: 100%;">
    <div class="hero-body">
        <p class="title" style="text-align: center; color: black; font-family: 'DM Serif Display';">Nuestros Proyectos</p>
        <p class="subtitle" style="text-align: center; color: black; font-family: 'Montserrat';">Somos integradores de nuevos proyectos,
            los cuales empleamos la tecnologia actual para la mejoria de cada uno y sobre todo,
            que se encuentre al alcance de todos.</p>
    </div>
</section>
<br>


<div class="container" style="width: 100%;">
    <div class="columns" style="margin-left: responsive;">
        <div class="column" style="width: 100%;">
            <div class="card" style="width: 18rem; height:32rem;">
                <img src="images\dispensador.png" class="card-img-top" style="width: 100%">
                <div class="card-body">
                    <p class="card-text" style="color: black; text-align: center; font-family: 'Montserrat';">Dispensador de productos de limpieza</p> <br>
                    <a href="/vistaIP"><button style="margin-left: 60px; " class="button is-warning is-focused">Conocer más</button></a>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card" style="width: 18rem; height:32rem;">
                <img src="images\maquinaIES.png" class="card-img-top" style="width: auto; height:100%;">
                <div class="card-body">
                    <p class="card-text" style="color: black; text-align: center; font-family: 'Montserrat';">Mesa marinadora de carne</p> <br><br><br><br><br><br><br><br>
                    <a href="/vistaIP"><button style="margin-left: 60px;" class="button is-warning is-focused">Conocer más</button></a>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card" style="width: 18rem; height:32rem;">
                <img src="images\concreteroREPRO.png" class="card-img-top" style="width: 100%;">
                <div class="card-body">
                    <p class="card-text" style="color: black; text-align: center; font-family: 'Montserrat';">Planta dosificadora de concreto</p> <br>
                    <a href="/vistaIP"><button style="margin-left: 60px;" class="button is-warning is-focused">Conocer más</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<section class="hero" style="background-color: #C7C7C7; width: 100%;">
    <div class="hero-body" style="width: 100%;"> <br><br>
        <div class="columns" style="width: 100%;">
            <div class="column">
                <img src="images\edificio.png" width="120px">
            </div>
            <div class="column is-three-quarters">
                <p class="title" style="text-align: center; color: black; font-family: 'DM Serif Display';">
                    ¿Buscas vacantes para realizar tu residencia o servicio? <br>
                    Puedes realizarla con nosotros. <br> <br>
                    <a style="font-family: 'Montserrat';" href="/vista_bolsa"><button type="button" class="btn btn-warning">Postularme</button></a>
                </p>
            </div>
            <div class="column">
                <img src="images\edificio.png" width="120px">
            </div>
        </div>
    </div>
</section>
@endsection