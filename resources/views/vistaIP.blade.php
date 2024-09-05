@extends('layouts.app')
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-straight/css/uicons-bold-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-straight/css/uicons-regular-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-regular-rounded/css/uicons-regular-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<style>
    .panel-block {
        display: none;
    }

    .search-block {
        display: block !important;
    }

    .card {
        display: none;
        margin-top: 20px;
    }
</style>
@section('content')

<img class="animate__animated animate__fadeIn" src="images\IntegradoresNuevos.jpg" height="100%" width="100%" style="position: absolute; filter: brightness(60%);">
<br><br><br><br><br><br><br><br>

<h1 class="animate__animated animate__backInDown" style="position: absolute; color:white; margin-left: 350px; font-family: 'DM Serif Display';"><strong>Integradores de Nuevos Proyectos</strong></h1><br><br><br>
<h3 class="animate__animated animate__backInDown" style="position: absolute; color:white; margin-left: 500px; text-align:center; font-family: 'DM Serif Display';"><u><strong>Innovación a tu alcance</strong></u></h3>
<br><br><br><br><br><br><br><br><br><br>

<section class="hero" style="background-color: #C7C7C7; position: relative; text-align:center">
    <div class="hero-body">
        <p class="title" style="color: black; font-family: 'DM Serif Display'">Nuestros Proyectos</p> <br>
        <p class="subtitle" style="color: black; font-family: 'Montserrat'">Tambien somos integradores de nuevos proyectos, los cuales hemos contribuido
            al desarrollo e implementación de nuevas herramientas, facilitando las transición
            y adaptación a nuevas iniciativas en base al cliente, proporcionando experiencia
            y recursos para asegurar el éxito de los proyecto.</p>
    </div>
</section>
<br>

<div class="container" style="background-color: #1C2B32; border-radius: 23px; width: 2000px; position: relative">
    <br>
    <article class="panel is-info">
        <p class="panel-heading" style="font-family: 'DM Serif Display'">Proyectos por sectores.</p>
        <p class="panel-tabs" style="cursor: pointer;">
            <a id="all" style="color: white; font-family: 'Montserrat'" class="is-active">Todos</a>
            <a id="construction" style="color: white; font-family: 'Montserrat'">Sector Construcción</a>
            <a id="sectAlim" style="color: white; font-family: 'Montserrat'">Sector Alimenticio</a>
            <a id="sectText" style="color: white; font-family: 'Montserrat'">Sector Textil</a>
            <a id="sectCiv" style="color: white; font-family: 'Montserrat'">Sector Civil</a>
            <a id="sectMed" style="color: white; font-family: 'Montserrat'">Sector Medico</a>
            <a id="sectEner" style="color: white; font-family: 'Montserrat'">Sector Energetico</a>
            <a id="sectAuto" style="color: white; font-family: 'Montserrat'">Sector Automotriz</a>
            <a id="sectQui" style="color: white; font-family: 'Montserrat'">Sector Quimico</a>
            <a id="sectMet" style="color: white; font-family: 'Montserrat'">Sector Metalurgico</a>
        </p>
        <div class="panel-block search-block">
            <p class="control has-icons-left">
                <input id="search" class="input is-info" type="text" placeholder="Search" />
                <span class="icon is-left">
                    <i class="fi fi-bs-search" aria-hidden="true"></i>
                </span>
            </p>
        </div>

        <div class="columns is-multiline">
            <!-- <div class="column is-half"> -->
            <!-- Tarjeta para Máquina mezcladora Teka -->
            <div class="card panel-block construction" style="width: 30rem; height:40rem; margin-left:30px; " data-bs-target="#ModalTeka">
                <img src="images\TekaChida.jpeg" class="card-img-top" width="500px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Máquina mezcladora Teka</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Construcción <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Perote Veracruz <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> Tubos y Prefabricados González <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Máquina mezcladora Teka, revolvedora, Vifesa, Vibrock.
                        Limpieza general a los gabinetes de potencia y control eléctrico, supleteado y
                        limpieza con líquido dieléctrico. Engrasado de rodamientos a banda distribuidora,
                        cambio de aceite a motorreductores y calibración de equipo cuenta litros y pesaje
                        para dicha revolvedora con taras de pesaje de 20 kg (500 kg).
                    </p>
                </div>
            </div>
            <!-- </div> -->
            <!-- <div class="column is-half"> -->
            <!-- Tarjeta para Máquina seleccionadora granos de café -->
            <div class="card panel-block sectAlim" style="width: 30rem; height:40rem; margin-left:30px;" data-bs-target="#ModalCafe">
                <img src="images\cafe.jpeg" class="card-img-top" style="width:250px; height:350px; margin-left:100px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Máquina seleccionadora granos de café</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Alimenticio <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Huitzilan de Serdán, Puebla <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> Beneficio Húmedo y Seco de Palenque <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Servicio de mantenimiento
                        eléctrico, mecánico y
                        recalibración de cámaras de
                        visión para selección de
                        granos de café acorde a las
                        necesidades del cliente.
                    </p>
                </div>
            </div>
            <!-- </div> -->

            <!-- <div class="column is-half"> -->
            <!-- Modal Planta dosificadora de concreto -->
            <div class="card panel-block construction" style="width: 30rem; height:40rem; margin-left:30px; position: relative" data-bs-target="#ModalConcretero">
                <img src="images\concreteroREPRO.png" style="width:250px; height:350px; margin-left:100px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Planta dosificadora de concreto</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Construcción <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Teziutlán, Pue <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> RENPRO Construcciones <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Sistema de control Plataforma: SIMATIC S7-1200,
                        HMI KTP 600, Sensor de caudal, báscula de señal análoga, motores de 10HP, bomba de 8HP,
                        electro válvula hidráulica, computador NUC, base de datos Visual Basic, conectado a toda
                        la periferia de dicha planta.
                        <br><br>
                    </p>
                </div>
            </div>
            <!-- </div> -->
            <!-- <div class="column is-half"> -->
            <!-- Modal Cuenta litros automáticos -->
            <div class="card panel-block construction" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalLitros">
                <img src="images\litr.jpeg" style="width:250px; height:350px; margin-left:100px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Cuenta litros automáticos</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Construcción <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Tuxpan, Veracruz <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> RENPRO Construcciones <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Dimensionamiento eléctrico, Programación PLC, HMI, Flujómetro Keyence,
                        Sistema local y puesta en marcha.
                        Armado gabinete eléctrico, control (24 v)
                        Programación PLC 1200 simens, HMI KTP 600 Siemens
                        Conexión flujómetro Keyence
                    </p>
                </div>
            </div>
            
            <!-- Modal Colector de polvos de acero inoxidable 304-->
            <div class="card panel-block construction" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalLitros">
                <img src="images\polvos.png" style="width:350px; height:250px; margin-left:50px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Colector de polvos de acero inoxidable 304</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Construcción <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong>  <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong>  <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> 
                        Diseño y fabricación de colector de polvos y armado eléctrico para control 
                        dado por tarjeta secuenciadora para sistema colector de polvos a la atmosfera 
                        filtrado mediante 7 filtros rectangulares especiales para silos de cemento.
                    </p>
                </div>
            </div>

            <!-- Modal Tarjeta secuenciadora -->
            <div class="card panel-block construction" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalLitros">
                <img src="images\tarjeta.jpg" style="width:250px; height:350px; margin-left:100px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Tarjeta secuenciadora.</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Construcción <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Refaccionamiento</strong>
                        <strong style="color: black; font-family:'DM Serif Display'"></strong>  <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> 
                        Diseño y fabricación de tarjeta PCB para secuencia de pulsos para sistema 
                        colector de polvos especial para silos de cemento.
                    </p>
                </div>
            </div>

            <!-- <div class="column is-half"> -->
            <!-- Modal Dispositivo Inspección de Temperatura -->
            <div class="card panel-block sectText" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalLitros">
                <img src="images\temperatura.jpeg" style="width:250px; height:350px; margin-left:100px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Dispositivo Inspección de Temperatura</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Textil <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Teziutlán, Pue <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> CONFETEX <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Lectura para secadoras industriales.
                        Dispositivo inspección de temperatura para secadoras industriales, rango de
                        temperatura de 10° C – 600° C.
                        Programación, diseño eléctrico, ensamble de dicho dispositivo y puesto en marcha.
                        Armado eléctrico (12 V). Programación tipo Arduino. Diseño en PCB.
                    </p>
                </div>
            </div>
            <!-- </div> -->
            <!-- <div class="column is-half" style="position: relative"> -->
            <!-- Modal Elevador residencial-->
            <div class="card panel-block sectCiv" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalEle">
                <img src="images\elevador.png" style="width:250px; height:250px; margin-left:100px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Elevador residencial</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Civil <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Teziutlán, Puebla <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> Tierra Bonita <br>
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
            <!-- </div> -->


            <!-- <div class="column" style="position: relative"> -->
            <!-- Modal Línea de ensamble, dispositivo médico-->
            <div class="card panel-block sectMed" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalEle">
                <img src="images\medico.jpeg" style="width:250px; margin-left:100px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Línea de ensamble, dispositivo médico</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Médico <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Tijuana, Baja California <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> Jabil <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Línea de producción de ensamble, Dispositivo
                        médico con prueba de fuerzas para dicho ensamble. Programación proceso, a necesidades de cliente,
                        servicio de maquinado, con piezas anodizadas por dicho sector. Programación proceso PLC.
                        Allen dey RCLOGIX 30, Seguridad, Compact LogiX 5480
                        Y puesta en marcha.
                    </p>
                </div>
            </div>
            <!-- </div> -->
            <!-- <div class="column" style="position: relative"> -->
            <!-- Modal Control nivel compuertas hidroeléctrica-->
            <div class="card panel-block sectEner" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalEle">
                <img src="images\atexcacoChida.png" width="500px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Control nivel compuertas hidroeléctrica</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Energético <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Teziutlán, Pue <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> Hidroeléctrica Atexcaco <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Sistema de inspección de nivel de agua tanque principal. <br>
                        Armado de gabinete eléctrico, instalación, programación PLC, HMI, sistema en red y puesta en marcha. <br>
                        Programación PLC 1200 simens, HMI KTP 400. <br>
                        Sensores analógicos de presión. <br>
                        Diseño eléctrico: EPLAN <br>
                    </p>
                </div>
            </div>
            <!-- </div> -->

            <!-- Tarjeta para radiador motoventilador-->
            <div class="card panel-block sectAuto" style="width: 30rem; height:40rem; margin-left:30px;" data-bs-target="#ModalRadiador">
                <img src="images\radiadores.jpg" class="card-img-top" style="width:300px; height:250px; margin-left:60px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Línea de ensamble radiador-motoventilador y condensador</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Automotriz <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Puebla, Puebla <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> American Plastics <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong>
                        Automatización de línea ensamble final control automático armado de gabinete eléctrico, 
                        instalación, programacion plc y puesta en marcha, control por transductores de presión 
                        y sistema de impresión automático con etiqueta de calidad por código QR. <br>
                        Programación plc 1500 simens. <br>
                        Diseño eléctrico e-plan. 

                    </p>
                </div>
            </div>

            <!-- Tarjeta para Pegado de sellos -->
            <div class="card panel-block sectAuto" style="width: 30rem; height:40rem; margin-left:30px;" data-bs-target="#ModalRadiador">
                <img src="images\sellos.jpg" class="card-img-top" style="width:250px; height:300px; margin-left:100px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Pegado de sellos </h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Automotriz <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Puebla, Puebla <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> American Plastics <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong>
                        Automatización de línea pegado de sellos por control automático, armado de 
                        gabinete eléctrico, instalación, programación plc y puesta en marcha. <br>
                        Control plc 1200 simens. <br>
                        Diseño electrónico e-plan.
                    </p>
                </div>
            </div>

            <!-- <div class="column" style="position: relative"> -->
            <!-- Modal Gabinete eléctrico-->
            <div class="card panel-block sectMet" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalEle">
                <img src="images\gabinete.jpeg" style="width:250px; margin-left:100px">
                <div class="card-body">
                    <h5 class="card-title" style="font-family:'DM Serif Display'">Gabinete eléctrico</h5>
                    <p class="card-text">
                        <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Metalurgico <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Veracruz, Ver <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> Tenaris Tamsa <br>
                        <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong>
                        Diseño mecánico en software solidworks para la elaboración de gabinete
                        eléctrico de línea de producción, Nave 06. <br>
                        Servicio de corte laser para armando de gabinete eléctrico y ensamble de brazo
                        giratorio de la marca RITTAL acorde a las necesidades del cliente.
                    </p>
                </div>
            </div>
            <<!-- /div> -->
                <!-- <div class="column" style="position: relative"> -->
                <!-- Modal GSistema Captación de polvos-->
                <div class="card panel-block construction" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalEle">
                    <img src="images\botesito.jpeg" width="500px">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family:'DM Serif Display'">Sistema Captación de polvos</h5>
                        <p class="card-text">
                            <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Construcción <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Teziutlán Puebla <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> RENPRO Concretos <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong>
                            Diseño de sistema Full jet y armado eléctrico para control Sistema Cantabria,
                            captación de polvos a la atmosfera filtrado mediante 12 filtros especiales para silos
                            de cemento.
                        </p>
                    </div>
                </div>
                <!-- </div>  -->

                <!-- <div class="column"> -->
                <!-- Modal Mesa marinadora de carne-->
                <div class="card panel-block sectAlim" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalEle">
                    <img src="images\maquinaIES.png" width="500px">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family:'DM Serif Display'">Mesa marinadora de carne</h5>
                        <p class="card-text">
                            <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Alimenticio <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Teziutlán,Pue. <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> Instituto de Estudios Superiores <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Diseño de mesa marinadora a necesidades del cliente. Trabajos
                            de pailería en acero inoxidable, toda la periferia del proyecto en grado alimenticio. Servicio de
                            maquinado para agujas especiales con bloque de distribución con maneral para la salida de líquido
                            preparado gastrómicamente.
                        </p>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="column" style="position: relative"> -->
                <!-- Modal Calidad cuarto de curado-->
                <div class="card panel-block construction" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalEle">
                    <img src="images\cuartito.jpeg" style="width:250px; margin-left:100px">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family:'DM Serif Display'">Calidad cuarto de curado</h5>
                        <p class="card-text">
                            <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Construcción <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Teziutlán Puebla <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> RENPRO Concretos <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Automatización de sistema control de temperatura para piletas de concreto
                            mediante pirómetros, termopares, resistencias 5000W y bomba 3/4 HP para
                            flujo de agua a temperatura constante.
                        </p>
                    </div>
                </div>
                <!-- </div> -->

                <!-- <div class="column"> -->
                <!-- Modal Control caldera-->
                <div class="card panel-block sectText" style="width: 30rem; height:40rem; margin-left:30px" data-bs-target="#ModalEle">
                    <img src="images\caldero.png" style="width:250px; height:300px; margin-left:100px">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family:'DM Serif Display'">Control caldera</h5>
                        <p class="card-text">
                            <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Maquilero <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Teziutlán, Pue <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> CONFETEX <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Automatización de caldera con control automático, armado de gabinete eléctrico,
                            instalación, programación PLC y puesta en marcha. <br>
                            Programación PLC 1200 simens. <br>
                            Control por termopar. <br>
                            Diseño eléctrico: EPLAN. <br>
                        </p>
                    </div>
                </div>
                <!-- </div> -->
                <!-- <div class="column is-half" > -->
                <!-- Modal Máquina dispensadora Productos de limpieza-->
                <div class="card panel-block sectQui" style="width: 30rem; height:40rem; margin-left:30px">
                    <img src="images\dispensador.png" style="width:250px; margin-left:100px">
                    <div class="card-body">
                        <h5 class="card-title" style="font-family:'DM Serif Display'">Máquina dispensadora Productos de limpieza</h5>
                        <p class="card-text">
                            <strong style="color: black; font-family:'DM Serif Display'">Sector:</strong> Químico <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Lugar de instalación:</strong> Martínez de la torre <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Cliente:</strong> Abarrotera el Shaddai <br>
                            <strong style="color: black; font-family:'DM Serif Display'">Descripción:</strong> Máquina dispensadora de productos de
                            limpieza, el modo de dispensación es por medio de bombas, flujómetros que
                            detectan cuando dosifica un litro de producto de limpieza, el control
                            electrónico es por medio de Arduino MEGA, carcasa completamente de acero inoxidable.
                        </p>
                    </div>
                </div>
                <!-- </div> -->
        </div>
    </article>
    <br>
</div>
<br>

<script>
    document.addEventListener("DOMContentLoaded", () => {
        const tabs = document.querySelectorAll(".panel-tabs a");
        const blocks = document.querySelectorAll(".panel-block:not(.search-block)");
        const searchInput = document.getElementById("search");

        function filterBlocks() {
            const filter = document.querySelector(".panel-tabs a.is-active").id;
            const searchTerm = searchInput.value.toLowerCase();

            blocks.forEach(block => {
                const matchesFilter = filter === "all" || block.classList.contains(filter);
                const matchesSearch = block.textContent.toLowerCase().includes(searchTerm);

                block.style.display = matchesFilter && matchesSearch ? "block" : "none";
            });
        }

        tabs.forEach(tab => {
            tab.addEventListener("click", () => {
                tabs.forEach(t => t.classList.remove("is-active"));
                tab.classList.add("is-active");
                filterBlocks();
            });
        });

        searchInput.addEventListener("input", filterBlocks);

        // Mostrar todos los bloques al inicio
        document.getElementById("all").click();
    });
</script>
@endsection