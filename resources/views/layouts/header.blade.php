<style>
    /* Estilo general para el navbar */
    .navbar {
        display: flex;
        justify-content: left;
        align-items: center;
        background-color: #1C2B32;
        padding: 10px;
    }

    .nav-item img {
        margin-left: 10px;
        width: 200px;
    }

    .nav {
        display: flex;
        justify-content: left;
        align-items: center;
        flex-grow: 1;
    }

    .nav-link {
        color: white;
        font-size: 15pt;
        font-family: 'DM Serif Display';
        text-decoration: none;
        margin-left: 15px;
    }

    .nav-item:last-child {
        margin-left: auto;
        /* Esto empuja el último elemento hacia la derecha */
    }

    /* Estilos para pantallas pequeñas */
    @media (max-width: 768px) {
        .nav {
            flex-direction: column;
            display: none;
            /* Ocultar el menú en móviles inicialmente */
            text-align: center;
        }

        .navbar .toggle-button {
            display: block;
            color: white;
            font-size: 2em;
            cursor: pointer;
        }

        .nav-item {
            margin-top: 15px;
        }

        .nav-item img {
            width: 150px;
            /* Ajustar tamaño del logo en móviles */
        }

        .nav.show {
            display: flex;
            /* Mostrar el menú cuando se haga clic en el botón hamburguesa */
        }
    }

    @media (min-width: 769px) {
        .navbar .toggle-button {
            display: none;
            /* Ocultar el botón hamburguesa en pantallas grandes */
        }
    }
</style>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<header style="width: 100%">
    <nav class="navbar fixed-top">
        <!-- Botón hamburguesa para móviles -->
        <span class="toggle-button" onclick="toggleMenu()">☰</span>

        <!-- Logo -->
        <div class="nav-item">
            <a href="{{ url('/') }}"><img src="images/logoPRODAMI-LETRAS.png" alt="Logo"></a>
        </div>

        <!-- Enlaces de navegación -->
        <ul class="nav">
            <li class="nav-item">
                <a class="nav-link active" href="{{ url('/acercaNosotros') }}">Acerca de Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/servicios') }}">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/client_pro') }}">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/vista_bolsa') }}">Bolsa de trabajo</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/vistaIP') }}">Experiencias</a>
            </li>
            <li class="nav-item" style="margin-left: auto;"> <!-- Agregado margin-left: auto -->
                <i id="scrollToFooter" style="margin-left: auto; cursor: pointer; color:white; font-size:2em" class="fi fi-br-form"> Contáctanos</i>
            </li>
        </ul>
    </nav>

    <br><br><br>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Incluye Font Awesome para los íconos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <script>
        // Función para mostrar/ocultar el menú en móviles
        function toggleMenu() {
            var nav = document.querySelector('.nav');
            nav.classList.toggle('show');
        }

        // Función para hacer scroll a la sección de contacto
        $(document).ready(function() {
            $('#scrollToFooter').click(function() {
                $('html, body').animate({
                    scrollTop: $("#footer").offset().top
                }, 500); // Ajusta la velocidad del scroll en milisegundos
            });
        });
    </script>
</header>