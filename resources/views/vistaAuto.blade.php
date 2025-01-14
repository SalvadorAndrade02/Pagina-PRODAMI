@extends('layouts.app')
@section('content')
<style>
    @media (max-width: 768px) {}
</style>
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
<img class="animate__animated animate__fadeIn" src="images/Automa.png" style="width:100%; height:100%;position: absolute;">
<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; position: absolute; width: 100%; height: 30vh;">
    <h1 class="animate__animated animate__backInDown"><span style="color:white; font-family: 'DM Serif Display';" class="badge text-bg center">AUTOMATIZACIÓN</span></h1>
    <h3 class="animate__animated animate__backInDown" style=" color:white; text-align:center; font-family: 'DM Serif Display';"><u style="color:white"><strong style="color:white">Innovación a tu alcance</strong></u></h3>
</div>
<br>
<div class="container" style="background-color: white; position: relative; width: 100%; height: 100%; margin-top: 380px">
    <h1 style="text-align: center; font-family: 'DM Serif Display';">¿Qué es?</h1>
    <div class="container mt-5" style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
        <div class="column image-column" style="display: flex; justify-content: center; align-items: center; width: 50%;">
            <img src="images\automatizacion.jpeg" style="max-width: 70%; height: auto;">
        </div>
        <div class="column text-column" style="width: 50%; padding-left: 10px;">
            <p style="font-size:20px; font-family: 'Montserrat';">
                La automatización se basa en el uso de tecnología para realizar tareas sin
                intervención humana.
                Nuestra intención es implementar la automatización con el apoyo de software,
                maquinaria y otros sistemas para llevar a cabo procesos que tradicionalmente
                requerirían trabajo manual, aumentando la eficiencia, reduciendo costos,
                mejorando la precisión y liberando tiempo para que las personas puedan enfocarse
                en actividades más estratégicas y creativas.
            </p>
        </div>
    </div>
</div>
<hr>
<br>
<section class="hero" style="background-color: #C7C7C7; position: relative; text-align:center">
    <div class="hero-body">
        <p class="title" style="color: black; font-family: 'DM Serif Display';">Automatización</p> <br>
        <p class="subtitle" style="color: black; font-family: 'Montserrat'">Dentro de la automatización, brindamos servicios mas especificos como los siguientes:</p>
    </div>
</section>
<br><br>
<div class="container">
    <div class="accordion accordion-flush alert alert-warning" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Programacion PLC
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" style="font-family: 'Montserrat';">
                    La programación de PLC es el proceso de crear instrucciones para un dispositivo
                    electrónico especializado que controla maquinaria y procesos en entornos industriales.
                    Los PLCs son ampliamente utilizados en la automatización industrial debido a su
                    robustez, flexibilidad y capacidad de operar en condiciones adversas.<br><br>

                    <!-- Sección TIA Portal -->
                    <div class="column">
                        <h3 style="text-align: center; font-family: 'Montserrat';">TIA Portal</h3>
                        <p>
                            El Portal de Automatización Totalmente Integrada (TIA Portal) nos proporciona
                            acceso sin restricciones a una gama completa de servicios de automatización
                            digitalizada, desde la planificación digital y la ingeniería integrada hasta
                            la operación transparente. <br>
                            Este portal es proporcionado por Siemens, la cual es considerada la mayor
                            empresa de fabricación industrial de Europa.<br><br>
                            Pagina oficial: <br>
                        </p>
                        <a href="https://www.siemens.com/ar/es.html" target="_blank"><strong>Siemens</strong></a>
                    </div>
                    <div class="column image-column" style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
                        <img src="images/tiaPortal.png" style="max-width: 70%; height: auto;">
                    </div>

                    <br>

                    <!-- Sección Schneider Control Expert -->
                    <div class="column">
                        <h3 style="text-align: center; font-family: 'DM Serif Display';">Schneider Control Expert</h3>
                        <p style="font-family: 'Montserrat';">
                            De igual manera, Schneider Control expert ofrece una amplia gama de PLC
                            (Controladores Lógicos Programables) para máquinas industriales, los cuales
                            ofrecen una gama completa de soluciones para satisfacer tus necesidades de
                            automatización. <br>
                            Desde pequeñas máquinas hasta automatización avanzada, nuestra oferta
                            mejora las máquinas y los procesos en todas las industrias de fabricación.<br><br>
                            Pagina oficial: <br>
                            <a href="https://www.se.com/mx/es/" target="_blank"><strong>Schneider Control expert</strong></a>
                        </p>
                    </div>
                    <div class="column image-column" style="display: flex; justify-content: center; align-items: center; margin-top: 20px;">
                        <img src="images/ControlExpert.jpeg" style="max-width: 70%; height: auto;">
                    </div>
                </div>
            </div>

        </div>
    </div>
    <br>
</div>


<br><br><br><br>
@endsection