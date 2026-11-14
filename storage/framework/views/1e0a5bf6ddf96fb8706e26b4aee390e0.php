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
     <?php $__env->slot('title', null, []); ?> Confirmación de edad necesaria <?php $__env->endSlot(); ?>

    <h1>Confirmación de edad</h1>

    <p>La película <b><?php echo e($movie->title); ?></b> está indicada como solo para mayores de 18 años.</p>
    <p>Para poder ingresar es necesario que confirmes que cumplís con esto.</p>

    <form action="<?php echo e(route('movies.age-verification.confirm', ['id' => $movie->movie_id])); ?>" method="post">
        <button type="submit" class="btn btn-primary">Sí, soy mayor de 18 años</button>
        <a href="<?php echo e(route('movies.index')); ?>" class="btn btn-danger">No, soy menor de edad. ¡Sacame de acá!</a>
    </form>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $attributes = $__attributesOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__attributesOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal8a240419d16b3c1a159498153f053ed2)): ?>
<?php $component = $__componentOriginal8a240419d16b3c1a159498153f053ed2; ?>
<?php unset($__componentOriginal8a240419d16b3c1a159498153f053ed2); ?>
<?php endif; ?><?php /**PATH D:\www\da-vinci\web\4to-cuatrimestre\portales\2026.2\noche\proyecto\resources\views/movies/age-verification.blade.php ENDPATH**/ ?>