@extends('layouts.app')
@section('content')

<img class="animate__animated animate__fadeIn" src="images\robot.jpeg" style="margin-left: 5px; height: 500px; width: 1300px; position: absolute; filter: brightness(70%);">
<br><br><br><br><br><br><br><br><br>
<h1 class="animate__animated animate__backInDown" style="position: absolute; color:white; margin-left: 560px; font-family: 'DM Serif Display';"><strong>Robotica</strong></h1><br><br><br>
<h3 class="animate__animated animate__backInDown" style="position: absolute; color:white; margin-left: 500px; text-align:center; font-family: 'DM Serif Display';"><u><strong>Innovación a tu alcance</strong></u></h3>
<br><br><br><br><br><br><br>

<div class="container" style="background-color: white; position: relative;">
    <h1 style="text-align: center; font-family: 'DM Serif Display';">¿Qué es?</h1> <br>
    <div class="row row-cols-2">
        <div class="col">
            <img src="images\roboImagen.jpeg" width="400px" style="margin-left:70px">
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
                            <img src="images\robotcit.jpeg" width="400px">
                        </div>
                        <div class="col">
                            <h3 style="text-align: center; font-family: 'Montserrat';">Robot Industrial</h3> <br><br><br>
                            Utilizados en fábricas y plantas de producción para realizar tareas repetitivas 
                            como ensamblaje, soldadura, y manejo de materiales. <br>
                            En este caso, fabricamos un brazo robotico con la utilidad de manejo de materiales,
                            tales como la manipulación de botellas de vidrio y plastico.
                        </div>
                    </div> <br>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>
@endsection