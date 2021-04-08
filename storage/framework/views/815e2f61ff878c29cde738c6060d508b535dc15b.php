<?php $__env->startSection('content'); ?>
<div class="container">
    <a class="btn btn-primary mb-2" href="/products">Kembali</a>
    <div class="card">
        <div class="card-body bg-warning text-danger">
            <h4 class="my-auto">Master Produk</h4>
            <hr>
            <form method="POST" action="/products/<?php echo e($product->id); ?>" enctype="multipart/form-data">
                <?php echo method_field('PUT'); ?>
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <label for="name">Nama*</label>
                    <input id="name" class="form-control" type="text" name="name" value="<?php echo e(old('name') ?? $product->name); ?>">
                    <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="image">Gambar</label>
                    <div class="custom-file">
                        <input id="image" class="custom-file-input" type="file" accept="image/png, image/jpeg" name="image" value="<?php echo e(old('image')); ?>">
                        <label id="image-label" class="custom-file-label" for="image">Pilih gambar</label>
                    </div>
                    <span>Kosongi apabila tidak ingin mengupdate gambar yang sudah ada</span>
                    <?php $__errorArgs = ['image'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="price">Harga*</label>
                    <input id="price" class="form-control" type="text" name="price" value="<?php echo e(old('price') ?? $product->price); ?>">
                    <?php $__errorArgs = ['price'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <div class="form-group">
                    <label for="quantity">Stock*</label>
                    <input id="quantity" class="form-control" type="text" name="quantity" value="<?php echo e(old('quantity') ?? $product->quantity); ?>">
                    <?php $__errorArgs = ['quantity'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                    <div class="text-danger"><?php echo e($message); ?></div>
                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
                <hr>
                <div class="d-flex">
                    <button class="btn btn-primary ml-auto" type="submit">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>
<script>
    document.getElementById('image').addEventListener('change', (e) => {
        const fullPath = document.getElementById('image').value

        if (fullPath) {
            const startIndex = (fullPath.indexOf('\\') >= 0 ? fullPath.lastIndexOf('\\') : fullPath.lastIndexOf('/'))
            let filename = fullPath.substring(startIndex)

            if (filename.indexOf('\\') === 0 || filename.indexOf('/') === 0) {
                filename = filename.substring(1)
            }

            document.getElementById('image-label').innerHTML = filename
        }
    })
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\lsp\web\cashier-lsp-main\resources\views/products/edit.blade.php ENDPATH**/ ?>