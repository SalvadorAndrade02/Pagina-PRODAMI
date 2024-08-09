<x-mail::message>
# Mensaje de postulación para realizar servicio social o residencia profesional

Hola, buen dia, mi nombre es {{ $data['nombre'] }}, alumno de la carrera de
{{ $data['carrera'] }}, perteneciente al {{ $data['universidad'] }}.
Me presento mediante este correo electrónico para hacerle llegar mis datos y dar a 
conocer mis intenciones de querer realizar mi servicio social/residencia profesional en la 
empresa "Prodami Automatizaciones", los datos son los siguientes: <br>

<p><strong>Nombre Completo: </strong>{{ $data['nombre']}}</p>
<p><strong>Correo Electrónico: </strong>{{ $data['correo']}}</p>
<p><strong>Teléfono: </strong>{{ $data['telefono']}}</p>
<p><strong>Universidad de procedencia: </strong>{{ $data['universidad']}}</p>
<p><strong>Carrera: </strong>{{ $data['carrera']}}</p>
<p><strong>Experiencia: </strong>{{ $data['habilidades']}}</p>
<p><strong>CV: </strong></p>


Sin mas que decir, le agradezco.<br>
Atte: <br>
{{ $data['nombre'] }}
</x-mail::message>
