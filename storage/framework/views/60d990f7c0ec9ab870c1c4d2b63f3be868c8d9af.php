<?php $__env->startSection('content'); ?>
<div class="container">
    <a class="btn btn-primary mb-2" href="/checkout">Riwayat Transaksi</a>
    <a class="btn btn-primary mb-2" href="/">Buat Transaksi Baru</a>
    <div class="card">
        <div class="card-body bg-warning text-danger">
            <h4>Pembelian Berhasil</h4>
            <hr>
            <table class="mb-3">
                <tr>
                    <th>Nama Customer</th>
                    <th>:</th>
                    <td><?php echo e($transaction->customer_name); ?></td>
                </tr>
                <tr>
                    <th>Tanggal Transaksi</th>
                    <th>:</th>
                    <td><?php echo e($transaction->created_at); ?></td>
                </tr>
            </table>
            <table class="table table-warning table-striped mb-0">
                <thead>
                    <tr>
                        <th>Gambar</th>
                        <th>Nama Item</th>
                        <th>Quantity</th>
                        <th>Harga</th>
                        <th>Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $transaction->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td class="fit">
                            <?php if(strlen($detail->product->image_url) > 0): ?>
                            <img src="<?php echo e(asset('storage/' . $detail->product->image_url)); ?>" alt="">
                            <?php else: ?>
                            -
                            <?php endif; ?>
                        </td>
                        <td><?php echo e($detail->product->name); ?></td>
                        <td><?php echo e($detail->quantity); ?></td>
                        <td class="text-right"><?php echo e(number_format($detail->price)); ?></td>
                        <td class="text-right"><?php echo e(number_format($detail->quantity * $detail->price)); ?></td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
                <tfoot>
                    <tr class="h4">
                        <td class="text-right" colspan="4">Total Pembelian</td>
                        <td class="text-right"><?php echo e(number_format($transaction->total)); ?></td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="4">Total Pembayaran</td>
                        <td class="text-right"><?php echo e(number_format($transaction->payment)); ?></td>
                    </tr>
                    <tr>
                        <td class="text-right" colspan="4">Total Kembalian</td>
                        <td class="text-right"><?php echo e(number_format($transaction->payment - $transaction->total)); ?></td>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\lsp\web\cashier-lsp-main\resources\views/checkout/show.blade.php ENDPATH**/ ?>