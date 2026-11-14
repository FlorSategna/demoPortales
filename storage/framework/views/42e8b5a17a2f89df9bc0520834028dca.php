<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reserva de película registrada</title>
</head>
<body style="font-family: sans-serif;">
    <h1 style="text-decoration: underline;">Película reservada correctamente</h1>

    <p>La reserva de la película <b><?php echo e($movie->title); ?></b> se registró con éxito.</p>
    <p>Datos de la película:</p>

    <dl>
        <dt>Precio</dt>
        <dd>$<?php echo e($movie->price); ?></dd>
        <dt>Fecha de estreno</dt>
        <dd><?php echo e($movie->release_date); ?></dd>
        <dt>Clasificación</dt>
        <dd><?php echo e($movie->rating->name); ?> (<?php echo e($movie->rating->abbreviation); ?>)</dd>
        <dt>Géneros</dt>
        <dd>
            <?php $__empty_1 = true; $__currentLoopData = $movie->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <span><?php echo e($genre->name); ?></span>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <i>Sin géneros asignados</i>
            <?php endif; ?>
        </dd>
    </dl>

    <p>Guardá este email como comprobante.</p>

    <p>Atentamente,<br>
    tus amigos de DV Películas.</p>
</body>
</html><?php /**PATH D:\www\da-vinci\web\4to-cuatrimestre\portales\2026.2\noche\proyecto\resources\views/mails/movie-reservation-registered.blade.php ENDPATH**/ ?>