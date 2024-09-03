<style>
    .img-container {
        display: flex;
        justify-content: space-around;
    }

    .collapse-container {
        display: flex;
        justify-content: space-around;
    }

    .collapse-container>.collapse {
        flex: 1;
        margin: 0 10px;
    }
</style>
@extends('layouts.app')
@section('content')

<img class="animate__animated animate__fadeIn" src="images/AcercaNosotros.jpg" style="width: 1310px; height:500px; position: absolute; filter: brightness(60%);">
<br><br><br><br><br><br><br><br>
<h1 class="animate__animated animate__backInDown" style="position: absolute; color:white; margin-left: 500px; font-family: 'DM Serif Display';"><strong>Acerca de Nosotros</strong></h1><br><br>
<h3 class="animate__animated animate__backInDown" style="position: absolute; color:white; margin-left: 530px; text-align:center; font-family: 'DM Serif Display';"><u><strong>Innovación a tu alcance</strong></u></h3>

<br><br><br><br><br><br><br>

<div class="animate__animated animate__backInUp container" style="background-color: white; position: relative;">
    <br>
    <h1 style="text-align: center; font-family: 'DM Serif Display';"><u>¿Quiénes somos?</u></h1> <br>
    <p style="font-size: 20px; margin-left: 5%; margin-right: 5%; font-family: 'DM Serif Display';">Somos una empresa seria, responsable y comprometida, ubicada en Teziutlán, Puebla; que se especializa en ofrecer servicios de ingeniería basados en tecnologías asistidas por computadoras y caracterizada por la innovación de ideas vanguardistas de quienes la conformamos. <br><br>

        Nuestro personal capacitado ofrece diseño, desarrollo, implementación y puesta en marcha de sus procesos, así como adaptación a sus necesidades, tiempo y recursos con los que ustedes cuenten. <br><br>

        Nuestra oferta de trabajo se centra en la utilidad para el crecimiento de su compañía, con gusto apoyamos a empresas de cualquier sector y estaremos dispuestos en ofrecerles la mejor opción.</p> <br>
</div>
<br>
<br>
<h2 style="text-align: center; color: black; font-family: 'DM Serif Display';">En PRODAMI, nuestra planificación estrategica esta conformada por: </h2>
<br>
<div class="animate__zoomIn container" style="background-color: white;">
    <br>
    <div class="container mt-5">
        <div class="img-container">
            <img src="images/mision.jpg" height="200px" width="200px" alt="Collapse Image" class="img-fluid" data-bs-toggle="collapse" data-bs-target="#collapseContent" aria-expanded="false" aria-controls="collapseContent">
            <img src="images/vision.jpg" height="200px" width="200px" alt="Collapse Image" class="img-fluid" data-bs-toggle="collapse" data-bs-target="#collapseContent2" aria-expanded="false" aria-controls="collapseContent2">
            <img src="images/valores.jpg" height="200px" width="200px" alt="Collapse Image" class="img-fluid" data-bs-toggle="collapse" data-bs-target="#collapseContent3" aria-expanded="false" aria-controls="collapseContent3">
        </div>
        <div class="collapse-container mt-3">
            <div class="collapse" id="collapseContent">
                <div class="card card-body">
                    <h3 style=" font-family: 'DM Serif Display';">Nuestra Misión</h3>
                    PRODAMI Automatizaciones es una empresa que reconoce la importancia y necesidades de los tiempos actuales y futuros sobre el sector industrial. Por lo tanto, estamos comprometidos con nuestros clientes para satisfacer sus necesidades y de esta manera lograr que mejoren sus servicios.
                </div>
            </div>
            <div class="collapse" id="collapseContent2">
                <div class="card card-body">
                    <h3 style="font-family: 'DM Serif Display';">Nuestra Visión</h3>
                    Ser una empresa reconocida a nivel nacional como líder en soluciones industriales a través de tecnologías innovadoras. También deseamos que nuestros colaboradores perciban a la empresa como un lugar extraordinario para laborar y de esta manera, garantizar el mejor servicio y atención para nuestros clientes y proveedores.
                </div>
            </div>
            <div class="collapse" id="collapseContent3">
                <div class="card card-body" style="text-align: left;">
                    <p style="font-family: 'DM Serif Display';">Nuestra oferta laboral se fundamenta en los siguientes valores:</p><br>
                    <ul>
                        <li style="font-family: 'DM Serif Display';">Excelencia</li>
                        <li style="font-family: 'DM Serif Display';">Liderazgo</li>
                        <li style="font-family: 'DM Serif Display';">Responsabilidad</li>
                        <li style="font-family: 'DM Serif Display';">Lealtad</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <br>
</div>

<hr>

<div class="animate__zoomIn container" style="background-color: white;">
    <br>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="images/ImagenChida.png" width="330px" height="200px">
            </div>
            <div class="col-8">
                <h2 style="margin-left: 10px; font-family: 'DM Serif Display';">Innovación a tu alcance</h2>
                <p style="font-size:20px; margin-left: 10px; font-family: 'DM Serif Display';">Nuestra prioridad es la de poner las
                    últimas tecnologías y soluciones avanzadas al servicio de nuestros
                    clientes, sin importar el tamaño de su negocio. <br>
                    Nos esforzamos por ofrecer un libre acceso a herramientas innovadoras,
                    asegurando que todos puedan beneficiarse de los avances tecnológicos
                    para mejorar su eficiencia, productividad y competitividad.
                </p>
                </p>
            </div>
        </div>
    </div><br><br>
    <hr>

    <h3 style="text-align: center; font-family: 'DM Serif Display';">Tambien somos distribuidores autorizados de:</h3><br>
    <div class="container" style="background-color: white;">
        <br>
        <img src="images/cyber.png" style="margin-left: 100px;">
        <img src="images/Rice.png" style="margin-left: 100px">
        <img src="images\shnider.jpg" style="margin-left: 100px" width="200px"><br><br>
        <a href="https://cybermatics.com.mx/es/">
            <h6 style="margin-left: 110px; font-family: 'DM Serif Display';"><strong>CYBERMATICS S.A de C.V</strong>
        </a> <a href="https://www.ricelake.com/es/"><strong style="margin-left: 100px;">RICE LAKE WEIGHING SYSTEM</strong></a>
        <a href="https://www.se.com/mx/es/"><strong style="margin-left: 100px;">SCHNEIDER ELECTRIC</strong></a></h6> <br>
    </div>
    <br>
</div><br>

@endsection

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>