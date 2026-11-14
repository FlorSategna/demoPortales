
<?php if (isset($component)) { $__componentOriginal8a240419d16b3c1a159498153f053ed2 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal8a240419d16b3c1a159498153f053ed2 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.main','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> Lista de películas <?php $__env->endSlot(); ?>

    <h1>Listado de películas</h1>

    <?php if(auth()->guard()->check()): ?>
    <div class="mb-3">
        <a href="<?php echo e(route('movies.create')); ?>">Publicar una nueva película</a>
    </div>
    <?php endif; ?>

    
    <table class="table table-striped table-bordered">
        <thead>
            <tr>
                <th>Título</th>
                <th>Precio</th>
                <th>Fecha de estreno</th>
                <th>Clasificación</th>
                <th>Géneros</th>
                <th>Acciones</th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $movies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $movie): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                
                <td><?php echo e($movie->title); ?></td>
                <td>$<?php echo e($movie->price); ?></td>
                <td><?php echo e($movie->release_date); ?></td>
                <td><?php echo e($movie->rating->abbreviation); ?></td>
                <td>
                    <?php $__empty_1 = true; $__currentLoopData = $movie->genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                        <span class="badge bg-secondary"><?php echo e($genre->name); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <i>Sin géneros asignados</i>
                    <?php endif; ?>
                    
                </td>
                <td>
                    <div class="d-flex gap-2">
                        <a href="<?php echo e(route('movies.show', ['movie' => $movie->movie_id])); ?>" class="btn btn-primary">Ver</a>

                        <?php if(auth()->guard()->check()): ?>
                        <form action="<?php echo e(route('movies.reservation.register', ['id' => $movie->movie_id])); ?>" method="post">
                            <button type="submit" class="btn btn-warning">Reservar</button>
                        </form>

                        <a href="<?php echo e(route('movies.edit', ['id' => $movie->movie_id])); ?>" class="btn btn-secondary">Editar</a>

                        <a href="<?php echo e(route('movies.delete', ['movie' => $movie->movie_id])); ?>" class="btn btn-danger">Eliminar</a>
                        <?php endif; ?>
                    </div>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
            <?php /*
            foreach($movies as $movie):
            ?>
            <tr>
                <td>{{ $movie->title }}</td>
                <td>${{ $movie->price }}</td>
                <td>{{ $movie->release_date }}</td>
                <td>Coming Soon&trade;</td>
            </tr>
            <?php 
            endforeach;*/
            ?>
        </tbody>
    </table>

    <?php echo e($movies->links()); ?>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $attributes = $__attributesOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__attributesOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $component = $__componentOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__componentOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?><?php /**PATH D:\www\da-vinci\web\4to-cuatrimestre\portales\2026.2\noche\proyecto\resources\views/movies/index.blade.php ENDPATH**/ ?>