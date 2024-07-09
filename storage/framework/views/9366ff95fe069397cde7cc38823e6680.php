<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php $__env->startSection('titulo', __('messages.saveprof') ); ?>
    <?php $__env->startSection('contenido'); ?>
        
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.logueado', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/profguardados.blade.php ENDPATH**/ ?>