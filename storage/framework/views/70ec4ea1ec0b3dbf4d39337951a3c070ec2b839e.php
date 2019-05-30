<?php $__env->startSection('content'); ?>

	<h3>Orders</h3>
	<ul>
		<?php $__currentLoopData = $orders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $order): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<li>
				<h5>Order By <?php echo e($order->user->name); ?> <br> Total Price <?php echo e($order->total); ?></h5>

				<form action="<?php echo e(route('toggle.deliver',$order->id)); ?>" method="POST" class="pull-right">
					<?php echo e(csrf_field()); ?>

					<label for="delivered">Delivered</label>
					<input type="checkbox" name="delivered" value="1" <?php echo e($order->delivered==1?"checked":""); ?>>
					<input type="submit" value="Submit">
				</form>

				<h5>Items</h5>
				<table class="table table-bordered">
					<tr>
						<th>Name</th>
						<th>qty</th>
						<th>Price</th>
					</tr>
					<?php $__currentLoopData = $order->orderItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
						<tr>
							<td><?php echo e($item->name); ?></td>
							<td><?php echo e($item->pivot->qty); ?></td>
							<td><?php echo e($item->pivot->total); ?></td>
						</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				</table>
			</li>
		<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
	</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>