@extends('layouts.app')
@section('content')

<img class="animate__animated animate__fadeIn" src="images/protada serviicos.jpg" height="100%" width="100%" style="position: absolute; filter: brightness(50%);">

<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; position: absolute; width: 100%; height: 70vh;">
    <h1 class="animate__animated animate__backInDown" style="color:white; font-family: 'DM Serif Display';">Servicios</h1>
    <h3 class="animate__animated animate__backInDown" style="color:white; text-align:center; font-family: 'DM Serif Display';"><u style="color:white;"><strong style="color:white;">Innovación a tu alcance</strong></u></h3>
</div>
<br>
<div class="animate__zoomIn container" style="background-color: white; position: relative; width: 100%; margin-top: 380px">
    <br>
    <h1 style="text-align: center; color:black; font-family: 'DM Serif Display';">Nuestros servicios</h1><br>
    <p style="text-align: center; font-family: 'DM Serif Display'; ">En PRODAMI, ofrecemos una gran variedad de servicios, como los siguientes:</p>
    <div class="container">
        <div class="row">
            <div class="col" style="margin-left: 150px; margin-top:30px; ">
                <a href="/vistaAuto">
                    <img src="images\Auto.png" width="300px" alt="Botón Imagen" style="cursor: pointer; border-radius: 50%; position: relative;">
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
                    <img src="images\DM.png" width="300px" alt="Botón Imagen" style="cursor: pointer; border-radius: 50%; position: relative;">
                </a>
            </div>
            <div class="col" style="margin-top:30px;">
                <a href="/vistaIE">
                    <img src="images\IE.png" width="300px" alt="Botón Imagen" style="cursor: pointer; border-radius: 50%; position: relative;">
                </a>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col" style="margin-left: 150px; margin-top:30px;">
                <a href="/vistaIP">
                    <img src="images/integradores.png" width="300px" alt="Botón Imagen" style="cursor: pointer; border-radius: 50%; position: relative;">
                </a>
            </div>
            <div class="col" style="margin-top:30px;">
                <a href="/vistaRobotica">
                    <img src="images\robotica.png" width="300px" alt="Botón Imagen" style="cursor: pointer; border-radius: 50%; position: relative;">
                </a>
            </div>
        </div>
    </div>
    <br><br>
</div>
<br><br>
@endsection