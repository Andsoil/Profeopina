<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Lista de Reseñas</title>
    <link rel="stylesheet" href="/css/listaresenia.css">
</head>
<body>
    @extends('layouts.navbarsinsesion')
    @section('content')
    <div class="contenedor">
        <h1 class="titulo">Reseñas del Profesor</h1>
        <div class="lista-resenias">
            <div class="resenia">
                <h3 class="resenia-titulo">Gran Profesor</h3>
                <p class="resenia-autor">Escrito por: Estudiante 1</p>
                <p class="resenia-texto">La metodología es clara y concisa, con ejemplos prácticos que facilitan el aprendizaje...</p>
            </div>
            <div class="resenia">
                <h3 class="resenia-titulo">Excelente Explicación</h3>
                <p class="resenia-autor">Escrito por: Estudiante 2</p>
                <p class="resenia-texto">El profesor explica de manera detallada y resuelve todas las dudas...</p>
            </div>
            <!-- Añade más reseñas aquí -->
        </div>
        <div class="botones">
            <a href="{{ route('perfil') }}" class="boton">Volver al perfil</a>
            <a href="{{ route('iniciarsesion') }}" class="boton">Añadir Reseña</a>
        </div>
    </div>
    @endsection
</body>
</html>