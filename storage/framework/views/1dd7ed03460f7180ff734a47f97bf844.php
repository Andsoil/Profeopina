<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo e(__('messages.document_title')); ?></title>
    <link rel="stylesheet" href="/css/perfil_profe.css">
    <script src="/js/aniadir_resenia.js"></script>
</head>
<body>
    
    <?php $__env->startSection('content'); ?>
    <div class="container">
        
        <div class="profesor-perfil">
            <button id="btn-guardar" class="btn-guardar" onclick="cambiarImagen()">
                <img id="icono-guardar" src="/imagenes/singuardar.png" alt="<?php echo e(__('messages.save')); ?>">
            </button>
            <!-- Primera Parte: Foto, Nombre, Ciudad, Colegio -->
            <div class="profesor-info">
                <img src="/imagenes/profe.jpg" alt="<?php echo e(__('messages.teacher_photo')); ?>" class="profesor-foto">
                <h1 class="profesor-nombre"><?php echo e(__('messages.teacher_name')); ?></h1>
                <p class="profesor-ciudad"><?php echo e(__('messages.teacher_city')); ?></p>
                <p class="profesor-colegio"><?php echo e(__('messages.teacher_school')); ?></p>
            </div>
            
            <!-- Segunda Parte: Etiquetas Destacadas -->
            <div class="etiquetas-destacadas">
                <h2><?php echo e(__('messages.featured_tags')); ?></h2>
                <div class="etiquetas">
                    <div class="etiqueta"><?php echo e(__('messages.empathic')); ?></div>
                    <div class="etiqueta"><?php echo e(__('messages.clear_understanding')); ?></div>
                    <div class="etiqueta"><?php echo e(__('messages.organized')); ?></div>
                    <!-- Añade más etiquetas si es necesario -->
                </div>
            </div>
            <!-- Tercera Parte: Según los reviews -->
            <div class="segun-reviews">
                <h2><?php echo e(__('messages.according_to_reviews')); ?></h2>
                <ul>
                    <li><?php echo e(__('messages.methodology_rating')); ?>: <span class="azul">4/5</span></li>
                    <li><?php echo e(__('messages.course_difficulty')); ?>: <span class="azul"><?php echo e(__('messages.easy')); ?></span></li>
                    <li><?php echo e(__('messages.perceived_learning')); ?>: <span class="azul"><?php echo e(__('messages.more_than_expected')); ?></span></li>
                    <li><?php echo e(__('messages.would_choose_again')); ?> <span class="azul">80%</span></li>
                    <li><?php echo e(__('messages.takes_attendance')); ?> <span class="azul">25%</span></li>
                </ul>
            </div>
            <!-- Cuarta Parte: Botones -->
            <div class="botones">
                <a href="<?php echo e(route('listaresenia')); ?>" class="boton"><?php echo e(__('messages.view_reviews')); ?></a>
                <a href="<?php echo e(route('iniciarsesion')); ?>" class="boton"><?php echo e(__('messages.add_review')); ?></a>
            </div>
            <!-- Quinta Parte: Enlace -->
            <div class="enlace-profesor">
                <a href="ruta_a_la_vista_del_profesor" class="enlace-texto"><?php echo e(__('messages.are_you_the_teacher')); ?></a>
            </div>
        </div>
    </div>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.navbarsinsesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/perfil_profe.blade.php ENDPATH**/ ?>