<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/configcuenta.css">
    <title>{{ __('messages.profile') }}</title>
</head>
<body>
    @extends('layouts.logueado')
    @section('titulo', __('messages.profile'))
    @section('contenido')
        <p><strong>{{ __('messages.name') }}:</strong> </p>
        <p><strong>{{ __('messages.lastname') }}:</strong> </p>
        <p><strong>{{ __('messages.institution') }}:</strong> </p>
        <p><strong>{{ __('messages.graduation_year') }}:</strong> </p>
        <a href="#" class="editar">
            <i class="fas fa-pencil-alt"></i> <strong>{{ __('messages.edit') }}</strong>
        </a>
    @endsection
</body>
</html>
