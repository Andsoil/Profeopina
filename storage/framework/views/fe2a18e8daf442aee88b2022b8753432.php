<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/inicio.css">
    <link rel="icon" href="/logos/Logo_icon.svg" type="image/png">
</head>
<body>
    
    <?php $__env->startSection('titulo','ProfeOpina'); ?>
    <?php $__env->startSection('content'); ?>
    <div class="centered-images">
        <div>
            <h1>BIENVENIDO A</h1>
        </div>
        <div>
            <img src="/logos/Logo_subtitle.svg" alt="logo">
            <div class="icon">
                <img src="/logos/Logo_icon.svg" alt="logo">
            </div>
        </div>
    </div>
    <div class="search-section">
        <form action="/buscar_profesor" method="GET">
            <input type="text" name="profesor" placeholder="Buscar profesor" class="search-input">

        </form>
    </div>
    <?php $__env->stopSection(); ?>

</body>
</html>

<?php echo $__env->make('layouts.navbarsinsesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\FERRETERIA\resources\views/inicio.blade.php ENDPATH**/ ?>