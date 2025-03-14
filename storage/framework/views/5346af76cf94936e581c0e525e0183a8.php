<!-- resources/views/welcome.blade.php -->


<?php $__env->startSection('title', 'Welcome Page'); ?>

<?php $__env->startSection('content'); ?>
    <div class="container bg-dark text-light">
        <h1 class="text-center text-4xl font-bold mt-10">Welcome to our website</h1>
        <p class="text-center text-lg mt-5">This is a simple website built using Laravel and Tailwind CSS.</p>
        <div class="flex justify-center mt-10">
            <a href="<?php echo e(route('products.index')); ?>" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">View Products</a>
        </div>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>Product Name</th>
                        <th>Price</th>
                        <th>Discount</th>
                        <th>Category</th>
                        <th>Image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($product->product_name); ?></td>
                            <td><?php echo e($product->price); ?></td>
                            <td><?php echo e($product->discount); ?></td>
                            <td><?php echo e($product->category->name); ?></td>
                            <td><img src="<?php echo e(asset('storage/' . $product->image)); ?>" alt="<?php echo e($product->product_name); ?>" width="100"></td>
                        </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\menus-2\resources\views/products/index.blade.php ENDPATH**/ ?>