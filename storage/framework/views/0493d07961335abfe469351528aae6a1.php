<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo e($title); ?> :: DV Películas</title>
    
    <link rel="stylesheet" href="<?= url('css/bootstrap.min.css');?>">
    <link rel="stylesheet" href="<?= url('css/style.css');?>">
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= route('home');?>">DV Películas</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link" href="<?= route('home');?>">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= route('about');?>">Nosotros</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= route('movies.index');?>">Películas</a>
                        </li>

                        
                        
                        <?php if(auth()->guard()->check()): ?>
                            <li class="nav-item">
                                <form action="<?php echo e(route('auth.logout')); ?>" method="post">
                                    <?php echo csrf_field(); ?>
                                    <button type="submit" class="nav-link"><?php echo e(auth()->user()->email); ?> (Cerrar sesión)</button>
                                </form>
                            </li>
                        <?php else: ?>
                            <li class="nav-item">
                                <a class="nav-link" href="<?= route('auth.login.form');?>">Ingresar</a>
                            </li>
                        <?php endif; ?>
                        
                    </ul>
                </div>
            </div>
        </nav>
        <main class="container py-3">
            
            <?php if(session()->has('feedback.message')): ?>
                
                <div class="alert alert-<?php echo e(session('feedback.status') ?? 'success'); ?>"><?php echo e(session('feedback.message')); ?></div>
            <?php endif; ?>

            
            <?php echo e($slot); ?>

        </main>
        <footer class="footer">
            <p>Da Vinci &copy; 2026</p>
        </footer>
    </div>
</body>
</html><?php /**PATH D:\www\da-vinci\web\4to-cuatrimestre\portales\2026.2\noche\proyecto\resources\views/components/layouts/main.blade.php ENDPATH**/ ?>