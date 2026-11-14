<?php
// $movie->load('genres');
// echo "<pre>";
// print_r($movie->genres->pluck('genre_id')->all());
// echo "</pre>";

// TODO: Mover esto a un método del modelo.
$genreIds = $movie->genres->pluck('genre_id')->all();
?>
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
     <?php $__env->slot('title', null, []); ?> Editar <?php echo e($movie->title); ?> <?php $__env->endSlot(); ?>

    <h1>Editar <?php echo e($movie->title); ?></h1>

    <?php if($errors->any()): ?>
        <div class="alert alert-danger">Hay errores en los datos enviados. Por favor, revisá los datos que tienen un error y probá de enviar el formulario de nuevo.</div>
    <?php endif; ?>

    <form action="<?php echo e(route('movies.update', ['id' => $movie->movie_id])); ?>" method="post" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="title" class="form-label">Título</label>
            <input
                type="text"
                id="title"
                name="title"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'form-control',
                    'is-invalid' => $errors->has('title'),
                ]); ?>"
                <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                aria-invalid="true"
                aria-errormessage="error-title"
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                value="<?php echo e(old('title', $movie->title)); ?>"
            >
            <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger" id="error-title"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="price" class="form-label">Precio</label>
            <input
                type="text"
                id="price"
                name="price"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'form-control',
                    'is-invalid' => $errors->has('price'),
                ]); ?>"
                <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                aria-invalid="true"
                aria-errormessage="error-price"
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                value="<?php echo e(old('price', $movie->price)); ?>"
            >
            <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger" id="error-price"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="release_date" class="form-label">Fecha de estreno</label>
            <input
                type="date"
                id="release_date"
                name="release_date"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'form-control',
                    'is-invalid' => $errors->has('release_date'),
                ]); ?>"
                <?php $__errorArgs = ['release_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                aria-invalid="true"
                aria-errormessage="error-release_date"
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                value="<?php echo e(old('release_date', $movie->release_date)); ?>"
            >
            <?php $__errorArgs = ['release_date'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger" id="error-release_date"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="rating_fk" class="form-label">Clasificación</label>
            <select
                id="rating_fk"
                name="rating_fk"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'form-control',
                    'is-invalid' => $errors->has('rating_fk'),
                ]); ?>"
                <?php $__errorArgs = ['rating_fk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                aria-invalid="true"
                aria-errormessage="error-rating_fk"
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            >
                <?php $__currentLoopData = $ratings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rating): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option
                    value="<?php echo e($rating->rating_id); ?>"
                    <?php if($rating->rating_id == old('rating_fk', $movie->rating_fk)): echo 'selected'; endif; ?>
                >
                    <?php echo e($rating->name); ?> (<?php echo e($rating->abbreviation); ?>)
                </option>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </select>
            <?php $__errorArgs = ['rating_fk'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger" id="error-rating_fk"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="synopsis" class="form-label">Sinopsis</label>
            <textarea
                id="synopsis"
                name="synopsis"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'form-control',
                    'is-invalid' => $errors->has('synopsis'),
                ]); ?>"
                <?php $__errorArgs = ['synopsis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                aria-invalid="true"
                aria-errormessage="error-synopsis"
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
            ><?php echo e(old('synopsis', $movie->synopsis)); ?></textarea>
            <?php $__errorArgs = ['synopsis'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger" id="error-synopsis"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <div class="mb-2">Portada actual</div>
                <?php if($movie->cover && \Storage::exists($movie->cover)): ?>
                    <div class="col-2">
                        <img src="<?php echo e(\Storage::url($movie->cover)); ?>" alt="" class="img-fluid">
                    </div>
                <?php else: ?>
                    Sin portada
                <?php endif; ?>
        </div>
        <div class="mb-3">
            <label for="cover" class="form-label">Portada (opcional)</label>
            <input
                type="file"
                id="cover"
                name="cover"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'form-control',
                    'is-invalid' => $errors->has('cover'),
                ]); ?>"
                <?php $__errorArgs = ['cover'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                aria-invalid="true"
                aria-errormessage="error-cover"
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                aria-describedby="help-cover"
            >
            <div class="text-muted" id="help-cover">Solo seleccioná una portada si querés cambiar la actual</div>
            <?php $__errorArgs = ['cover'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger" id="error-cover"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>
        <div class="mb-3">
            <label for="cover_description" class="form-label">Descripción de la portada (opcional)</label>
            <input
                type="text"
                id="cover_description"
                name="cover_description"
                class="<?php echo \Illuminate\Support\Arr::toCssClasses([
                    'form-control',
                    'is-invalid' => $errors->has('cover_description'),
                ]); ?>"
                <?php $__errorArgs = ['cover_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                aria-invalid="true"
                aria-errormessage="error-cover_description"
                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                value="<?php echo e(old('cover_description', $movie->cover_description)); ?>"
            >
            <?php $__errorArgs = ['cover_description'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                <div class="text-danger" id="error-cover_description"><?php echo e($message); ?></div>
            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        </div>

        <fieldset class="mb-3">
            <legend>Géneros</legend>

            <?php $__currentLoopData = $genres; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $genre): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <label class="me-3">
                <input
                    type="checkbox"
                    name="genre_fks[]"
                    value="<?php echo e($genre->genre_id); ?>"
                    <?php if(in_array($genre->genre_id, old('genre_fks', $genreIds))): echo 'checked'; endif; ?>
                >
                <?php echo e($genre->name); ?>

            </label>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </fieldset>

        <button type="submit" class="btn btn-primary">Actualizar</button>
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
<?php endif; ?><?php /**PATH D:\www\da-vinci\web\4to-cuatrimestre\portales\2026.2\noche\proyecto\resources\views/movies/edit.blade.php ENDPATH**/ ?>