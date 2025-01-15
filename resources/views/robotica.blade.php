@extends('layouts.app')
@section('content')

<img class="animate__animated animate__fadeIn" src="images\robot.jpeg" style="height: 100%; width: 100%; position: absolute; filter: brightness(70%);">
<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; position: absolute; width: 100%; height: 70vh;">
    <h1 class="animate__animated animate__backInDown" style="color:white; font-family: 'DM Serif Display';"><strong style="color: white">Robotica</strong></h1>
    <h3 class="animate__animated animate__backInDown" style="color:white; text-align:center; font-family: 'DM Serif Display';"><u style="color: while"><strong style="color: white;">Innovación a tu alcance</strong></u></h3>
</div>
<br>

<div class="container" style="background-color: white; position: relative; width: 100%; height: auto; margin-top: 380px; padding: 20px;">
    <div style="max-width: 70%;">
        <h1 style="text-align: right; font-family: 'DM Serif Display'; margin-bottom: 20px;">¿Qué es?</h1>
    </div>
    <div class="row" style="display: flex; align-items: center; justify-content: center; gap: 20px;">
        <img src="images/robotcito.jpeg" style="width: 300px;">
        <div style="max-width: 600px;">
            <p style="font-size: 20px; font-family: 'Montserrat'; text-align: justify;">
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

<style>
    /* Estilo general */
    .columns {
        display: flex;
        align-items: center;
    }

    .image-column {
        width: 50%;
    }

    .text-column {
        width: 50%;
        padding-left: 10px;
    }

    /* Estilo responsivo para móviles */
    @media (max-width: 768px) {
        .columns {
            flex-direction: column;
            text-align: center;
        }

        .image-column,
        .text-column {
            width: 100%;
            padding: 0;
        }

        .text-column {
            margin-top: 20px;
        }
    }
</style>

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
                    <h3 style="text-align: center; font-family: 'Montserrat';">Robot Industrial Colaborativo</h3>
                    <div class="container mt-5" style="display: flex; justify-content: space-between; align-items: flex-start; flex-wrap: wrap;">
                        <!-- Imagen a la izquierda -->
                        <div class="image-column" style="flex: 1; max-width: 40%; padding-right: 20px;">
                            <img src="images/dami.jpg" style="max-width: 100%; height: auto;">
                        </div>
                        <!-- Texto y video a la derecha -->
                        <div class="text-column" style="flex: 1; max-width: 60%;">
                            <p>
                                Utilizados en fábricas y plantas de producción para realizar tareas repetitivas
                                como ensamblaje, soldadura, y manejo de materiales.
                                En este caso, diseñamos y fabricamos herramental (Grippers), para el manejo de
                                materiales como botellas.
                                De igual forma, somos especialistas en programación de robots colaborativos: cobot Schneider.
                            </p>
                            <!-- Video centrado -->
                            <div style="text-align: center; margin-top: 20px;">
                                <span>Video Ilustrativo:</span><br>
                                <video width="216px" controls>
                                    <source src="images/videoRobot.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

@endsection