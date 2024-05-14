<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrarse</title>
    <!-- Bootstrap CSS v5.2.1 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('assets/estilos.css') }}">
    <!-- Iconos de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons/font/bootstrap-icons.css" rel="stylesheet">
</head>
<body>
<div class="background-container">
    <img src="{{ asset('assets/Logos/bg.jpeg') }}" class="background-image" alt="background">
</div>

<div class="container d-flex justify-content-center align-items-center min-vh-100">
    <section class="gradient-form">
        <div class="card rounded-3 text-black">
            <div class="card-body p-md-5 mx-md-4">
                <div class="text-center mb-4">
                    <img src="{{asset('assets/Logos/Logo.svg')}}" style="width: 185px;" alt="logo">
                    <h4 class="mt-1 mb-3">REGISTRO</h4>
                </div>

                <form action="{{route('register')}}" method="post">
                    @csrf
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example11">Nombre</label>
                        <input type="name" name="name" id="form2Example11" class="form-control"
                               placeholder="Ingrese nombre" />
                    </div>
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
                    <div class="form-outline mb-4">
                        <label class="form-label" for="form2Example22-confirm">Confirmar Contraseña</label>
                        <div class="input-group">
                            <input type="password" name="password_confirmation" id="form2Example22-confirm" class="form-control"
                                   placeholder="Confirmar contraseña" />
                            <button class="btn btn-outline-secondary" type="button" id="confirm-password-toggle">
                                <i class="bi bi-eye"></i>
                            </button>
                        </div>
                    </div>

                    <div class="text-center mb-4">
                        <button data-mdb-button-init data-mdb-ripple-init class="btn btn-primary btn-block fa-lg mb-3 w-100"
                                type="submit">
                            <i class="bi bi-lock"></i>Crear Cuenta
                        </button>
                        <a class="text-muted" href="#!">Ir a login</a> <a href="{{route('login')}}" class="btn btn-outline-danger">Login</a>
                        <div class="text-center mb-4">
                    </div>
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
    const confirmToggle = document.getElementById('confirm-password-toggle');
    const passwordInput = document.getElementById('form2Example22');
    const confirmInput = document.getElementById('form2Example22-confirm');
    const eyeIcon = passwordToggle.querySelector('i');
    const confirmEyeIcon = confirmToggle.querySelector('i');

    passwordToggle.addEventListener('click', function () {
        const type = passwordInput.getAttribute('type') === 'password' ? 'text' : 'password';
        passwordInput.setAttribute('type', type);
        eyeIcon.classList.toggle('bi-eye');
        eyeIcon.classList.toggle('bi-eye-slash');
    });

    confirmToggle.addEventListener('click', function () {
        const type = confirmInput.getAttribute('type') === 'password' ? 'text' : 'password';
        confirmInput.setAttribute('type', type);
        confirmEyeIcon.classList.toggle('bi-eye');
        confirmEyeIcon.classList.toggle('bi-eye-slash');
    });
</script>
</body>
</html>




