<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    
    <?php $__env->startSection('title','Registro de usuario'); ?>
    <?php $__env->startSection('titulo','Registro de usuario'); ?>
    <?php $__env->startSection('comentario','Ingrese sus datos'); ?>
    <?php $__env->startSection('reenvio','¿Ya tienes una cuenta?'); ?>
</body>
</html>

<?php echo $__env->make('auth.register', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\opina\opina\resources\views/registro.blade.php ENDPATH**/ ?>