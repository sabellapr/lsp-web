<?php $__env->startSection('content'); ?>
<?php
if (! isset($_instance)) {
    $html = \Livewire\Livewire::mount('cashier', [])->html();
} elseif ($_instance->childHasBeenRendered('JxehBCz')) {
    $componentId = $_instance->getRenderedChildComponentId('JxehBCz');
    $componentTag = $_instance->getRenderedChildComponentTagName('JxehBCz');
    $html = \Livewire\Livewire::dummyMount($componentId, $componentTag);
    $_instance->preserveRenderedChild('JxehBCz');
} else {
    $response = \Livewire\Livewire::mount('cashier', []);
    $html = $response->html();
    $_instance->logRenderedChild('JxehBCz', $response->id(), \Livewire\Livewire::getRootElementTagName($html));
}
echo $html;
?>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\ASUS\Documents\lsp\web\cashier-lsp-main\resources\views/home.blade.php ENDPATH**/ ?>