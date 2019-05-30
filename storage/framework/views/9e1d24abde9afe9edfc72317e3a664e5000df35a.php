<?php $__env->startSection('title','Rings'); ?>

<?php $__env->startSection('content'); ?>


<!-- Latest RINGS -->
		<div class="row">
			<?php $__empty_1 = true; $__currentLoopData = $rings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $ring): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					<div class="small-3 columns">
						<div class="item-wrapper" style="width: 270px;height: 400px;">
							<div class="img-wrapper" style="width: 230px;height: 200px;">
								<a href="<?php echo e(route('cart.addItem',$ring->id)); ?>" class="button expanded add-to-cart">
									Add to cart
								</a>
				 				<a href="">
									<img src="<?php echo e(url('images',$ring->image)); ?>">
								</a>
							</div>
							<a href="<?php echo e(route('reserve')); ?>">
								<h3>
									<?php echo e($ring->name); ?>

								</h3>
							</a>
							<h5>
								$<?php echo e($ring->price); ?>

							</h5>
							<p>
								<?php echo e($ring->description); ?>

							</p>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					<h3>No Products</h3>
			<?php endif; ?>
		</div>


		<!-- Footer -->
		<br>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>