<!-- resources/views/welcome.blade.php -->


<?php $__env->startSection('title', 'Welcome Page'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container bg-dark text-light">
        <h1 class="text-center text-4xl font-bold mt-10">Welcome to our website</h1>
        <p class="text-center text-lg mt-5">This is a simple website built using Laravel and Tailwind CSS.</p>
        <div class="flex justify-center mt-10">
            <a href="<?php echo e(route('products.create')); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Add New Product</a>
        </div>
        <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="card">
            <img src="products.view(<?php echo e($product->id); ?>)" class="card-img-top" alt="...">
            <div class="card-body">
            <h5 class="card-title">
                <?php echo e($product->name); ?>

                <span class="badge bg-primary">$ <?php echo e($product->price); ?></span>
            </h5>
            <p class="card-text mb-3">
                <?php echo e($product->description); ?>

            </p>
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\menus-2\resources\views/products/index.blade.php ENDPATH**/ ?>