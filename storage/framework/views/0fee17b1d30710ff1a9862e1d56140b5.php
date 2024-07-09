<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/logins.css">
    <link rel="stylesheet" href="/css/contactanos.css">
</head>
<body>
    
    <?php $__env->startSection('content'); ?>
        <h1><?php echo $__env->yieldContent('titulo'); ?></h1>
        <div class="contenedor">
            <div class="login-container">
                <h2><?php echo $__env->yieldContent('comentario'); ?></h2>
                
                <form action="/login" method="POST">
                    <h3><?php echo e(__('messages.email')); ?></h3>
                    <div class="input-group">
                        <input type="text" id="text"  name="text" required>
                    </div>
                    <h3><?php echo e(__('messages.typeconsult')); ?></h3>
                    <div class="input-group">
                        <select name="consulta" id="lang">
                            <option value="queja"><?php echo e(__('messages.complaint')); ?></option>
                            <option value="aviso"><?php echo e(__('messages.warning')); ?></option>
                        </select>
                    </div>  
                    <h3><?php echo e(__('messages.comment')); ?></h3>
                    <div class="input-group">
                        <input type="text" id="text"  name="text" required>
                    </div>             
                    <button type="submit" class="btn-continue"><?php echo e(__('messages.send')); ?></button>
                    <a href="/password/reset" class="forgot-password"><?php echo $__env->yieldContent('reenvio'); ?></a>
                </form>
            </div>
        </div>
        
    <?php $__env->stopSection(); ?>
</body>
</html>
<?php echo $__env->make('layouts.navbarsinsesion', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/contactanos.blade.php ENDPATH**/ ?>