<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/busqueda.css">
</head>
<body>
    @extends('layouts.navbarsinsesion')
    @section('content')
    <h1>Buscar profesor</h1>
    <div class="search-container">
        <input type="text" placeholder="Profesor" class="search-input" onkeydown="search(event)">
    </div>
    <h2>Profesor</h2>
    <div class="resultados">
        <a href="perfil_profesor.html" class="profesor-link">
            <div class="profesor">
                <img src="ruta_de_la_imagen" alt="Foto del Profesor">
                <div class="profesor-info">
                    <div class="profesor-nombre">Nombre del Profesor</div>
                    <div class="profesor-detalles">Detalles adicionales del profesor</div>
                    <!-- Aquí puedes colocar más detalles del profesor -->
                </div>
            </div>
        </a>
    </div>
    
        
    @endsection
</body>
</html>