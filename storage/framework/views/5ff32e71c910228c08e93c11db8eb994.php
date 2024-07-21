<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/logueado.css">
    <title><?php echo e(__('messages.profile_title')); ?></title>
</head>
<body>
    
    <?php $__env->startSection('content'); ?>
    <div class="profile-container">
        <div class="container">
            <!-- Saludo al usuario -->
            <h1 class="display-4"><?php echo e(__('messages.hello')); ?>, <?php echo e(Auth::guard('student')->user()->name); ?>!</h1>
            <p class="lead"><?php echo $__env->yieldContent('titulo'); ?></p>
            <hr class="my-4">
        
            <!-- Detalles del perfil -->
            <div class="profile-details">
                <?php echo $__env->yieldContent('contenido'); ?>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.navbarconsesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/layouts/logueado.blade.php ENDPATH**/ ?>