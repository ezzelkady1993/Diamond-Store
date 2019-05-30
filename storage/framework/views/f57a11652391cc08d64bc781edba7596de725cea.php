<?php $__env->startSection('content'); ?>


<section class="hero text-center">
			<br/>
			<br/>
			<br/>
			<br/>
			<h2>
				<strong>
					Hey! Welcome to Diamond's Store
				</strong>
			</h2>
			<br>
		</section>
		<br/>
		<div class="subheader text-center">
			<h2>
				Diamond's Latest Products
			</h2>
		</div>

		<!-- Latest Products -->
		<div class="row">
			<?php $__empty_1 = true; $__currentLoopData = $products->chunk(4); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $chunk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<?php $__currentLoopData = $chunk; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
					<div class="small-3 columns">
						<div class="item-wrapper" style="width: 270px;height: 400px;">
							<div class="img-wrapper" style="width: 230px;height: 200px;">
								<a href="<?php echo e(route('cart.addItem',$product->id)); ?>" class="button expanded add-to-cart">
									Add to cart
								</a>
				 				<a href="">
									<img src="<?php echo e(url('images',$product->image)); ?>">
								</a>
							</div>
							<a href="<?php echo e(route('reserve')); ?>">
								<h3>
									<?php echo e($product->name); ?>

								</h3>
							</a>
							<h5>
								$<?php echo e($product->price); ?>

							</h5>
							<p>
								<?php echo e($product->description); ?>

							</p>
						</div>
					</div>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
				<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					<h3>No Products</h3>
			<?php endif; ?>
		</div>

		<!-- Footer -->
		<br>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>