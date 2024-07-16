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
            <?php if($resenias->isEmpty()): ?>
                <p class="no-resenias"><?php echo e(__('messages.no_reviews')); ?></p>
            <?php else: ?>
                <?php $__currentLoopData = $resenias; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $resenia): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="resenia">
                        <p class="resenia-calificacion">
                            <?php echo e($resenia->calificacion); ?> estrellas
                        </p>
                        <p class="resenia-texto"><?php echo e($resenia->contenido); ?></p>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
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