<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Add Product</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-900 flex items-center justify-center h-screen">
    <div class="w-96 flex flex-col gap-4 bg-white p-6 rounded-lg shadow-lg">
        <!-- رسالة نجاح عند إضافة المنتج -->
        <?php if(session('success')): ?>
            <div class="bg-green-500 text-white p-3 rounded-md text-center">
                <?php echo e(session('success')); ?>

            </div>
        <?php elseif(session('error')): ?>
            <div class="bg-red-500 text-white p-3 rounded-md text-center">
                <?php echo e(session('error')); ?>

            </div>
        <?php endif; ?>
        <!-- فورم إضافة منتج جديد -->
        <form action="<?php echo e(route('products.store')); ?>" method="POST" enctype="multipart/form-data" class="flex flex-col gap-4">
            <?php echo csrf_field(); ?>

            <!-- اسم المنتج -->
            <div class="flex flex-col gap-2">
                <label for="product_name" class="text-gray-800 font-semibold">Product Name</label>
                <input type="text" name="product_name" class="border w-full px-4 py-2 rounded-lg focus:ring-2 focus:ring-gray-900 outline-none" placeholder="Enter product name..." required>
            </div>

            <!-- السعر -->
            <div class="flex flex-col gap-2">
                <label for="price" class="text-gray-800 font-semibold">Price ($)</label>
                <input type="number" name="price" step="0.01" class="border w-full px-4 py-2 rounded-lg focus:ring-2 focus:ring-gray-900 outline-none" placeholder="Enter price..." required>
            </div>

            <!-- الخصم -->
            <div class="flex flex-col gap-2">
                <label for="discount" class="text-gray-800 font-semibold">Discount (%)</label>
                <input type="number" name="discount" step="0.01" class="border w-full px-4 py-2 rounded-lg focus:ring-2 focus:ring-gray-900 outline-none" placeholder="Enter discount (optional)">
            </div>

            <!-- الفئة -->
            <div class="flex flex-col gap-2">
                <label for="category_id" class="text-gray-800 font-semibold">Category</label>
                <select name="category_id" class="border w-full px-4 py-2 rounded-lg focus:ring-2 focus:ring-gray-900 outline-none" required>
                    <option value="" disabled selected>Select a category</option>
                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <option value="<?php echo e($category->id); ?>"><?php echo e($category->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </select>
            </div>

            <!-- الصورة -->
            <div class="flex flex-col gap-2">
                <label for="image" class="text-gray-800 font-semibold">Product Image</label>
                <input type="file" name="image" class="border w-full px-4 py-2 rounded-lg focus:ring-2 focus:ring-gray-900 outline-none" accept="image/*">
            </div>

            <!-- زر الحفظ -->
            <button type="submit" class="bg-gray-900 text-white px-4 py-2 rounded-lg hover:bg-gray-800 transition">Add Product</button>
        </form>
    </div>
</body>
</html>
<?php /**PATH C:\xampp\htdocs\menus-2\resources\views/products/create.blade.php ENDPATH**/ ?>