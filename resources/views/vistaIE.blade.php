@extends('layouts.app')
@section('content')
<img class="animate__animated animate__fadeIn" src="images/electrica.jpg" height="100%" width="100%" style="position: absolute; filter: brightness(80%);">

<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; position: absolute; width: 100%; height: 100vh;">
    <h1 class="animate__animated animate__backInDown" style="color:white; font-family: 'DM Serif Display'"><strong>Ingeniería Eléctrica</strong></h1>
    <h3 class="animate__animated animate__backInDown" style="color:white; text-align:center; font-family: 'Montserrat';"><u><strong>Innovación a tu alcance</strong></u></h3>
</div>
<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="container" style="background-color: white; position: relative;">
    <h1 style="text-align: center; font-family: 'DM Serif Display';">¿Qué es?</h1> <br>
    <div class="row row-cols-2">
        <div class="col">
            <img src="images/Electronica.jpg" width="500px" style="margin-left:10px">
        </div>
        <div class="col"> <br><br><br>
            <p style="font-family: 'Monstserrat';">
                Dentro del desarrollo de proyectos, interviene el uso de la ingeniería
                eléctrica para el desarrollo de circuitos eléctricos con ayuda de
                software de diseño y programación, logrando así una automatización
                precisa y eficiente. <br>
                Asimismo, se controlan los flujos de corriente de manera correcta
                para evitar fallos en cuestión de corriente y amperaje.
            </p>
            <br>
        </div>
    </div>
    <br><br>
</div>
<section class="hero" style="background-color: #C7C7C7; position: relative; text-align:center">
    <div class="hero-body">
        <p class="title" style="color: black; font-family: 'DM Serif Display';">Tecnologia e ingeniería eléctrica</p><br>
        <p class="subtitle" style="color: black; font-family: 'Monstserrat';">
            En Prodami, contamos con una variedad de software, los cuales son de gran ayuda para el
            empleo de la ingeniería eléctrica, tales como:
            </h3>
        </p>
    </div>
</section>
<br>

<section class="hero" style="background-color: #1C2B32;">
    <div class="hero-body">
        <div class="columns">
            <div class="column">
                <p class="title" style="font-family: 'DM Serif Display';">E-Plan Electric P8</p> <br>
                <p class="subtitle" style="color: white; font-family: 'Montserrat'">
                    E-Plan Electric P8 es un software que nos ayuda en el desarrollo y
                    documentación de nuestros proyectos que involucren la ingeniería eléctrica,
                    diseñando y desarrollando esquemas eléctricos.
                </p>
            </div>
            <div class="column">
                <img src="images\eplan.png" width="400px" style="margin-left:10px">
            </div>
        </div>
    </div>
    <hr style="color: white;">
    <div class="hero-body">
        <div class="columns">
            <div class="column">
                <img src="images/proteus.jpg" width="300px" style="margin-right:0px">
            </div>
            <div class="column">
                <p class="title" style="font-family: 'DM Serif Display';">Proteus</p> <br>
                <p class="subtitle" style="color: white; font-family: 'Montserrat';">
                    Proteus es un software potente y útil, ya que en él desarrollamos circuitos electrónicos,
                    teniendo la capacidad de simular el funcionamiento de dichos circuitos. Posteriormente,
                    se desarrolla el prototipo de PCB, el cual puede ser impreso en placas fenólicas.
                </p>

            </div>
        </div>
    </div>
    <hr style="color: white;">
    <div class="hero-body">
        <div class="columns">
            <div class="column">
                <p class="title" style="font-family: 'DM Serif Display';">SolidWorks Electrical</p> <br>
                <p class="subtitle" style="color: white; font-family: 'Montserrat';">
                    A diferencia de la versión normal de SolidWorks, esta variante del software se basa
                    principalmente en el desarrollo electrónico, el diseño de circuitos y la documentación
                    de sistemas eléctricos.
                </p>
            </div>
            <div class="column">
                <br>
                <img src="images\solid.png" width="300px" style="margin-left:200px">
            </div>
        </div>
    </div>
</section>
</div>
<br><br>
@endsection