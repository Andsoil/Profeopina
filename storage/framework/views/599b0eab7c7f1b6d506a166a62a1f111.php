<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=
    , initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ventas</title>
    <link rel="stylesheet" href="/css/ventas.css">
</head>
<body>
    
    <?php $__env->startSection('content'); ?>
    <ul>
        <li><?php echo e(__('messages.name')); ?>: <?php echo e($name); ?></li>
        <li>Versión: <?php echo e($version); ?></li>
        <li><?php echo e(__('messages.description')); ?>: <?php echo e($description); ?></li>
        <li><?php echo e(__('messages.user')); ?>: <?php echo e($usuario); ?></li>
        <li><?php echo e(__('messages.password')); ?>: <?php echo e($contrasenia); ?></li>
        <li><?php echo e(__('messages.descmax')); ?>: <?php echo e($descuento_maximo); ?></li>
        <li><?php echo e(__('messages.cellphone')); ?>: <?php echo e($telefono); ?></li>
        <li><?php echo e(__('messages.email')); ?>: <?php echo e($correo); ?></li>
        <li><?php echo e(__('messages.tax')); ?>: <?php echo e($impuesto); ?></li>
        <li><?php echo e(__('messages.money')); ?></li>
        <li>HOST: <?php echo e($DB_HOST); ?></li>
        <li>PORT:<?php echo e($DB_PORT); ?></li>
        <li>DATABSE:<?php echo e($DB_DATABASE); ?></li>
    </ul>
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.navbarsinsesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/ventas.blade.php ENDPATH**/ ?>