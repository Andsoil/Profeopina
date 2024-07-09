<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
</head>
<body>
    
    <?php $__env->startSection('title', __('messages.login_title')); ?>
    <?php $__env->startSection('titulo', __('messages.login')); ?>
    <?php $__env->startSection('comentario', __('messages.login_comment')); ?>
    <?php $__env->startSection('reenvio', __('messages.forgot_password')); ?>
</body>
</html>

<?php echo $__env->make('auth.login', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/iniciarsesion.blade.php ENDPATH**/ ?>