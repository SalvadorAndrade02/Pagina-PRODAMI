<x-mail::message>
# Mensaje de Cotizacion

Hola, buen dia, me interesa cotizar lo siguiente.

<p><strong>Nombre o Razón Social: </strong>{{ $data['nomRazSoc']}}</p>
<p><strong>RFC: </strong>{{ $data['rfc']}}</p>
<p><strong>Correo Electrónico: </strong>{{ $data['correo']}}</p>
<p><strong>Teléfono: </strong>{{ $data['telefono']}}</p>
<p><strong>Descripción de la petición: </strong>{{ $data['descripcion']}}</p>

Sin mas que decir, le agradezco.<br>
Atte: <br>
{{ $data['nomRazSoc'] }}
</x-mail::message>
