<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ __('messages.document_title') }}</title>
    <link rel="stylesheet" href="/css/perfil_profe.css">
    <script src="/js/aniadir_resenia.js"></script>
</head>
<body>
    @extends('layouts.navbarsinsesion')
    @section('content')
    <div class="container">
        
        <div class="profesor-perfil">
            <button id="btn-guardar" class="btn-guardar" onclick="cambiarImagen()">
                <img id="icono-guardar" src="/imagenes/singuardar.png" alt="{{ __('messages.save') }}">
            </button>
            <!-- Primera Parte: Foto, Nombre, Ciudad, Colegio -->
            <div class="profesor-info">
                <img src="/imagenes/profe.jpg" alt="{{ __('messages.teacher_photo') }}" class="profesor-foto">
                <h1 class="profesor-nombre">{{ __('messages.teacher_name') }}</h1>
                <p class="profesor-ciudad">{{ __('messages.teacher_city') }}</p>
                <p class="profesor-colegio">{{ __('messages.teacher_school') }}</p>
            </div>
            
            <!-- Segunda Parte: Etiquetas Destacadas -->
            <div class="etiquetas-destacadas">
                <h2>{{ __('messages.featured_tags') }}</h2>
                <div class="etiquetas">
                    <div class="etiqueta">{{ __('messages.empathic') }}</div>
                    <div class="etiqueta">{{ __('messages.clear_understanding') }}</div>
                    <div class="etiqueta">{{ __('messages.organized') }}</div>
                    <!-- Añade más etiquetas si es necesario -->
                </div>
            </div>
            <!-- Tercera Parte: Según los reviews -->
            <div class="segun-reviews">
                <h2>{{ __('messages.according_to_reviews') }}</h2>
                <ul>
                    <li>{{ __('messages.methodology_rating') }}: <span class="azul">4/5</span></li>
                    <li>{{ __('messages.course_difficulty') }}: <span class="azul">{{ __('messages.easy') }}</span></li>
                    <li>{{ __('messages.perceived_learning') }}: <span class="azul">{{ __('messages.more_than_expected') }}</span></li>
                    <li>{{ __('messages.would_choose_again') }} <span class="azul">80%</span></li>
                    <li>{{ __('messages.takes_attendance') }} <span class="azul">25%</span></li>
                </ul>
            </div>
            <!-- Cuarta Parte: Botones -->
            <div class="botones">
                <a href="{{ route('listaresenia') }}" class="boton">{{ __('messages.view_reviews') }}</a>
                <a href="{{ route('iniciarsesion') }}" class="boton">{{ __('messages.add_review') }}</a>
            </div>
            <!-- Quinta Parte: Enlace -->
            <div class="enlace-profesor">
                <a href="ruta_a_la_vista_del_profesor" class="enlace-texto">{{ __('messages.are_you_the_teacher') }}</a>
            </div>
        </div>
    </div>
    @endsection
</body>
</html>
