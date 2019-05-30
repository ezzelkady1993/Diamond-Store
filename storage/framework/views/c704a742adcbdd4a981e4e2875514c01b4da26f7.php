<?php $__env->startSection('content'); ?>

	<h3>Admin</h3>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>