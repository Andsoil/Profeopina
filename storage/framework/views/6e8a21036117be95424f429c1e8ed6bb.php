<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/inicio.css">
    <link rel="icon" href="/logos/Logo_icon.svg" type="image/png">
    <script src="/js/cambio.js"></script>
    
</head>
<body>
    
    <?php $__env->startSection('titulo', __('messages.profeopina')); ?>
    <?php $__env->startSection('content'); ?>
    <div class="centered-images">
        <div>
            <h1><?php echo e(__('messages.welcome_to')); ?></h1>
        </div>
        <div>
            <img id="subtitulo" src="/logos/Logo_subtitle.svg" alt="logo">
            <div class="icon">
                <img src="/logos/Logo_icon.svg" alt="logo">
            </div>
        </div>
    </div>
    <div class="search-section">
        <form action="/buscar_profesor" method="GET">
            <input type="text" name="profesor" placeholder="<?php echo e(__('messages.search_teacher')); ?>" class="search-input">
        </form>
    </div>
    <?php $__env->stopSection(); ?>
    
    
</body>
</html>

<?php echo $__env->make('layouts.navbarsinsesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/inicio.blade.php ENDPATH**/ ?>