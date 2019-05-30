<?php $__env->startComponent('mail::message'); ?>
# Order Shipped

Order Has Been Shipped.
Your Total Price <?php echo e($order->total); ?>


<?php $__env->startComponent('mail::button', ['url' => '']); ?>
Button Text
<?php echo $__env->renderComponent(); ?>

Thanks,<br>
<?php echo e(config('app.name')); ?>

<?php echo $__env->renderComponent(); ?>
