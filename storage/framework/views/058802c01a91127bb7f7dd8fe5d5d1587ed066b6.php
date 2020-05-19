<?php $__env->startSection('title', 'Home'); ?>

<?php $__env->startSection('content'); ?>

    <div class="container row">
        <div class="col-12 col-sm-6 mt-5 mb-5">
            <img src="https://http2.mlstatic.com/D_NQ_NP_851565-MLA31993371778_082019-O.webp">
        </div>
        <div class="col-12 mt-5 col-sm-6 mb-5">
            <h2><?php echo e($product->name); ?></h2>
            <p><strong>Precio $<?php echo e($product->price); ?></strong></p>
            <p><small>Stock <?php echo e($product->stock); ?></small></p>
            <?php if($category): ?>
                <p><small>Category: <?php echo e($category); ?></small></p>
            <?php endif; ?>
            <a href=" <?php echo e(route('addToCart', $product )); ?> " class="btn radius-none">Agregar al carrito</a>
        </div>
    </div>
    <div class="container mb-5">
        <h4>Descripción</h4>
        <p><?php echo e($product->description); ?></p>
    </div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Edgar\Desktop\brillo-y-sustancia\resources\views/products/show.blade.php ENDPATH**/ ?>