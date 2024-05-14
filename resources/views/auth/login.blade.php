<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
    <!-- Iconos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        /* Estilos personalizados */
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa; /* Color de fondo general */
            margin: 0; /* Eliminar margen predeterminado del cuerpo */
            height: 100vh; /* Establecer altura del cuerpo al 100% del viewport */
            display: flex; /* Utilizar flexbox para centrar contenido verticalmente */
            justify-content: center; /* Centrar contenido horizontalmente */
            align-items: center; /* Centrar contenido verticalmente */
        }

        .background-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -1;
        }

        .background-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .gradient-form {
            background-color: rgba(255, 255, 255, 0.9); /* Color de fondo del formulario */
            border-radius: 20px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1); /* Sombra suave */
            padding: 30px; /* Espacio interno */
            max-width: 500px; /* Ancho máximo del formulario */
            margin: 50px; /* Margen externo para igualar los espacios */
            width: 100%; /* Ancho del formulario */
        }

        .card {
            border: none; /* Sin borde en la tarjeta */
        }

        .btn-primary {
            background-color: #007bff; /* Color azul para el botón de acceso */
            border-color: #007bff; /* Color del borde del botón de acceso */
            transition: background-color 0.3s ease; /* Transición suave al pasar el ratón */
            width: 100%; /* Ancho del botón igual al de los campos del formulario */
        }

        .btn-primary:hover {
            background-color: #0056b3; /* Color de fondo del botón de acceso al pasar el ratón */
            border-color: #0056b3; /* Color del borde del botón de acceso al pasar el ratón */
        }

        .btn-outline-danger {
            color: #dc3545; /* Color del texto del botón de registro */
            border-color: #dc3545; /* Color del borde del botón de registro */
        }

        .btn-outline-danger:hover {
            color: #fff; /* Color del texto del botón de registro al pasar el ratón */
            background-color: #dc3545; /* Color de fondo del botón de registro al pasar el ratón */
            border-color: #dc3545; /* Color del borde del botón de registro al pasar el ratón */
        }
    </style>
</head>
<body>
<div class="background-container">
    <img src="{{ asset('assets/Logos/bg.jpeg') }}" class="background-image" alt="background">
</div>

<div class="container d-flex align-items-center justify-content-center min-vh-100">
    <section class="gradient-form">
        <div class="container">

                <div class="card-body p-md-5 mx-md-4">
                    <div class="text-center mb-4">
                        <img src="{{asset('assets/Logos/Logo.svg')}}" style="width: 185px;" alt="logo">
                        <h4 class="mt-1 mb-3">LOGIN</h4>
                    </div>

                    <form action="{{route('login')}}" method="post">
                        @csrf
                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example11">Correo</label>
                            <input type="email" name="email" id="form2Example11" class="form-control"
                                   placeholder="Ingresar correo" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="form2Example22">Contraseña</label>
                            <div class="input-group">
                                <input type="password" name="password" id="form2Example22" class="form-control"
                                       placeholder="Ingresar contraseña" />
                                <button class="btn btn-outline-secondary" type="button" id="password-toggle">
                                    <i class="bi bi-eye"></i>
                                </button>
                            </div>
                        </div>

                        <div class="text-center mb-4">
                            <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg mb-3"
                                    type="submit">
                                <i class="bi bi-lock"></i> Acceso
                            </button>
                            <div class="text-center mb-4">
                            <a class="text-muted" href="#!">¿Olvidaste tu contraseña?</a>
                        </div>
                        </div>

                        <div class="text-center">
                            <p class="mb-0">¿No tienes cuenta?</p>
                            <a href="{{route('register')}}" class="btn btn-outline-danger">Registrarse</a>
                        </div>
                    </form>
                </div>

        </div>
    </section>
</div>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
<script>
    const passwordToggle = document.getElementById('password-toggle');
    const passwordInput = document.getElementById('form2Example22');
    const eyeIcon = passwordToggle.querySelector('i');

    passwordToggle.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        eyeIcon.classList.toggle('bi-eye');
        eyeIcon.classList.toggle('bi-eye-slash');
    });
</script>
</body>
</html>
