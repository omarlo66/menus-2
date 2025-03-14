<?php $__env->startSection('title', $restaurant_name); ?>

<?php $__env->startSection('content'); ?>

<div class="container">
    <div class="hero-section w-100 d-flex">
        <div class="hero-content">
            <h1 class="text-light">Welcome to <?php echo e($restaurant_name); ?></h1>
            <p class="text-light">We serve the best food in town</p>
        </div>
        <img src="<?php echo e($hero); ?>" alt="<?php echo e($restaurant_name); ?>" class="hero-image img-fluid">
    </div>
    
    <h2 class="text-light mt-5">Our Products</h2>
    <div class="row">
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4">
                <div class="card mb-4">
                    <img src="<?php echo e(asset('storage/' . $product->image)); ?>" class="card-img-top" alt="<?php echo e($product->product_name); ?>">
                    <div class="card-body">
                        <h5 class="card-title
                        "><?php echo e($product->product_name); ?></h5>
                        <p class="card-text"><?php echo e($product->price); ?>$</p>
                        <a href="<?php echo e(route('products.show', $product->id)); ?>" class="btn btn-primary">View</a>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\menus-2\resources\views/welcome.blade.php ENDPATH**/ ?>