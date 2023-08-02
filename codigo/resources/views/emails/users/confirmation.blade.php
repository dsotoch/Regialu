<x-mail::message>
# Instrucciones

Felicitaciones!...Se ha Generado Correctamente una nueva contraseña : {{$password}}

<x-mail::button :url="'http://regialusit.viru-tec.com/Login/IniciarSesion'">
Confirmar Nueva Contraseña
</x-mail::button>

Muchas Gracias,<br>
{{ config('app.name') }}
</x-mail::message>
