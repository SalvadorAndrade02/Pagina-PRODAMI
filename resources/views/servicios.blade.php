@extends('layouts.app')
@section('content')

<img class="animate__animated animate__fadeIn" src="images/protada serviicos.jpg" style= "height: 500px; width: 1400px; position: absolute; filter: brightness(50%);">


<!--"width: 1310px; height:500px;-->
<br><br><br><br><br><br><br><br><br>
<h1 class="animate__animated animate__backInDown" style="position: absolute; color:white; margin-left: 560px; font-family: 'DM Serif Display';">Servicios</h1><br><br><br>
<h3 class="animate__animated animate__backInDown" style="position: absolute; color:white; margin-left: 500px; text-align:center; font-family: 'DM Serif Display';"><u><strong>Innovación a tu alcance</strong></u></h3>

<br><br><br><br><br>
<div class="animate__zoomIn container" style="background-color: white; position: relative;">
    <br>
    <h1 style="text-align: center; color:black; font-family: 'DM Serif Display';">Nuestros servicios</h1><br>
    <p style="text-align: center; font-family: 'DM Serif Display'; ">En PRODAMI, ofrecemos una gran variedad de servicios, como los siguientes:</p>
    <div class="container">
        <div class="row">
            <div class="col" style="margin-left: 150px; margin-top:30px; ">
                <a href="/vistaAuto">
                    <img src="images/Auto.jpg" width="300px" alt="Botón Imagen" style="cursor: pointer; border-radius: 50%; position: relative;">
                </a>
            </div>
            <div class="col" style="margin-top:30px;">
                <a href="/vistaPaileria">
                    <img src="images\PSILERIA.jpg" width="300px" alt="Botón Imagen" style="cursor: pointer; border-radius: 50%; position: relative;">
                </a>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col" style="margin-left: 150px; margin-top:30px;">
                <a href="/vistaDM">
                    <img src="images\DM.jpg" width="300px" alt="Botón Imagen" style="cursor: pointer; border-radius: 50%; position: relative;">
                </a>
            </div>
            <div class="col" style="margin-top:30px;">
                <a href="/vistaIE">
                    <img src="images\IE.png" width="300px" alt="Botón Imagen" style="cursor: pointer; border-radius: 50%; position: relative;">
                </a>
            </div>
        </div>
    </div>
    <div class="row">
            <div class="col" style="margin-left: 390px; margin-top:30px;">
                <a href="/vistaIP">
                    <img src="images/integradores.png" width="300px" alt="Botón Imagen" style="cursor: pointer; border-radius: 50%; position: relative;">
                </a>
            </div>
    </div>

    <br><br>
</div>
<br><br>
@endsection