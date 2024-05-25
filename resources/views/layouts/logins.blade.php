<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/logins.css">
    <title>@yield('title')</title>
</head>
<body>
    @extends('layouts.navbarsinsesion')
    @section('content')
        <h1>@yield('titulo')</h1>
        <div class="contenedor">
            <div class="login-container">
                <h2>@yield('comentario')</h2>
                
                <form action="/login" method="POST">
                    <!-- Agregar token de seguridad CSRF en Laravel -->
                    {{ csrf_field() }}
                    <div class="inputs">
                        <div class="input-group">
                            <input type="email" id="email" placeholder="Correo" name="email" required>
                        </div>
                        <div class="input-group">
                            <input type="password" id="password" placeholder="Contraseña" name="password" required>
                        </div>
                    </div>
                    
                    <button type="submit" class="btn-continue">Continuar</button>
                    <a href="/password/reset" class="forgot-password">@yield('reenvio')</a>
                </form>
            </div>
        </div>
        
    @endsection
     
</body>
</html>
