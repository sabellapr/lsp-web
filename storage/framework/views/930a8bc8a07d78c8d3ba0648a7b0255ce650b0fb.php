<?php $__env->startSection('content'); ?>
<div class="container">
    <a class="btn btn-primary mb-2" href="/">Kembali</a>
    <div class="card">
        <div class="card-body bg-warning text-danger">
            <div class="d-flex">
                <h4 class="my-auto">Master Produk</h4>
                <a class="btn btn-primary ml-auto" href="/products/create">Tambah</a>
            </div>
            <hr>
            <?php if(session('errorMessage')): ?>
            <span class="text-danger"><?php echo e(session('errorMessage')); ?></span>
            <?php endif; ?>
            <table class="table table-warning table-striped mb-0">
                <thead>
                    <tr>
                        <th>Nama Item</th>
                        <th>Gambar</th>
                        <th>Harga</th>
                        <th>Stok</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($product->name); ?></td>
                        <td class="fit">
                            <?php if(strlen($product->image_url) > 0): ?>
                            <img src="<?php echo e(asset('storage/' . $product->image_url)); ?>" alt="">
                            <?php else: ?>
                            -
                            <?php endif; ?>
                        </td>
                        <td class="text-right"><?php echo e(number_format($product->price)); ?></td>
                        <td><?php echo e($product->quantity); ?></td>
                        <td class="fit">
                            <form method="POST" action="/products/<?php echo e($product->id); ?>">
                                <?php echo method_field('DELETE'); ?>
                                <?php echo csrf_field(); ?>
                                <a class="btn btn-primary" href="/products/<?php echo e($product->id); ?>/edit">Edit</a>
                                <button class="btn btn-danger" type="submit">Hapus</button>
                            </form>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\lsp\web\cashier-lsp-main\resources\views/products/index.blade.php ENDPATH**/ ?>