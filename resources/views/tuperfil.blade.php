<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/tuperfil.css">
    <title>Document</title>
</head>
<body>
    @extends('layouts.navbarconsesion')
    @section('content')
    <div class="container mt-5">
        <!-- Saludo al usuario -->
        <h1 class="display-4">Hola,</h1>
        <p class="lead">Perfil</p>
        <hr class="my-4">
    
        <!-- Detalles del perfil -->
        <div class="profile-details mt-4">
            <p><strong>Nombre:</strong> </p>
            <p><strong>Apellido:</strong> </p>
            <p><strong>Institución:</strong> </p>
            <p><strong>Año Previsto de Graduación:</strong> </p>
        </div>
    
    </div>
    @endsection
</body>
</html>