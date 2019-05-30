<?php $__env->startSection('content'); ?>

<h3>Cart Items</h3>
	<div class="row">
		
		<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>qty</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			<?php $__currentLoopData = $cartItems; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cartItem): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				<tr>
					<td><?php echo e($cartItem->name); ?></td>
					<td><?php echo e($cartItem->price); ?></td>
					<td width="50px">
						<?php echo Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']); ?>

							<?php echo e(Form::text('qty',$cartItem->qty)); ?>

							
					</td>
					<td>

							<input type="submit" style="float: left;" class="button success small" value="OK">
						<?php echo Form::close(); ?>


						<?php echo Form::open(['route' => ['cart.destroy',$cartItem->rowId], 'method' => 'POST']); ?>

							<?php echo e(csrf_field()); ?>

							<?php echo e(method_field('DELETE')); ?>

							<?php echo e(Form::submit('Delete' , array('class'=>'button small alert'))); ?>

						<?php echo Form::close(); ?>

					</td>
				</tr>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>	
			<tr>
				<td></td>
				<td>
					Tax :$ <?php echo e(Cart::tax()); ?><br>
					Sub Total :$ <?php echo e(Cart::subtotal()); ?><br>
					Grand Total :$ <?php echo e(Cart::total()); ?>

				</td>
				<td>
					Items :<?php echo e(Cart::count()); ?><br>
				</td>
				<td></td>
			</tr>
			
		</tbody>
	</table>

	<a href="<?php echo e(route('checkout.shipping')); ?>" class="button">Checkout</a>

	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>