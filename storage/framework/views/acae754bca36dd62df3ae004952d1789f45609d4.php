<?php $__env->startSection('content'); ?>
<div class="container">
    <a class="btn btn-primary mb-2" href="/">Kembali</a>
    <div class="card">
        <div class="card-body bg-warning text-danger">
            <h4 class="my-auto">Riwayat Transaksi</h4>
            <hr>
            <table class="table table-warning table-striped mb-0">
                <thead>
                    <tr>
                        <th>Nama Pembeli</th>
                        <th>Total</th>
                        <th>Pembayaran</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    <?php $__currentLoopData = $transactions; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $transaction): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <tr>
                        <td><?php echo e($transaction->customer_name); ?></td>
                        <td><?php echo e(number_format($transaction->total)); ?></td>
                        <td><?php echo e(number_format($transaction->payment)); ?></td>
                        <td class="fit">
                            <a class="btn btn-primary" href="/checkout/<?php echo e($transaction->id); ?>">Detil</a>
                        </td>
                    </tr>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\lsp\web\cashier-lsp-main\resources\views/checkout/index.blade.php ENDPATH**/ ?>