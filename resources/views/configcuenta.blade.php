<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/configcuenta.css">
    <title>Configuraciones de la Cuenta</title>
</head>
<body>
    @extends('layouts.logueado')
    @section('titulo','Configuraciones de la cuenta')
    @section('contenido')
        
            <p><strong>Correo electrónico:</strong></p>
            <p><strong>Contraseña:</strong></p>
            <a href="#" class="editar">
                <i class="fas fa-pencil-alt"></i> <strong>Editar</strong>
            </a>
        
    @endsection
</body>
</html>
