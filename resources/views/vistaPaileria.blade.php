@extends('layouts.app')
@section('content')

<img class="animate__animated animate__fadeIn" src="images/paile.jpg" style="height:100%; width:100%;position: absolute; filter: brightness(80%);">

<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; position: absolute; width: 100%; height: 70vh;">
    <h1 class="animate__animated animate__backInDown" style="color:white; font-family: 'DM Serif Display';"><strong style="color: white;">Pailería</strong></h1>
    <h3 class="animate__animated animate__backInDown" style="color:white; text-align:center; font-family: 'DM Serif Display';"><u style="color: white;"><strong style="color: white;">Innovación a tu alcance</strong></u></h3>
</div>

<br>

<div class="container" style="background-color: white; position: relative; width: 100%; height: 100%; margin-top: 380px">
    <br><br><br>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="images\paileria.jpg" width="300px">
            </div>
            <div class="col-8">
                <h3 style="text-align: center; font-family: 'DM Serif Display';">¿Qué es?</h3>
                <p style="font-size:20px; font-family: 'Montserrat';">
                Empleamos el servicio de pailería para el manejo de metales, realizando trazos,
                cortes y uniones de piezas metálicas a partir de materiales como láminas o placas de metal.
                </p>
            </div>
        </div><br>
    </div>
</div>

<!-- <div class="container" style="background-color: white; position: relative; width: 100%; margin-top: 380px">
    <h1 style="text-align: center; font-family: 'DM Serif Display';">¿Qué es?</h1>
    <div class="row row-cols-2">
        <div class="col-5">
            <img src="images\paileria.jpg" width="300px" style="margin-left:80px"> 
        </div>
        <div class="col" style="width: 100%;"> <br><br><br>
            <p style="font-family: 'Montserrat';">
                Empleamos el servicio de pailería para el manejo de metales, realizando trazos,
                cortes y uniones de piezas metálicas a partir de materiales como láminas o placas de metal.<br>
            </p>
        </div>
    </div>
    <br>
</div> -->
<br><br>
<hr>
<section class="hero" style="background-color: #C7C7C7; position: relative; text-align:center">
    <div class="hero-body">
        <p class="title" style="color: black; font-family: 'DM Serif Display';">Servicios de pailería</p> <br>
        <p class="subtitle" style="color: black; font-family: 'Montserrat'">Ofrecemos distintos servicios de pailería,
            tales como:</p>
    </div>
</section>
<br>

<div class="container">
    <div class="accordion accordion-flush alert alert-warning" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Soldadura
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" style="text-align: justify;">
                    <div class="container">
                        <h2 style="font-family: 'DM Serif Display'; text-align:center">¿En qué se basa?</h2>
                        <br>
                        <p style="font-family: 'Montserrat'; text-align:center">
                            El servicio de soldadura, dentro de la pailería, es una parte crucial
                            en la fabricación y reparación de estructuras metálicas. Involucra
                            varios procesos y técnicas que permiten unir piezas de metal de manera
                            permanente.
                        </p>
                        <img src="images\soldadura.jpg" width="500px">
                    </div>
                    <br>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Corte y doblado de Metales
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" style="text-align: justify;">
                    <div class="container">
                        <h2 style="text-align: center; font-family: 'DM Serif Display'; text-align:center">¿En qué se basa?</h2>
                        <br>
                        <p style="font-family: 'Montserrat'; text-align:center">
                            El servicio de pailería de corte y doblado de metales es fundamental
                            en la fabricación y ensamblaje de estructuras metálicas. Estos
                            procesos permiten dar forma y tamaño específicos a las piezas metálicas,
                            facilitando su posterior unión y ensamblaje.
                        </p>
                        <img src="images\cort y doblado.jpg" width="300px">
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTree" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Fabricación de estructuras metalicas
                </button>
            </h2>
            <div id="flush-collapseTree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" style="text-align: justify; margin-left: 200px; margin-right: 200px;">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2 style="text-align: center; font-family: 'DM Serif Display';">¿En qué se basa?</h2>
                                <p style="font-family: 'Montserrat';">
                                    El servicio de fabricación de estructuras metálicas implica la
                                    creación de componentes y ensamblajes metálicos que forman la
                                    base de diversas construcciones e instalaciones. Este servicio
                                    es esencial en la industria de la construcción, manufactura y
                                    muchas otras áreas que requieren estructuras duraderas y
                                    resistentes.
                                </p>
                            </div>
                            <img src="images\estruct.webp" width="300px">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Reparación y Mantenimiento
                </button>
            </h2>
            <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" style="text-align: justify;">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2 style="text-align: center; font-family: 'DM Serif Display';">¿En qué se basa?</h2> <br><br>
                                <p style="font-family: 'Montserrat'; text-align: center">
                                    El mantenimiento de nuestros proyectos es crucial para garantizar la
                                    seguridad, integridad y longevidad de los mismos. <br>
                                    En la reparación, se puede emplear la soldadura como solución a los
                                    daños producidos con el tiempo.
                                </p>
                            </div>
                            <div class="col">
                                <img src="images\mant.webp">
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Montaje y ensamblaje
                </button>
            </h2>
            <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2 style="text-align: center; font-family: 'DM Serif Display';">¿En qué se basa?</h2>
                                <br>
                                <p style="font-family: 'Montserrat';">
                                    Este proceso es crucial para la finalización de proyectos de
                                    construcción y manufactura. Implica la unión y fijación de
                                    componentes metálicos previamente fabricados para formar una
                                    estructura completa y funcional. <br>
                                    Al fijar las estructuras, se emplean técnicas como soldadura,
                                    atornillado, remachado o pernos, dependiendo de los requisitos
                                    del diseño y la normativa aplicable.
                                </p>
                            </div>
                            <div class="col-5">
                                <img src="images\montaje.jpg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseUltimo" aria-expanded="false" aria-controls="flush-collapseOne">
                    Pintura y acabado
                </button>
            </h2>
            <div id="flush-collapseUltimo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" style="text-align: justify;">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <h2 style="font-family: 'DM Serif Display';">¿En qué se basa?</h2>
                                <br><br>
                                <p style="font-family: 'Montserrat';">
                                    Dentro del área de pintura y acabado, es fundamental para proteger
                                    las superficies metálicas contra la corrosión, mejorar su durabilidad
                                    y estética, y asegurar el cumplimiento de especificaciones técnicas
                                    y normativas. Este proceso implica varios pasos para preparar,
                                    aplicar y finalizar los recubrimientos en las estructuras metálicas.
                                </p>
                            </div>
                            <div class="col-5">
                                <br><br>
                                <img src="images\acabados.jpg">
                            </div>
                        </div>
                    </div>
                    <br>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection