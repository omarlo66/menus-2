
<?php
// resources/views/welcome.blade.php

?>
<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">
    <div class="text-center">
        <a href="<?php echo e(route('login')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded">Login</a>
        <a href="<?php echo e(route('register')); ?>" class="bg-green-500 text-white px-4 py-2 rounded">Register</a>
        <br>
        <br>
        <br>
        <h1 class="text-white text-4xl font-bold mb-4">Welcome My Website</h1>
        <p class="text-gray-300 text-lg">This is th An online platform for displaying and managing productes</p>

        <!-- أزرار التنقل إلى الصفحات الجديدة -->
        <div class="mt-6 flex gap-4 justify-center">
            <a href="<?php echo e(route('categories.create')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded-lg hover:bg-blue-600 transition">Add Category</a>
            <a href="<?php echo e(route('products.create')); ?>" class="bg-green-500 text-white px-4 py-2 rounded-lg hover:bg-green-600 transition">Add Product</a>
        </div>
        <br>
        <br>
        <br>
        <div>
        <a href="<?php echo e(route('categories.index')); ?>" class="bg-blue-500 text-white px-4 py-2 rounded">View Products</a>
        </div>
    </div>
   

    
</body>
</html>

<?php /**PATH C:\xampp\htdocs\menus-2\resources\views/welcome.blade.php ENDPATH**/ ?>