@component('mail::message')
# Bienvenido a mi introducción de los emails

Gracias por venir.

@component('mail::button', ['url' => 'https:://www.sff-cgt.org'])
Visitanos
@endcomponent

Gracias,<br>
{{ config('app.name') }}
@endcomponent
