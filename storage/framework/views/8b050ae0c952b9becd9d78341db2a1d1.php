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
     <?php $__env->slot('title', null, []); ?> Confirmación necesaria para eliminar <?php $__env->endSlot(); ?>

    <h1>Confirmación necesaria para eliminar <?php echo e($movie->title); ?></h1>

    <p>Para eliminar la película <b><?php echo e($movie->title); ?></b> es necesario hacer una confirmación.</p>
    <p>Abajo se muestran los detalles de la película.</p>

    <hr class="mb-4">

    <h2><?php echo e($movie->title); ?></h2>

    <dl>
        <dt>Precio</dt>
        <dd>$<?php echo e($movie->price); ?></dd>
        <dt>Fecha de estreno</dt>
        <dd><?php echo e($movie->release_date); ?></dd>
    </dl>

    <h2>Sinopsis</h2>

    <div><?php echo e($movie->synopsis); ?></div>

    <hr class="my-4">

    <p>Esta acción es <b>irreversible</b>. ¿Querés continuar?</p>

    <form action="<?php echo e(route('movies.destroy', ['id' => $movie->movie_id])); ?>" method="post">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-danger">Sí, eliminar <?php echo e($movie->title); ?></button>
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
<?php endif; ?><?php /**PATH D:\www\da-vinci\web\4to-cuatrimestre\portales\2026.2\noche\proyecto\resources\views/movies/delete.blade.php ENDPATH**/ ?>