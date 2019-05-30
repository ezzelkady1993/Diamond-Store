<?php $__env->startSection('content'); ?>

	<h3>Products</h3>

	<ul class="container">
			<?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<li class="row">
					<div class="col-md-8">
						<h4>Name of product:<?php echo e($product->name); ?></h4>
						<h4>Category:<?php echo e(count($product->category)?$product->category->name:"N/A"); ?></h4>

						<?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<img src="<?php echo e($image->image_path); ?>" style="max-width: 100px">
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						<a href="<?php echo e(route('product.edit',$product->id)); ?>" class="btn btn-primary btn-sm ">Edit Product</a>
						<br>

						<form action="<?php echo e(route('product.destroy',$product->id)); ?>"  method="POST">
							<?php echo e(csrf_field()); ?>

           					<?php echo e(method_field('DELETE')); ?>

           					<input class="btn btn-sm btn-danger" type="submit" value="Delete">
         				</form>

         				<div class="col-md-4">
         					<form action="/admin/product/image-upload/<?php echo e($product->id); ?>" method="POST" class="dropzone" id="my-awesome-dropzone-<?php echo e($product->id); ?>">
              					<?php echo e(csrf_field()); ?>

              				</form>
              			</div>
              		</div>
				</li>
			<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
				<h4>No Product</h4>
			<?php endif; ?>
	</ul>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>