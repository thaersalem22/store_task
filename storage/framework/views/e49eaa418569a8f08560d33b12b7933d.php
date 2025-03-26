<?php $__env->startSection('content'); ?>
<div class="py-3">
    <h2>قائمة المنتجات</h2>
    <a href="<?php echo e(route('products.create')); ?>" class="btn btn-success mb-3">إضافة منتج جديد</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>اسم المنتج</th>
                <th>الكمية</th>
                <th>السعر</th>
                <th>الصنف</th>
                <th>الوصف</th>
                <th>الإجراءات</th>
            </tr>
        </thead>
        <tbody>
            <?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td><?php echo e($product->name); ?></td>
                    <td><?php echo e($product->quantity); ?></td>
                    <td><?php echo e($product->price); ?></td>
                    <td><?php echo e($product->category->name ?? 'غير محدد'); ?></td>
                    <td><?php echo e($product->description); ?></td>
                    <td>
                        <a href="<?php echo e(route('products.edit', $product->id)); ?>" class="btn btn-info btn-sm">تعديل</a>
                        <form action="<?php echo e(route('products.destroy', $product->id)); ?>" method="POST" style="display:inline-block;">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="btn btn-danger btn-sm" onclick="return confirm('هل أنت متأكد من حذف هذا المنتج؟')">حذف</button>
                        </form>
                    </td>
                </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="6" class="text-center">لا توجد منتجات مضافة حاليًا.</td>
                </tr>
            <?php endif; ?>
        </tbody>
    </table>
</div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.admin', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\laragon\www\Store\resources\views/admin/products/index.blade.php ENDPATH**/ ?>