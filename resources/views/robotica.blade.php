@extends('layouts.app')
@section('content')

<img class="animate__animated animate__fadeIn" src="images\robot.jpeg" style="height: 100%; width: 100%; position: absolute; filter: brightness(70%);">
<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; position: absolute; width: 100%; height: 70vh;">
    <h1 class="animate__animated animate__backInDown" style="color:white; font-family: 'DM Serif Display';"><strong style="color: white">Robotica</strong></h1>
    <h3 class="animate__animated animate__backInDown" style="color:white; text-align:center; font-family: 'DM Serif Display';"><u style="color: while"><strong style="color: white;">Innovación a tu alcance</strong></u></h3>
</div>
<br>

<div class="container" style="background-color: white; position: relative; width: 100%; margin-top: 380px">
    <h1 style="text-align: center; font-family: 'DM Serif Display';">¿Qué es?</h1> <br>
    <div class="row row-cols-2">
        <div class="col">
            <img src="images\roboImagen.jpeg" width="400px">
        </div>
        <div class="col">
            <p>
                Es una rama de la ingeniería y la ciencia que se enfoca en el diseño, construcción,
                operación y uso de robots. <br>
                La robótica combina conocimientos de diversas disciplinas, incluyendo la mecánica,
                la electrónica, la informática, la inteligencia artificial (IA), y la teoría de control. <br>
                Es una oferta especializada que involucra el diseño, desarrollo, implementación
                y mantenimiento de sistemas robóticos. Estos sistemas pueden ser utilizados en
                diversas industrias
            </p>
        </div>
    </div>
</div>
<br><br>
<section class="hero" style="background-color: #C7C7C7; position: relative; text-align:center">
    <div class="hero-body">
        <p class="title" style="color: black; font-family: 'DM Serif Display';">Áreas de robotica</p> <br>
        <p class="subtitle" style="color: black; font-family: 'Montserrat'">Dentro de las distintas áreas de la robotica, nosotros nos enfocamos en las siguientes:</p>
    </div>
</section>

<div class="container">
    <div class="accordion accordion-flush alert alert-warning" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Robotica Industrial
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" style="font-family: 'Montserrat';">
                    <div class="row">
                        <div class="col-5">
                            <img src="images\dami.jpg" width="300px" >
                        </div>
                        <div class="col">
                            <h3 style="text-align: center; font-family: 'Montserrat';">Robot Industrial Colaborativo</h3> <br><br>
                            Utilizados en fábricas y plantas de producción para realizar tareas repetitivas
                            como ensamblaje, soldadura, y manejo de materiales. <br>
                            En este caso, diseñamos y fabricamos herramental (Grippers), para el manejo de
                            materiales como botellas. <br>
                            De igual forma, somos especialistas en programación de robots colaborativos: cobot Schneider. <br>
                            <br><br><br><br>
                            <video  width="300px" controls>
                                <source src="images\videoRobot.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div> <br>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection