<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    
    <?php $__env->startSection('title','Iniciar sesion'); ?>
    <?php $__env->startSection('titulo','Iniciar sesion'); ?>
    <?php $__env->startSection('comentario','Comenzemos completando el siguiente formulario'); ?>
    <?php $__env->startSection('reenvio','¿Haz olvidado tu contraseña?'); ?>
</body>
</html>


<?php echo $__env->make('auth.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\opina\opina\resources\views/iniciarsesion.blade.php ENDPATH**/ ?>