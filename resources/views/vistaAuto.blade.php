@extends('layouts.app')
@section('content')
<img class="animate__animated animate__fadeIn" src="images/Automa.png" width="1310px" height="500px" style="position: absolute;"><br><br><br>
<h1 class="animate__animated animate__backInDown" style="position: relative;"><span style="position: relative; margin-left:40%; color:white; font-family: 'DM Serif Display';" class="badge text-bg center"><u>AUTOMATIZACIÓN</u></span></h1><br><br><br><br><br><br>
<div class="container" style="background-color: white; position: relative;">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="images/automatizacion.png" width="300px">
            </div>
            <div class="col-8">
                <h3 style="text-align: center; font-family: 'DM Serif Display';">¿Qué es?</h3>
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
        </div><br>
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
                    <div class="row">
                        <div class="col-5">
                            <img src="images/tiaPortal.png" width="400px">
                        </div>
                        <div class="col">
                            <h3 style="text-align: center; font-family: 'Montserrat';">TIA Portal</h3>
                            El Portal de Automatización Totalmente Integrada (TIA Portal) nos proporciona 
                            acceso sin restricciones a una gama completa de servicios de automatización 
                            digitalizada, desde la planificación digital y la ingeniería integrada hasta 
                            la operación transparente. <br>
                            Este portal es proporcionado por Siemens, la cual es considerada la mayor 
                            empresa de fabricación industrial de Europa.<br><br>
                            Pagina oficial: <br>
                            <a href="https://www.siemens.com/ar/es.html"><strong>Siemens</strong></a>
                        </div>
                    </div> <br>
                    <br>
                    <div class="row">
                        <div class="col-8">
                            <h3 style="text-align: center; font-family: 'DM Serif Display';">Schneider Control expert</h3><br><br>
                            <p style="font-family: 'Montserrat';">
                            De igual manera, Schneider Control expert ofrece una amplia gama de PLC 
                            (Controladores Lógicos Programables) para máquinas industriales, los cuales 
                            ofrecen una gama completa de soluciones para satisfacer tus necesidades de 
                            automatización. <br>
                            Desde pequeñas máquinas hasta automatización avanzada, nuestra oferta 
                            mejora las máquinas y los procesos en todas las industrias de fabricación.<br><br>
                                Pagina oficial: <br>
                                <a href="https://www.se.com/mx/es/"><strong>Schneider Control expert</strong></a>
                            </p>

                        </div>
                        <div class="col-4">
                            <img src="images\ControlExpert.jpeg" width="400px">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>
</div>


<br><br><br><br>
@endsection