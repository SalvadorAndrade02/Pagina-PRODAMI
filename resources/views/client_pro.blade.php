<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css'>
@extends('layouts.app')
@section('content')
<img class="animate__animated animate__fadeIn" src="images\clientes.png" style="width: 100%; height:100%; position: absolute; filter: brightness(60%);">

<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; position: absolute; width: 100%; height: 70vh;">
    <h1 class="animate__animated animate__backInDown" style="color:white; font-family: 'DM Serif Display';"><strong style="color:white;">Nuestros Clientes</strong></h1>
    <h3 class="animate__animated animate__backInDown" style="color:white; text-align:center; font-family: 'DM Serif Display';"><u style="color:white;"><strong style="color:white;">Innovación a tu alcance</strong></u></h3>
</div>
<br>
<section class="hero" style="background-color: #C7C7C7; position: relative; text-align:center; width: 100%; margin-top: 380px">
    <div class="hero-body">
        <p class="title" style="color: black; font-family: 'DM Serif Display'">Nuestros Clientes</p>
        <p class="subtitle" style="color: black; font-family: 'Montserrat'">
            En Prodami, nos enorgullece ofrecer productos y servicios de alta calidad
            diseñados para satisfacer las necesidades y expectativas de nuestros valiosos
            clientes. <br>
            Conoce a nuestros clientes a continuación:
        </p>
    </div>
</section>
<br><br>

<div class="container" style="background-color: white; position: relative;">
    <!-- Button trigger modal -->

    <div class="columns">
        <div class="column">
            <img src="images\american.jpeg" type="button" style="border-radius: 50%; height: 290px; width: 300px; margin-left: 120px" class="btn" data-bs-toggle="modal" data-bs-target="#ModalAmerican"> <br>
        </div>
        <div class="column">
            <br><br><br><br>
            <h2 style="margin-left: -70px; font-family: 'DM Serif Display'">American Plastics</h2>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <img src="images\jabil.png" type="button" style="border-radius: 50%; height: 290px; width: 300px; margin-left: 120px" class="btn" data-bs-toggle="modal" data-bs-target="#ModalJab"> <br>
        </div>
        <div class="column">
            <br><br><br><br>
            <h2 style="margin-left: -70px; font-family: 'DM Serif Display'">Jabil Inc</h2>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <img src="images\tena.jpg" type="button" style="border-radius: 50%; height: 290px; width: 300px; margin-left: 120px" class="btn" data-bs-toggle="modal" data-bs-target="#ModalTenaris"> <br>
        </div>
        <div class="column">
            <br><br><br><br>
            <h2 style="margin-left: -70px; font-family: 'DM Serif Display'">Tenaris Tamsa</h2>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <img src="images\atexcaco.jpeg" type="button" style="border-radius: 50%; height: 290px; width: 300px; margin-left: 120px" class="btn" data-bs-toggle="modal" data-bs-target="#ModalHidro"> <br>
        </div>
        <div class="column">
            <br><br><br><br>
            <h2 style="margin-left: -70px; font-family: 'DM Serif Display'">Proyecto Hidroelectrica Atexcaco</h2>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <img src="images\confetex.jpeg" type="button" style="border-radius: 50%; height: 290px; width: 300px; margin-left: 120px" class="btn" data-bs-toggle="modal" data-bs-target="#ModalConfe"> <br>
        </div>
        <div class="column">
            <br><br><br><br>
            <h2 style="margin-left: -70px; font-family: 'DM Serif Display'">Confetex S.A de C.V</h2>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <img src="images\repro.png" type="button" style="border-radius: 50%; height: 290px; width: 300px; margin-left: 120px" class="btn" data-bs-toggle="modal" data-bs-target="#ModalRepro">
        </div>
        <div class="column">
            <br><br><br><br>
            <h2 style="margin-left: -70px; font-family: 'DM Serif Display'">Renpro Concreteros</h2>
        </div>
    </div>

    <!-- <div class="columns">
        <div class="column">
            <img src="images\arghe.jpeg" type="button" style="border-radius: 50%; height: 290px; width: 300px; margin-left: 120px" class="btn" data-bs-toggle="modal" data-bs-target="#ModalArg"> <br>
        </div>
        <div class="column">
            <br><br><br><br>
            <h2 style="margin-left: -70px; font-family: 'DM Serif Display'">Arghe Grupo Concretero</h2>
        </div>
    </div> -->

    <div class="columns">
        <div class="column">
            <img src="images\ies.png" type="button" style="border-radius: 50%; height: 290px; width: 300px; margin-left: 120px" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
        </div>
        <div class="column">
            <br><br><br><br>
            <h3 style="margin-left: -70px; font-family: 'DM Serif Display'">Instituto de Estudios Superiores de la Sierra</h3> <br>
        </div>
    </div>

    <div class="columns">
        <div class="column">
            <img src="images\caballito.png" type="button" style="border-radius: 50%; height: 290px; width: 300px; margin-left: 120px" class="btn" data-bs-toggle="modal" data-bs-target="#ModalTB"> <br>
        </div>
        <div class="column">
            <br><br><br><br>
            <h2 style="margin-left: -70px; font-family: 'DM Serif Display'">Residencial Tierra Bonita</h2>
        </div>
    </div>

    <!-- <div class="columns">
        <div class="column">
            <img src="images\tubypre.jpeg" type="button" style="border-radius: 50%; height: 290px; width: 300px; margin-left: 120px" class="btn" data-bs-toggle="modal" data-bs-target="#ModalTub"> <br>
        </div>
        <div class="column">
            <br><br><br><br>
            <h2 style="margin-left: -70px; font-family: 'DM Serif Display'">Tubypre</h2>
        </div>
    </div> -->

    <!-- Modal American -->
    <div class="modal fade" id="ModalAmerican" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">American Plastics</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 style="font-family:'DM Serif Display'">Proyectos hacia el cliente</h2> <br>
                    <div class="card panel-block sectAlim" data-bs-target="#ModalEle">
                        <img src="images\radiadores.jpg" width="300px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'DM Serif Display'">Línea de ensamble radiador motoventilador y condensador</h5>
                            <p class="card-text">
                                <strong style="color: black; font-family:'DM Serif Display';">Descripción:</strong>
                                Automatización de línea ensamble final control automático armado de gabinete eléctrico,
                                instalación, programacion plc y puesta en marcha, control por transductores de presión
                                y sistema de impresión automático con etiqueta de calidad por código QR. <br>
                                Programación plc 1500 simens. <br>
                                Diseño eléctrico e-plan.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/vistaIP"><button class="btn btn-warning" style="color:black; font-family: 'Montserrat';">Conocer mas proyectos</button></a>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal IES -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Instituto de Estudios Superiores de la Sierra</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 style="font-family:'DM Serif Display'">Proyectos hacia el cliente</h2> <br>
                    <div class="card panel-block sectAlim" data-bs-target="#ModalEle">
                        <img src="images\maquinaIES.png" width="300px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'DM Serif Display'">Mesa marinadora de carne</h5>
                            <p class="card-text">
                                <strong style="color: black; font-family:'DM Serif Display';">Descripción:</strong> Diseño de mesa marinadora a necesidades del cliente. Trabajos
                                de pailería en acero inoxidable, toda la periferia del proyecto en grado alimenticio. Servicio de
                                maquinado para agujas especiales con bloque de distribución con maneral para la salida de líquido
                                preparado gastrómicamente.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/vistaIP"><button class="btn btn-warning" style="color:black; font-family: 'Montserrat';">Conocer mas proyectos</button></a>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Repro -->
    <div class="modal fade" id="ModalRepro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Renpro Concreteros</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 style="font-family:'DM Serif Display'">Proyectos hacia el cliente</h2> <br>
                    <div class="card panel-block sectAlim" data-bs-target="#ModalEle">
                        <img src="images\litr.jpeg" width="300px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'DM Serif Display'">Cuenta Litros Automaticos</h5>
                            <p class="card-text">
                                <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Dimensionamiento eléctrico, Programación PLC, HMI, Flujómetro Keyence,
                                Sistema local y puesta en marcha.
                                Armado gabinete eléctrico, control (24 v)
                                Programación PLC 1200, HMI KTP 600 Siemens
                                Conexión flujómetro Keyence
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/vistaIP"><button class="btn btn-warning" style="color:black; font-family: 'Montserrat';">Conocer mas proyectos</button></a>
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Elevador -->
    <div class="modal fade" id="ModalTB" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Residencial Tierra Bonita</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 style="font-family:'DM Serif Display'">Proyectos hacia el cliente</h2> <br>
                    <div class="card panel-block sectAlim" data-bs-target="#ModalEle">
                        <img src="images\elevador.png" width="300px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'DM Serif Display'">Elevador residencial</h5>
                            <p class="card-text">
                                <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Obra Residencial
                                Elevador residencial automático, Cabina panorámica dimensionado a las necesidades del cliente.
                                Diseño de guías mecánicas estructurales para dicho elevador, realizando trabajos de pailería
                                para toda la obra mecánica. Programación y puesta en marchadado por la empresa
                                STANZ ELEVATORES. Diseño mecánico: Solid Works, Armado de gabinete eléctrico STANZ
                                Programación driver de velocidad ALLEN BRADLEY
                                Diseño eléctrico: Solid Works Electrical
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/vistaIP"><button class="btn btn-warning" style="color:black; font-family: 'Montserrat';">Conocer mas proyectos</button></a>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Gabinete eléctrico -->
    <div class="modal fade" id="ModalTenaris" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Tenaris Tamsa</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 style="font-family:'DM Serif Display'">Proyectos hacia el cliente</h2> <br>
                    <div class="card panel-block sectAlim" data-bs-target="#ModalEle">
                        <img src="images\gabinete.jpeg" width="300px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'DM Serif Display'">Gabinete eléctrico</h5>
                            <p class="card-text">
                                <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong>
                                Diseño mecánico en software solidworks para la elaboración de gabinete
                                eléctrico de línea de producción, Nave 06. <br>
                                Servicio de corte laser para armando de gabinete eléctrico y ensamble de brazo
                                giratorio de la marca RITTAL acorde a las necesidades del cliente.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/vistaIP"><button class="btn btn-warning" style="color:black; font-family: 'Montserrat';">Conocer mas proyectos</button></a>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Control nivel compuertas hidroeléctrica -->
    <div class="modal fade" id="ModalHidro" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Hidroeléctrica Atexcaco</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 style="font-family:'DM Serif Display'">Proyectos hacia el cliente</h2> <br>
                    <div class="card panel-block sectAlim" data-bs-target="#ModalEle">
                        <img src="images\hidroelectrica.jpeg" width="300px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'DM Serif Display'">Control nivel compuertas hidroeléctrica</h5>
                            <p class="card-text">
                                <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong>
                                Sistema de inspección de nivel de agua tanque principal. <br>
                                Armado de gabinete eléctrico, instalación, programación PLC, HMI, sistema en red y puesta en marcha. <br>
                                Programación PLC 1200, HMI KTP 400. <br>
                                Sensores analógicos de presión. <br>
                                Diseño eléctrico: EPLAN <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/vistaIP"><button class="btn btn-warning" style="color:black; font-family: 'Montserrat';">Conocer mas proyectos</button></a>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Control caldera -->
    <div class="modal fade" id="ModalConfe" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">CONFETEX S.A de C.V</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 style="font-family:'DM Serif Display'">Proyectos hacia el cliente</h2> <br>
                    <div class="card panel-block sectAlim" data-bs-target="#ModalEle">
                        <img src="images\caldero.png" width="300px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'DM Serif Display'">Control caldera</h5>
                            <p class="card-text">
                                <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong>
                                Automatización de caldera con control automático, armado de gabinete eléctrico,
                                instalación, programación PLC y puesta en marcha. <br>
                                Programación PLC 1200. <br>
                                Control por termopar. <br>
                                Diseño eléctrico: EPLAN. <br>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/vistaIP"><button class="btn btn-warning" style="color:black; font-family: 'Montserrat';">Conocer mas proyectos</button></a>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Línea de ensamble, dispositivo médico-->
    <div class="modal fade" id="ModalJab" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalLabel">Jabil Inc</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <h2 style="font-family:'DM Serif Display'">Proyectos hacia el cliente</h2> <br>
                    <div class="card panel-block sectAlim" data-bs-target="#ModalEle">
                        <img src="images\medico.jpeg" width="300px">
                        <div class="card-body">
                            <h5 class="card-title" style="font-family:'DM Serif Display'">Línea de ensamble, dispositivo médico</h5>
                            <p class="card-text">
                                <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong>
                                Línea de producción de ensamble, Dispositivo
                                médico con prueba de fuerzas para dicho ensamble. Programación proceso, a necesidades de cliente,
                                servicio de maquinado, con piezas anodizadas por dicho sector. Programación proceso PLC.
                                Allen dey RCLOGIX 30, Seguridad, Compact LogiX 5480
                                Y puesta en marcha.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <a href="/vistaIP"><button class="btn btn-warning" style="color:black; font-family: 'Montserrat';">Conocer mas proyectos</button></a>
                    <button class="btn btn-danger" data-bs-dismiss="modal" aria-label="Close">Cerrar</button>
                </div>
            </div>
        </div>
    </div>

</div>
<section class="hero" style="background-color: #C7C7C7; position: relative; text-align:center">
    <div class="hero-body">
        <p class="title" style="color: black; font-family: 'DM Serif Display'">¿Te interesa cotizar algún producto/proyecto?</p>
        <p class="subtitle" style="color: black; font-family: 'Montserrat'">
            Contactanos, llenando este formulario, y nos pondremos en contacto con tigo.
        </p>
    </div>
</section>

<!-- Formulario de cotización -->
<section class="hero" style="background-color: #C7C7C7; position: relative;">
    <div class="hero-body">
        <div class="container">
            <h2 style="font-family: 'DM Serif Display'">Datos del Cotizador</h2> <br>
            <form class="row g-3" action="{{ route('send.coti') }}" method="POST">
                @csrf
                <div class="col-md-6">
                    <p class="control has-icons-left">
                        <input class="input" id="nomRazSoc" name="nomRazSoc" type="text" placeholder="Nombre o Razón Social" require />
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </p>
                </div>
                <div class="col-md-6 has-validation">
                    <p class="control has-icons-left">
                        <input class="input" id="rfc" name="rfc" type="text" placeholder="RFC" maxlength="13" aria-describedby="validationTooltipUsernamePrepend" required />
                        <span class="icon is-small is-left">
                            <i class="fi fi-rs-clipboard-list"></i>
                        </span>
                    </p>
                    <div class="invalid-tooltip">
                        Porfavor, ingrese un RFC valido.
                    </div>
                </div>
                <div class="col-12">
                    <h2 style="font-family: 'DM Serif Display'">Datos de Contacto</h2>
                </div>
                <div class="col-md-6">
                    <p class="control has-icons-left">
                        <input class="input" id="correo" name="correo" type="email" placeholder="Correo Electrónico" require />
                        <span class="icon is-small is-left">
                            <i class="fas fa-envelope"></i>
                        </span>
                    </p>
                </div>
                <div class="col-md-3">
                    <p class="control has-icons-left">
                        <input class="input" id="telefono" name="telefono" type="numeric" placeholder="Teléfono" require />
                        <span class="icon is-small is-left">
                            <i class="fi fi-br-smartphone"></i>
                        </span>
                    </p>
                </div>
                <div class="col-12">
                    <h2 style="font-family: 'DM Serif Display'">Descripción de Solicitud</h2>
                </div>
                <div class="col-12">
                    <div class="control">
                        <textarea class="textarea is-focused" id="descripcion" name="descripcion" placeholder="Describa detalladamente su solicitud" require></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>
@endsection