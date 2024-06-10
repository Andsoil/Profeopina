<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/perfil_profe.css">
    <script src="/js/aniadir_resenia.js"></script>
</head>
<body>
    @extends('layouts.navbarsinsesion')
    @section('content')
    <div class="container">
        
        <div class="profesor-perfil">
            <button id="btn-guardar" class="btn-guardar" onclick="cambiarImagen()">
                <img id="icono-guardar" src="/imagenes/singuardar.png" alt="Guardar">
            </button>
            <!-- Primera Parte: Foto, Nombre, Ciudad, Colegio -->
            <div class="profesor-info">
                <img src="/imagenes/profe.jpg" alt="Foto del Profesor" class="profesor-foto">
                <h1 class="profesor-nombre">Nombre del Profesor</h1>
                <p class="profesor-ciudad">Ciudad del Profesor</p>
                <p class="profesor-colegio">Colegio del Profesor</p>
            </div>
            
            <!-- Segunda Parte: Etiquetas Destacadas -->
            <div class="etiquetas-destacadas">
                <h2>Etiquetas Destacadas</h2>
                <div class="etiquetas">
                    <div class="etiqueta">Empático</div>
                    <div class="etiqueta">Entendimiento claro</div>
                    <div class="etiqueta">Organizado</div>
                    <!-- Añade más etiquetas si es necesario -->
                </div>
            </div>
            <!-- Tercera Parte: Según los reviews -->
            <div class="segun-reviews">
             <h2>Según los reviews:</h2>
                <ul>
                    <li>La metodología es de: <span class="azul">4/5</span></li>
                    <li>La dificultad del curso es: <span class="azul">Fácil</span></li>
                    <li>El aprendizaje percibido es: <span class="azul">Más de lo que esperaba</span></li>
                    <li>El <span class="azul">80%</span> escogería de nuevo al profesor</li>
                    <li>El <span class="azul">25%</span> dice que toma asistencia</li>
                </ul>
            
            </div>
            <!-- Cuarta Parte: Botones -->
            <div class="botones">
                <button class="boton">Ver reseñas</button>
                <a href="{{ route('iniciarsesion') }}" class="boton">Añadir reseña</a>
            </div>
            <!-- Quinta Parte: Enlace -->
            <div class="enlace-profesor">
                <a href="ruta_a_la_vista_del_profesor" class="enlace-texto">¿Eres el profesor?</a>
            </div>
    </div>
    
    @endsection
</body>
</html>