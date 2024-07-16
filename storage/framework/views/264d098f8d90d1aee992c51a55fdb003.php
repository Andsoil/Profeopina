<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(__('messages.search_teacher')); ?></title>
    <link rel="stylesheet" href="/css/busqueda.css">
</head>
<body>
    

    <?php $__env->startSection('content'); ?>
        <h1><?php echo e(__('messages.search_teacher')); ?>: <?php echo e($query); ?></h1>
    
        <div class="search-container">
            <form action="<?php echo e(route('buscar.profesor')); ?>" method="GET">
                <input type="text" name="profesor" placeholder="<?php echo e(__('messages.search_teacher')); ?>" class="search-input" value="<?php echo e(old('profesor', $query)); ?>">
                
            </form>
        </div>
    
        <h2><?php echo e(__('messages.teacher')); ?>:</h2>
    
        <div class="resultados">
            <?php if($resultados->isEmpty()): ?>
                <p>No se encontraron resultados para: <?php echo e($query); ?></p>
            <?php else: ?>
                <?php $__currentLoopData = $resultados; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $profesor): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <a href="<?php echo e(route('perfil.profesor', ['id' => $profesor->id])); ?>" class="profesor-link">
                        <div class="profesor">
                            <img src="<?php echo e($profesor->ruta_de_la_imagen); ?>" alt="Foto del Profesor">
                            <div class="profesor-info">
                                <div class="profesor-nombre"><?php echo e($profesor->nombre); ?> <?php echo e($profesor->apellido); ?></div>
                                <div class="profesor-detalles"><?php echo e($profesor->detalles); ?></div>
                                <!-- Agrega más detalles del profesor según sea necesario -->
                            </div>
                        </div>
                    </a>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
    <?php $__env->stopSection(); ?>
    
</body>
</html>

<?php echo $__env->make('layouts.navbarsinsesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/busqueda.blade.php ENDPATH**/ ?>