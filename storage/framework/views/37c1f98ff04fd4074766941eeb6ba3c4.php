<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/inicio.css">
    <title>Document</title>
    <script src="/js/cambio.js"></script>
</head>
<body>
    
    <?php $__env->startSection('titulo', __('messages.profeopina')); ?>
    <?php $__env->startSection('content'); ?>
    <div class="centered-images">
        <div>
        <h1><?php echo e(__('messages.welcome_to')); ?></h1>
            <!--<<p><?php echo e(__('messages.welcome_user', ['user' => Auth::guard('student')->user()->name])); ?></p>  Mostrando el nombre del usuario 
            <?php if(Auth::guard('student')->check()): ?>
    <p>Hola, <?php echo e(Auth::guard('student')->user()->name); ?>!</p>
<?php else: ?>
    <p>Usuario no autenticado.</p>
<?php endif; ?>
        </div>-->
        <div>
            <img id="subtitulo" src="/logos/Logo_subtitle.svg" alt="logo">
            <div class="icon">
                <img src="/logos/Logo_icon.svg" alt="logo">
            </div>
        </div>
    </div>
    <div class="search-section">
        <form action="<?php echo e(route('buscarlog.profesor')); ?>" method="GET">
            <input type="text" name="profesor" placeholder="<?php echo e(__('messages.search_teacher')); ?>" class="search-input">
            
        </form>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.navbarconsesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/iniciologueado.blade.php ENDPATH**/ ?>