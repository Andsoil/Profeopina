<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/navbarsinsesion.css">
    <link rel="icon" href="/logos/Logo_icon.svg" type="image/png">
    <script src="/js/inicio_img_cambio.js"></script>
</head>
<body>
    <header class="header">
        <div class="left-section">
            <div class="logo">
                <label for="btn-menu">
                    <img src="/imagenes/menu.png" alt="profeopina">
                </label>
            </div>
            <div class="prof">
                <img id="logo-title" src="/logos/Logo_title_alt3.svg" alt="profeopina">
            </div>
        </div>
        <nav class="right-section">
            <div class="logo">
                <a href="<?php echo e(route('locale.change', ['locale' => 'en'])); ?>" id="en-link" class="lang-link"  onclick="changeLanguage('en'); return false;">
                    <img src="/imagenes/en.png" alt="Traducir a Inglés">
                </a>
            </div>
            <div class="logo">
                <a href="<?php echo e(route('locale.change', ['locale' => 'es'])); ?>" id="es-link" class="lang-link" onclick="changeLanguage('es'); return false;">
                    <img src="/imagenes/es.png" alt="Traducir a Español">
                </a>
            </div>
            <div class="logo" >
                <a href="https://www.facebook.com/profile.php?id=61557749877856"><img src="/imagenes/facebook.png" alt="profeopina"></a>

            </div>
        </nav>
    </header>
    <?php echo $__env->yieldContent('content'); ?>
    <!--barra lateral  -->
    <input type="checkbox" id="btn-menu">
    <div class="container-menu">
        <div class="cont-menu">
            <nav>
                <a href="<?php echo e(route('iniciologueado')); ?>"><?php echo e(__('messages.home')); ?></a>
                <a href="<?php echo e(route('tuperfil')); ?>"><?php echo e(__('messages.profile')); ?></a>
                <a href="<?php echo e(route('turesenia')); ?>" class="btn btn-outline-danger"><?php echo e(__('messages.your_reviews')); ?></a>
                <a href="<?php echo e(route('profeguardado')); ?>" class="btn btn-outline-danger"><?php echo e(__('messages.saved_teachers')); ?></a>
                <a href="<?php echo e(route('configuracion')); ?>" class="btn btn-outline-danger"><?php echo e(__('messages.account_settings')); ?></a>
                <a href="<?php echo e(route('contactanos')); ?>"><?php echo e(__('messages.contact_us')); ?></a>
                <a href=""><?php echo e(__('messages.logout')); ?></a>
            </nav>
            <div>
                <label for="btn-menu" class="icon-equis">
                    <img src="/imagenes/xazul.png" alt="x">
                </label>
            </div>
        </div>
    </div>
</body>
</html>
<?php /**PATH E:\instxampp\htdocs\www\opina\opina\resources\views/layouts/navbarconsesion.blade.php ENDPATH**/ ?>