<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-solid-rounded/css/uicons-solid-rounded.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-solid-straight/css/uicons-solid-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-bold-straight/css/uicons-bold-straight.css'>
<link rel='stylesheet' href='https://cdn-uicons.flaticon.com/2.4.2/uicons-brands/css/uicons-brands.css'>

<footer id="footer" style="width: 100%; position: relative;">
    <img src="images/fondito.jpg" style="position: absolute; width:100%; height:100%; object-fit: cover;">
    <br>
    <div class="container" style="position: relative; display: flex; justify-content: space-between; align-items: flex-start; width: 100%; flex-wrap: wrap;">

        <!-- Dirección: Alineado a la izquierda -->
        <div class="footer-section" style="text-align: left; flex: 1; min-width: 250px; margin-bottom: 20px;">
            <h3 style="color: white; font-family:'DM Serif Display'; margin-bottom: 10px;">Dirección:</h3>

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3753.5699898893354!2d-97.36100079036868!3d19.815821328256327!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x85daebbefc717037%3A0x90a605ef8969eee4!2sProdami%20Automatizaciones!5e0!3m2!1ses-419!2smx!4v1718652213195!5m2!1ses-419!2smx"
                width="100%" height="150" style="border:0; margin-top:10px;" allowfullscreen="" loading="lazy"></iframe>

            <br><br>

            <span class="panel-icon" style="color: #DFA103; font-size:20px;">
                <i class="fi fi-sr-marker"></i>
            </span>

            <span style="color: white; font-family:'Montserrat'; font-size:16px; display: inline-block; vertical-align: middle;">
                Calle Zaragoza #614 Col. Centro. <br>
                Teziutlán, Puebla. C. P. 73800
            </span>
        </div>

        <!-- Contacto: Alineado al centro -->
        <div class="footer-section" style="text-align: center; flex: 1; min-width: 250px; margin-bottom: 20px;">
            <h3 style="color: white; font-family:'DM Serif Display';">Contacto:</h3>
            <br>
            <span class="panel-icon" style="color: #DFA103; font-size:20px;">
                <i class="fi fi-ss-envelope"></i>
            </span>
            <span style="color: white; font-size:16px; font-family:'Montserrat'; display: inline-block;">
                prodami.ingenieria@gmail.com
            </span>
            <br><br>
            <span class="panel-icon" style="color: #DFA103; font-size:20px;">
                <i class="fi fi-ss-envelope"></i>
            </span>
            <span style="color: white; font-size:16px; font-family:'Montserrat'; display: inline-block;">
                prodami.control@gmail.com
            </span>
            <br><br>
            <span class="panel-icon" style="color: #DFA103; font-size:20px;">
                <i class="fi fi-bs-smartphone"></i>
            </span>
            <span style="color: white; font-size:16px; font-family:'Montserrat'; display: inline-block;">
                231-122-5358 / 222-563-9508
            </span>
        </div>

        <!-- Redes Sociales: Alineado a la derecha -->
        <div class="footer-section" style="text-align: right; flex: 1; min-width: 250px; margin-bottom: 20px;">
            <h3 style="color: white; font-family:'DM Serif Display';">Redes Sociales:</h3>
            <br>
            <span class="panel-icon" style="color: #DFA103; font-size:20px;">
                <i class="fi fi-brands-whatsapp"></i>
            </span>
            <a data-bs-toggle="modal" data-bs-target="#exampleModal"><span style="color: white; font-size:16px; font-family:'Montserrat';">
                    231-174-7406
                </span></a>

            <br><br>
            <span class="panel-icon" style="color: #DFA103; font-size:20px;">
                <i class="fi fi-brands-linkedin"></i>
            </span>
            <a href="https://www.linkedin.com/company/prodami-undefined-840033318/"><span style="color: white; font-size:16px; font-family:'Montserrat';">
                    PRODAMI Automatizaciones
                </span></a>
            <br><br>
            <span class="panel-icon" style="color: #DFA103; font-size:20px;">
                <i class="fi fi-brands-facebook"></i>
            </span>
            <a href="https://www.facebook.com/gabo.prodami.5?locale=es_LA"><span style="color: white; font-size:16px; font-family:'Montserrat';">
                    Prodami Automatizaciones
                </span></a>
            <br><br>
            <span class="panel-icon" style="color: #DFA103; font-size:20px;">
                <i class="fi fi-brands-instagram"></i>
            </span>
            <a href="https://www.instagram.com/prodamiautomatizaciones/"><span style="color: white; font-size:16px; font-family:'Montserrat';">
                    Automatizaciones_prodami
                </span></a>
        </div>
    </div>

    <p style="color:white; text-align: center; margin-top: 20px;">&copy; {{ date('Y') }} PRODAMI Automatizaciones. Todos los derechos reservados.</p>
</footer>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Escanee el codigo</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <h3>Escanee el codigo con la camara dentro de la aplicación de whatsapp.</h3>
                <img src="images\codigoQR.jpg" alt="qr">
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

<!-- Media Queries for Responsiveness -->
<style>
    @media screen and (max-width: 768px) {
        .container {
            flex-direction: column;
            align-items: center;
        }

        .footer-section {
            text-align: center;
            margin-bottom: 20px;
        }

        iframe {
            height: 200px;
        }
    }
</style>