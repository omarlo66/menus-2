
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products</title>
    <link rel="stylesheet" href="https://cdn.tailwindcss.com">

</head>
<body class="container bg-dark text-light">
    <h1>Products</h1>
    <h2>Products List</h2>
    <a href="<?php echo e(route('products.create')); ?>">Add Product</a>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div>
        <h2><?php echo e($product->product_name); ?></h2>
        <p><?php echo e($product->price); ?></p>
        <p><?php echo e($product->discount); ?></p>
        <p><?php echo e($product->category_id); ?></p>
        <img src="<?php echo e(asset('storage/images/'.$product->image)); ?>" alt="<?php echo e($product->product_name); ?>">
    </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\menus-2\resources\views/products/index.blade.php ENDPATH**/ ?>