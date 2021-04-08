<div class="container-fluid">
    <div class="d-flex">
        <a class="btn btn-primary ml-auto mb-2" href="/checkout">Riwayat Transaksi</a>
    </div>
    <div class="row">
        <div class="col-5 pr-2">
            <div class="card">
                <div class="card-body  bg-warning text-danger">
                    <div class="d-flex">
                        <h5 class="my-auto">List Produk</h5>
                        <a class="btn btn-primary ml-auto" href="/products">Master Produk</a>
                    </div>
                    <hr>
                    <table class="table table-warning table-striped m-0">
                        <thead>
                            <tr>
                                <th>Gambar</th>
                                <th>Nama</th>
                                <th>Harga</th>
                                <th>Stok</th>
                                <th>Jumlah Pembelian</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td class="fit">
                                    <?php if(strlen($product->image_url) > 0): ?>
                                    <img src="<?php echo e(asset('storage/' . $product->image_url)); ?>" alt="">
                                    <?php else: ?>
                                    -
                                    <?php endif; ?>
                                </td>
                                <td><?php echo e($product->name); ?></td>
                                <td class="text-right"><?php echo e(number_format($product->price)); ?></td>
                                <td><?php echo e($product->quantity); ?></td>
                                <td>
                                    <input class="form-control" type="number" min="0" max="<?php echo e($product->quantity + (isset($tempCart[$product->id]) && $tempCart[$product->id] ? $tempCart[$product->id] : 0)); ?>" wire:model="tempCart.<?php echo e($product->id); ?>" wire:change="saveCart(<?php echo e($product); ?>)">
                                </td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="col-7 pl-1">
            <div class="card">
                <div class="card-body bg-warning text-danger">
                    <h5>Keranjang</h5>
                    <hr>
                    <table class="table table-warning table-striped m-0">
                        <thead>
                            <tr>
                                <th>Nama</th>
                                <th>Kuantitas</th>
                                <th>Harga</th>
                                <th>Total</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $cart; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <tr>
                                <td><?php echo e($item->product->name); ?></td>
                                <td><?php echo e($item->quantity); ?></td>
                                <td class="text-right"><?php echo e(number_format($item->price)); ?></td>
                                <td class="text-right"><?php echo e(number_format($item->quantity * $item->price)); ?></td>
                            </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <th class="h4 text-right" colspan="3">Total Pembelian :</th>
                                <th class="h4 text-right"><?php echo e(number_format($total)); ?></th>
                            </tr>
                        </tfoot>
                    </table>
                    <hr>
                    <form wire:submit.prevent="checkout">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 m-auto">Nama Pembeli</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" wire:model="customerName">
                                        <?php $__errorArgs = ['customerName'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group row">
                                    <label class="col-sm-4 m-auto">Pembayaran</label>
                                    <div class="col-sm-8">
                                        <input class="form-control text-right" type="text" wire:model="payment">
                                        <?php $__errorArgs = ['payment'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?> <span class="text-danger"><?php echo e($message); ?></span> <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <h4 class="text-right">
                            Kembalian : <?php echo e($payment >= $total ? number_format($change) : 'Pembayaran Kurang'); ?>

                        </h4>
                        <hr>
                        <div class="d-flex">
                            <button class="btn btn-danger ml-auto" type="submit">Checkout</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><?php /**PATH C:\Users\ASUS\Documents\lsp\web\cashier-lsp-main\resources\views/livewire/cashier.blade.php ENDPATH**/ ?>