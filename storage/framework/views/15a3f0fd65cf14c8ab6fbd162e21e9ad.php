<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/configcuenta.css">
    <title><?php echo e(__('messages.profile')); ?></title>
</head>
<body>
    
    <?php $__env->startSection('titulo', __('messages.profile')); ?>
    <?php $__env->startSection('contenido'); ?>
        <p><strong><?php echo e(__('messages.name')); ?><?php echo e(Auth::guard('student')->user()->name); ?>!:</strong> </p>
        <p><strong><?php echo e(__('messages.lastname')); ?>:</strong> </p>
        <p><strong><?php echo e(__('messages.institution')); ?>:</strong> </p>
        <p><strong><?php echo e(__('messages.graduation_year')); ?>:</strong> </p>
        <a href="#" class="editar">
            <i class="fas fa-pencil-alt"></i> <strong><?php echo e(__('messages.edit')); ?></strong>
        </a>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.logueado', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/tuperfil.blade.php ENDPATH**/ ?>