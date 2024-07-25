<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/css/configcuenta.css">
    <link rel="stylesheet" href="/css/perfil_student.css">
    <title><?php echo e(__('messages.profile')); ?></title>
    
</head>
<body>
    
    <?php $__env->startSection('titulo', __('messages.profile')); ?>
    <?php $__env->startSection('contenido'); ?>
        <p><strong><?php echo e(__('messages.name')); ?>:</strong> <?php echo e($student->name); ?></p>
        <p><strong><?php echo e(__('messages.email')); ?>:</strong> <?php echo e($student->email); ?></p>
        <p><strong><?php echo e(__('messages.password')); ?>:</strong> ********</p>
        <a href="#" class="editar" id="editProfileBtn">
            <i class="fas fa-pencil-alt"></i> <strong><?php echo e(__('messages.edit')); ?></strong>
        </a>
        
        <!-- Modal -->
        <div id="editProfileModal" class="modal">
            <div class="modal-content">
                <span class="close">&times;</span>
                <h2><?php echo e(__('messages.edit_profile')); ?></h2>
                <form action="<?php echo e(route('profile.update', $student->id)); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <?php echo method_field('PUT'); ?>
                    <div>
                        <label for="name"><?php echo e(__('messages.name')); ?>:</label>
                        <input type="text" id="name" name="name" value="<?php echo e($student->name); ?>">
                    </div>
                    <div>
                        <label for="email"><?php echo e(__('messages.email')); ?>:</label>
                        <input type="email" id="email" name="email" value="<?php echo e($student->email); ?>">
                    </div>
                    <div>
                        <label for="password"><?php echo e(__('messages.password')); ?>:</label>
                        <input type="password" id="password" name="password">
                    </div>
                    <button type="submit"><?php echo e(__('messages.save')); ?></button>
                </form>
            </div>
        </div>

        <script>
            document.getElementById('editProfileBtn').onclick = function() {
                document.getElementById('editProfileModal').style.display = "block";
            }
            document.getElementsByClassName('close')[0].onclick = function() {
                document.getElementById('editProfileModal').style.display = "none";
            }
            window.onclick = function(event) {
                if (event.target == document.getElementById('editProfileModal')) {
                    document.getElementById('editProfileModal').style.display = "none";
                }
            }
        </script>
    <?php $__env->stopSection(); ?>
</body>
</html>

<?php echo $__env->make('layouts.logueado', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/tuperfil.blade.php ENDPATH**/ ?>