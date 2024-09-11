@extends('layouts.app')
@section('content')

<img class="animate__animated animate__fadeIn" src="images\bolsa.webp" style="width: 100%; height:100%; position: absolute; filter: brightness(60%);">

<div style="display: flex; justify-content: center; align-items: center; flex-direction: column; position: absolute; width: 100%; height: 70vh;">
    <h1 class="animate__animated animate__backInDown" style="color:white; font-family: 'DM Serif Display';"><strong style="color:white;">Bolsa de Trabajo</strong></h1>
    <h3 class="animate__animated animate__backInDown" style="color:white; text-align:center; font-family: 'DM Serif Display';"><u style="color:white;"><strong style="color:white;">Innovación a tu alcance</strong></u></h3>
</div>
<br>
<section class="hero" style="background-color: #C7C7C7; position: relative; width: 100%; margin-top: 380px">
    <div class="hero-body">
        <p class="title" style="color: black; font-family: 'DM Serif Display'; text-align:center">¿Eres candidato a realizar servicio social o residencia profesional?</p> <br>
        <p class="subtitle" style="color: black; font-family: 'Montserrat'; text-align:center">
            En Prodami, estamos en la busqueda de profesionales que deseen emplear sus
            conocimientos, ofreciendo vacantes para la realización de servicio
            social y practicas profesionales. <br><br>
            Solo tienes que llenar el siguiente formulario, y lo contactaremos lo mas pronto posible.
        </p>
        <br>
        <div class="container">
            <p class="title" style="font-family: 'DM Serif Display'; color:black">Datos de Contacto</p> <br>
            <form class="row g-3" action="{{ route('send.resi') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-6">
                    <p class="control has-icons-left">
                        <input class="input" id="nombre" name="nombre" type="text" placeholder="Nombre Completo" require />
                        <span class="icon is-small is-left">
                            <i class="fas fa-user"></i>
                        </span>
                    </p>
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
                    <p class="title" style="font-family: 'DM Serif Display'; color:black">Datos Educativos</p>
                </div>
                <div class="col-md-6">
                    <p class="control has-icons-left">
                        <input class="input" id="universidad" name="universidad" type="text" placeholder="Universidad de procedencia" require />
                        <span class="icon is-small is-left">
                            <i class="fi fi-ss-graduation-cap"></i>
                        </span>
                    </p>
                </div>
                <div class="col-md-6">
                    <p class="control has-icons-left">
                        <input class="input" id="carrera" name="carrera" type="text" placeholder="Carrera" require />
                        <span class="icon is-small is-left">
                            <i class="fi fi-bs-gears"></i>
                        </span>
                    </p>
                </div>
                <div class="col-12">
                    <div class="control">
                        <p style="color: black; font-family: 'DM Serif Display'" class="title">Experiencia</p>
                        <textarea class="textarea is-focused" id="habilidades" name="habilidades" placeholder="Describa sus experiencias en base a su perfil estudiantil" require></textarea>
                    </div>
                </div>
                <div class="col-12">
                    <p class="title" style="font-family: 'DM Serif Display'; color:black">Documentos</p>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label" style="font-family: 'Montserrat';">Suba su CV en este apartado</label>
                    <input class="form-control" type="file" id="cv" name="cv" require>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </div>
            </form>
        </div>
    </div>
</section>
<br>

@endsection