<?php $__env->startSection('title', $product->name); ?>

<?php $__env->startSection('content'); ?>

    <h2><?php echo e($product->name); ?></h2>
    <br/>
    <p>Description <?php echo e($product->description); ?> </p>
    <br/>
    <strong>Precio <?php echo e($product->price); ?></strong>
    <br/>
    <small>Stock <?php echo e($product->stock); ?> </small>
    <br/>
    <?php if($category): ?>
        <small>Category: <?php echo e($category); ?></small>
    <?php endif; ?>
    <br/>
    <img src=<?php echo e("../../storage/product_pictures/" . $product->img_url); ?> alt="<?php echo e($product->name); ?>">

    <a href=" <?php echo e(route('addToCart', $product )); ?> ">Agregar al carrito</a>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main_layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/lautarolopez/Desktop/brillo-y-sustancia/resources/views/products/show.blade.php ENDPATH**/ ?>