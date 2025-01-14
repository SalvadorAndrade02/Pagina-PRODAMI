@extends('layouts.app')
@section('content')

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

<img class="animate__animated animate__fadeIn" src="images/DiseñoMecanico.jpg" style="width:100%; height:100%;position: absolute;">
<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; position: absolute; width: 100%; height: 70vh;">
    <h1 class="animate__animated animate__backInDown"><span style="color:white; font-family: 'DM Serif Display';" class="badge text-bg center">Diseño Mecánico</span></h1>
    <h3 class="animate__animated animate__backInDown" style="color:white; text-align:center; font-family: 'DM Serif Display';"><u style="color: white"><strong style="color:white">Innovación a tu alcance</strong></u></h3>
</div>
<br>
<div class="container" style="background-color: white; position: relative; width: 100%; margin-top: 380px"><br>
    <h1 style="text-align: center; font-family: 'DM Serif Display';">¿Qué es?</h1>
    <div class="container mt-5" style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
        <div class="columns" style="display: flex; align-items: center; flex-wrap: wrap; width: 100%;">
            <div class="column image-column" style="display: flex; justify-content: center; align-items: center; width: 50%;">
                <img src="images/que es.webp" style="max-width: 100%; height: auto;">
            </div>
            <div class="column"> <br>
                <p style="font-family: 'Montserrat';">
                    Es una disciplina de la ingeniería que se centra en el análisis, desarrollo y optimización
                    de componentes y sistemas mecánicos. <br>
                    Involucra la aplicación de principios de la física y la ciencia de materiales para
                    crear soluciones prácticas y eficientes a problemas específicos. Es aquí donde se le da
                    vida a los proyectos, donde el análisis se emplea y la planeación se lleva a cabo.
                </p>
                <br>
            </div>
        </div>
    </div>
    <br><br><br><br>
</div>


<hr>
<section class="hero" style="background-color: #C7C7C7; position: relative; text-align:center">
    <div class="hero-body">
        <p class="title" style="color: black; font-family: 'DM Serif Display'">Servicios del Diseño Mecanico</p><br>
        <p class="subtitle" style="color: black; font-family: 'Montserrat'">También, derivado del diseño mecánico, ponemos en uso los siguientes servicios:</p>
    </div>
</section>
<br>
<div class="container">
    <h2 style="text-align: center; font-family: 'DM Serif Display';">Diseño Asistido por computadora (CAD)</h2> <br>
    <div class="container mt-5" style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
        <div class="columns" style="display: flex; align-items: center; flex-wrap: wrap; width: 100%;">
            <div class="column image-column" style="display: flex; justify-content: center; align-items: center; width: 50%;">
                <img src="images/Diseño-asistido-por-computador.jpg" style="max-width: 100%; height: auto;">
            </div>
            <div class="column">
                <br><br><br>
                <p style="font-family: 'Montserrat'; font-size:large">
                    El Diseño Asistido por Computadora (CAD) es una tecnología que utiliza software para crear,
                    modificar, analizar y optimizar un diseño. <br>
                    Empleamos CAD orientado al diseño industrial para asi, poder proporcionar representaciones
                    digitales precisas de objetos y sistemas. <br></p> <br>
            </div>
        </div> <br>
    </div>


    <hr>
    <p style="text-align: center; font-family: 'Montserrat';">Asi mismo, nos especializamos en diversos servicios, los cuales van de la mano con el Diseño Mecanico, los cuales son los siguientes:</p><br>
    <div class="accordion accordion-flush alert alert-warning" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOneCAD" aria-expanded="false" aria-controls="flush-collapseOne">
                    El diseño CAD
                </button>
            </h2>
            <div id="flush-collapseOneCAD" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" style="font-family: 'Montserrat';">
                    Es aquí donde, usando software como CATIA y SolidWorks, se crean los diseños CAD
                    asistidos por computadora, diseñando esquemas y dando forma digital a los proyectos.
                    Posteriormente, se obtienen las medidas y dimensiones correspondientes de los objetos
                    o sistemas que se pretenden crear, ya sea en modelos 2D o 3D. <br><br>
                </div>
                <div class="columns is-mobile is-centered">
                    <div class="column is-half">
                        <img src="images/catia.png" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwoCAD" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Prototipado rapido
                </button>
            </h2>
            <div id="flush-collapseTwoCAD" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" style="font-family: 'Montserrat';">
                    De la mano del diseño asistido por computadora, realizamos de forma rápida modelos
                    físicos a escala de un componente o ensamblaje utilizando datos tridimensionales. <br>
                    Esta técnica es de gran ayuda, ya que facilita a nuestros trabajadores el desarrollo
                    de productos de una forma más sencilla y rápida. <br>
                    Software como AutoCAD es el que utilizamos para emplear esta técnica.
                </div>
                <div class="columns is-mobile is-centered">
                    <div class="column is-half">
                        <img src="images/autoCAD.webp" style="max-width: 100%; height: auto;">
                    </div>
                </div>

            </div><br>
        </div>
    </div>
    <br>
</div>

<hr>

<br>
<div class="container">
    <h2 style="margin-left:40px; font-family: 'DM Serif Display';">Fabricación asistida por computadora (CAM)</h2>
    <div class="container mt-5" style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
        <div class="column" style="display: flex; align-items: center; flex-wrap: wrap; width: 100%;">
            <p style="font-family: 'Montserrat'; font-size:large">
                Empleamos la fabricación asistida por computadora para construir herramientas y
                maquinaria en la fabricación de piezas y productos, y así automatizar y optimizar
                la producción, asegurando precisión, eficiencia y consistencia en la manufactura.<br>
                <br>
            </p>
        </div>
        <div class="column image-column" style="display: flex; justify-content: center; align-items: center; width: 50%;">
            <img src="images/CAM.jpg">
        </div>
    </div> <br>
    <p style="text-align: center; font-family: 'Montserrat';">Algunos de los servicios que ofrecemos basados en la fabricación asistida por computadora son los siguientes:</p><br>
    <div class="accordion accordion-flush alert alert-warning" id="accordionFlushExample">
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Importación de modelo CAD
                </button>
            </h2>
            <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">
                    <br>
                    <p style="font-family: 'Montserrat';">
                        Una vez realizado el modelo CAD, se procede a exportarlo e importarlo en algún
                        sistema enfocado en el modelo de fabricación asistida por computadora (CAM). <br>
                        Inkscape es uno de los softwares a nuestra disposición para el proceso CAM.
                    </p><br>
                </div>
                <div class="columns is-mobile is-centered">
                    <div class="column is-half">
                        <img src="images/Inkscape.jpg" style="max-width: 100%; height: auto;"> <br>
                    </div>
                </div>

            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Maquinado CNC
                </button>
            </h2>
            <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" >
                    <br>
                    <p style="font-family: 'Montserrat';">
                        Nosotros empleamos el maquinado CNC para lograr alta precisión, eficiencia y
                        flexibilidad en la producción de piezas, asegurando que los productos cumplan
                        con los estándares más exigentes de nuestra empresa y las necesidades de nuestros
                        clientes. <br>
                        Aspire es un software que trabaja con una amplia variedad de funciones,
                        haciéndolo una herramienta valiosa para el maquinado CNC y nuestra eficiencia.
                    </p>
                </div>
                <div class="columns is-mobile is-centered">
                    <div class="column is-half">
                        <img src="images/Aspire.jpg" style="max-width: 100%; height: auto;"> 
                    </div>
                </div>

            </div>
        </div>
        <div class="accordion-item">
            <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo1" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Corte laser
                </button>
            </h2>
            <div id="flush-collapseTwo1" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body" style="font-family: 'Montserrat';">
                    Con el uso de nuestro corte láser, obtenemos resultados eficientes y precisos al realizar
                    cortes en materiales, lo que nos permite ofrecer materiales, prototipos, etc., de una
                    mejor calidad.
                </div>
                <div class="columns is-mobile is-centered">
                    <div class="column is-half">
                        <img src="images/corteLser.jpg" style="max-width: 100%; height: auto;">
                    </div>
                </div>
            </div><br>
        </div>
    </div>
    <br>
</div>

<hr>

<div class="container">
    <h2 style="text-align: center; font-family: 'DM Serif Display';">Mantenimiento Industrial</h2>
    <div class="container mt-5" style="display: flex; justify-content: space-around; align-items: center; flex-wrap: wrap;">
        <div class="column image-column" style="display: flex; justify-content: center; align-items: center; width: 50%;">
            <img src="images/Diseño-asistido-por-computador.jpg" style="max-width: 100%; height: auto;">
        </div>
        <br>
        <div class="column">
            <p style="font-family: 'Montserrat';">
                Dentro de nuestros servicios, empleamos el mantenimiento constante de nuestras herramientas
                y equipos para prolongar su vida útil y seguir brindando un servicio de calidad y eficiencia.
                Además, evitamos fallos a corto y largo plazo, ofreciendo los siguientes mantenimientos:
                <li style="font-family: 'Montserrat';">Mantenimiento Preventivo</li>
                <li style="font-family: 'Montserrat';">Mantenimiento Correctivo</li>
                <li style="font-family: 'Montserrat';">Mantenimiento Predictivo</li>
                <li style="font-family: 'Montserrat';">Mantenimiento Proactivo</li>
                <li style="font-family: 'Montserrat';">Mantenimiento Autónomo</li>
            </p> <br>
        </div>
    </div> <br>
</div>
<br><br>
@endsection