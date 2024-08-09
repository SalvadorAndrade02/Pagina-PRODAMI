@extends('layouts.app')
<style>
    .carousel-image {
        width: 100%;
        height: 500px;
        object-fit: contain;
    }
</style>

@section('content')
<div style="position: relative;">
    <img class="animate__animated animate__pulse" src="images/Mundito.jpeg" style="width: 1310px; height:600px; position: absolute; filter: brightness(80%);">
    <img class="animate__animated animate__backInDown" src="images/LogoProdami-SinFondo-Niletras.png" style="position: absolute; width:400px; margin-left:900px; margin-top:40px;">
    <p class="animate__animated animate__zoomIn" style="font-family: 'DM Serif Display'; position: absolute; color:#ecad24; margin-left:970px; margin-top:290px;"><strong>PROYECTOS DE AUTOMATIZACIÓN</strong></p><br>
    <p class="animate__animated animate__backInDown" style="font-family: 'DM Serif Display'; position: absolute; color:#ecad24; margin-left:975px; margin-top:290px;"><strong>Y MANTENIMIENTO INDUSTRIAL</strong></p>
    <img class="animate__animated animate__backInDown" src="images/Bienve.png" style="position: absolute; width:300px; margin-top:280px; margin-left:500px">
    <img class="animate__animated animate__backInUp" src="images/Sloganxd.png" style="position: absolute; width:600px; margin-top:350px; margin-left:350px">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <br><br><br><br>
    <!--<h3 style="text-align: center; font-family: 'Arial', sans-serif;"><a class="btn button is-warning" style="color: black;" href="/acercaNosotros"><strong>Conocenos</strong></a></h3>-->
    <section class="hero">
        <div class="hero-body" style="background-color: #4C7487;">
            <br><br>
            <div class="columns">
                <div class="column">
                    <h1 style="color: black; font-family: 'DM Serif Display';" class="title is-1">¿Quiénes somos?</h1>
                    <a style="margin-left: 10px; font-family: 'Montserrat';" href="/acercaNosotros"><button class="button is-warning">Conocenos</button></a>
                </div>
                <div class="column">
                    <img src="images/quienes.png" width="200px" style="margin-left: 300px;">
                </div>
            </div>
        </div>
    </section>
</div>
<br>

<section class="hero" style="background-color: #C7C7C7;">
    <div class="hero-body">
        <p class="title" style="text-align: center; color: black; font-family: 'DM Serif Display';">Nuestros Servicios</p>
        <p class="subtitle" style="text-align: center; color: black; font-family: 'Montserrat';">En PRODAMI, nos sentimos orgullosos de nuestros servicios, tales como:</p>
    </div>
</section>
<br>
<div class="container">
    <div class="columns">
        <div class="column">
            <a href="/servicios"><img src="images/Auto.jpg"></a>
        </div>
        <div class="column">
            <a href="/servicios"><img src="images\PSILERIA.jpg"></a>
        </div>
        <div class="column">
            <a href="/servicios"><img src="images\DM.jpg"></a>
        </div>
    </div>
</div>

<br>
<a href="/servicios"><button class="btn btn-warning" style="margin-left: 560px; color:black; font-family: 'Montserrat';">Ver todos los servicios</button></a>
<br><br>
<br>

<section class="hero" style="background-color: #C7C7C7;">
    <div class="hero-body">
        <p class="title" style="text-align: center; font-family: 'DM Serif Display'; color:black;">Nuestros Clientes</p>
        <p class="subtitle" style="text-align: center; color:black; font-family: 'Montserrat';">Tenemos clientes a los cuales, les hemos
            ofrecido proyectos, calidad y excelencia, conocelos:</p>
    </div>
</section>

<br>
<div class="animate__animated animate__zoomIn hero-body" style="background-color: FFFFFF;">
    <div class="container"><br>
        <h1 style="text-align: center; font-family: 'DM Serif Display';">Conoce a nuestros principales clientes</h1>
        <div class="row">
            <div class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active" style="background-color: white;">
                        <img src="images/caballito.png" style="width: 400px; height: 300px;" class="d-block w-100 carousel-image">
                        <h5 style="color: black; text-align: center; font-family: 'Montserrat';">Residencial "Tierra Bonita"</h5>
                    </div>
                    <div class="carousel-item ">
                        <img src="images\ies.png" style="width: 400px; height: 300px;" class="d-block w-100 carousel-image">
                        <h5 style="color: black; text-align: center; font-family: 'Montserrat';">IES</h5>
                    </div>
                    <div class="carousel-item ">
                        <img src="images\repro.png" style="width: 400px; height: 300px;" class="d-block w-100 carousel-image">
                        <h5 style="color: black; text-align: center; font-family: 'Montserrat';">Repro Concreteros</h5>
                    </div>
                </div>
            </div>
        </div>
        <h5 style="text-align: center; font-family: 'Montserrat';">¿Quieres conocer mas? <a style="text-align: center;" href="/client_pro">Da clic aqui</a></h5>
    </div>
    <br>
</div>
<br>

<section class="hero" style="background-color: #C7C7C7;">
    <div class="hero-body">
        <p class="title" style="text-align: center; color: black; font-family: 'DM Serif Display';">Nuestros Proyectos</p>
        <p class="subtitle" style="text-align: center; color: black; font-family: 'Montserrat';">Somos integradores de nuevos proyectos,
            los cuales empleamos la tecnologia actual para la mejoria de cada uno y sobre todo,
            que se encuentre al alcance de todos.</p>
    </div>
</section>
<br>


<div class="container">
    <div class="columns" style="margin-left: 45px;">
        <div class="column">
            <div class="card" style="width: 18rem;">
                <img src="images\dispensador.png" class="card-img-top" style="height: 300px">
                <div class="card-body">
                    <p class="card-text" style="color: black; text-align: center; font-family: 'Montserrat';">Dispensador de productos de limpieza</p> <br>
                    <a href="/vistaIP"><button style="margin-left: 60px; " class="button is-warning is-focused">Conocer más</button></a>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card" style="width: 18rem;">
                <img src="images\maquinaIES.png" class="card-img-top" style="height: 300px">
                <div class="card-body">
                    <p class="card-text" style="color: black; text-align: center; font-family: 'Montserrat';">Mesa marinadora de carne</p> <br>
                    <a href="/vistaIP"><button style="margin-left: 60px;" class="button is-warning is-focused">Conocer más</button></a>
                </div>
            </div>
        </div>
        <div class="column">
            <div class="card" style="width: 18rem;">
                <img src="images\concreteroREPRO.png" class="card-img-top" style="height: 300px">
                <div class="card-body">
                    <p class="card-text" style="color: black; text-align: center; font-family: 'Montserrat';">Planta dosificadora de concreto</p> <br>
                    <a href="/vistaIP"><button style="margin-left: 60px;" class="button is-warning is-focused">Conocer más</button></a>
                </div>
            </div>
        </div>
    </div>
</div>
<br>

<section class="hero" style="background-color: #C7C7C7;">
    <div class="hero-body"> <br><br>
        <div class="columns">
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