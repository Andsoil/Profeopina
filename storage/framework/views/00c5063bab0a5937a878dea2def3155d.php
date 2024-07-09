<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(__('messages.review_list_title')); ?></title>
    <link rel="stylesheet" href="/css/listaresenia.css">
</head>
<body>
    
    <?php $__env->startSection('content'); ?>
    <div class="contenedor">
        <h1 class="titulo"><?php echo e(__('messages.teacher_reviews')); ?></h1>
        <div class="lista-resenias">
            <div class="resenia">
                <h3 class="resenia-titulo"><?php echo e(__('messages.review_title_1')); ?></h3>
                <p class="resenia-autor"><?php echo e(__('messages.written_by')); ?>: <?php echo e(__('messages.student_1')); ?></p>
                <p class="resenia-texto"><?php echo e(__('messages.review_text_1')); ?></p>
            </div>
            <div class="resenia">
                <h3 class="resenia-titulo"><?php echo e(__('messages.review_title_2')); ?></h3>
                <p class="resenia-autor"><?php echo e(__('messages.written_by')); ?>: <?php echo e(__('messages.student_2')); ?></p>
                <p class="resenia-texto"><?php echo e(__('messages.review_text_2')); ?></p>
            </div>
            <!-- Añade más reseñas aquí -->
        </div>
        <div class="botones">
            <a href="<?php echo e(route('perfil')); ?>" class="boton"><?php echo e(__('messages.back_to_profile')); ?></a>
            <a href="<?php echo e(route('iniciarsesion')); ?>" class="boton"><?php echo e(__('messages.add_review')); ?></a>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.navbarsinsesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/listaresenia.blade.php ENDPATH**/ ?>