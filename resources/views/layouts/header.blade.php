<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-rounded/css/uicons-bold-rounded.css'>
<header>
    <nav class="navbar navbar-expand-lg navbar-light  fixed-top" style="background-color: #1C2B32;">
        <ul class="nav justify-content-center" style="margin-left: 20px;">
            <li class="nav-item">
                <a href="{{ url('/')}}"><img src="images/logoPRODAMI-LETRAS.png" width="200px" style="margin-left: 20px; margin-top:05px"></a>
            </li>
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="{{ url('/acercaNosotros')}}" style="color: white; font-size:15pt; margin-top: 15px; font-family:'DM Serif Display'">Acerca de Nosotros</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/servicios')}}" style="color:white; font-size:15pt; margin-top: 15px; font-family:'DM Serif Display'">Servicios</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/client_pro')}}" aria-disabled="true" style="color:white; font-size:15pt; margin-top: 15px; font-family:'DM Serif Display'">Clientes</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/vista_bolsa')}}" aria-disabled="true" style="color:white; font-size:15pt; margin-top: 15px; font-family:'DM Serif Display'">Bolsa de trabajo</a>
            </li>
            <li class="nav-item">
                <i id="scrollToFooter" style="font-size: 2em; cursor: pointer; color:white; margin-left: 250px" class="fi fi-br-form"> Contáctanos</i>
            </li>
        </ul>
    </nav>
    <br><br><br>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Incluye Font Awesome para los íconos -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/js/all.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#scrollToFooter').click(function() {
                $('html, body').animate({
                    scrollTop: $("#footer").offset().top
                }, 500); // Ajusta la velocidad del scroll en milisegundos
            });
        });
    </script>
</header>