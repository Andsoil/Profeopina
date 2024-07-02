<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('messages.review_list_title') }}</title>
    <link rel="stylesheet" href="/css/listaresenia.css">
</head>
<body>
    @extends('layouts.navbarsinsesion')
    @section('content')
    <div class="contenedor">
        <h1 class="titulo">{{ __('messages.teacher_reviews') }}</h1>
        <div class="lista-resenias">
            <div class="resenia">
                <h3 class="resenia-titulo">{{ __('messages.review_title_1') }}</h3>
                <p class="resenia-autor">{{ __('messages.written_by') }}: {{ __('messages.student_1') }}</p>
                <p class="resenia-texto">{{ __('messages.review_text_1') }}</p>
            </div>
            <div class="resenia">
                <h3 class="resenia-titulo">{{ __('messages.review_title_2') }}</h3>
                <p class="resenia-autor">{{ __('messages.written_by') }}: {{ __('messages.student_2') }}</p>
                <p class="resenia-texto">{{ __('messages.review_text_2') }}</p>
            </div>
            <!-- Añade más reseñas aquí -->
        </div>
        <div class="botones">
            <a href="{{ route('perfil') }}" class="boton">{{ __('messages.back_to_profile') }}</a>
            <a href="{{ route('iniciarsesion') }}" class="boton">{{ __('messages.add_review') }}</a>
        </div>
    </div>
    @endsection
</body>
</html>
