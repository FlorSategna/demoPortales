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
     <?php $__env->slot('title', null, []); ?> <?php echo e($movie->title); ?> <?php $__env->endSlot(); ?>

    <h1><?php echo e($movie->title); ?></h1>

    <div class="row mb-4">
        <div class="col-2">
            
            <?php if($movie->cover !== null && \Storage::exists($movie->cover)): ?>
                <img src="<?= \Storage::url($movie->cover);?>" alt="<?php echo e($movie->cover_description); ?>" class="img-fluid">
            <?php else: ?>
                Sin portada 
                
            <?php endif; ?>
        </div>
        <div class="col-10">
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
                        <span class="badge bg-secondary"><?php echo e($genre->name); ?></span>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                        <i>Sin géneros asignados</i>
                    <?php endif; ?>
                </dd>
            </dl>
        </div>
    </div>

    <h2>Sinopsis</h2>

    <div><?php echo e($movie->synopsis); ?></div>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $attributes = $__attributesOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__attributesOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $component = $__componentOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__componentOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?><?php /**PATH D:\www\da-vinci\web\4to-cuatrimestre\portales\2026.2\noche\proyecto\resources\views/movies/show.blade.php ENDPATH**/ ?>