<?php $__env->startSection('content'); ?>

	<div class="navbar">
		<a class="navbar-brand" href="#">Categories=></a>
		<ul class="nav navbar-nav">
			<?php if(!empty($categories)): ?>
				<?php $__empty_1 = true; $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
					<li>
						<a href="<?php echo e(route('category.show',$category->id)); ?>"><?php echo e($category->name); ?></a>
					</li>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					<li>No data</li>
				<?php endif; ?>
			<?php endif; ?>
		</ul>

		<a class="btn btn-primary" data-toggle="modal" href="#modal-id">Add Category</a>
		<div class="modal fade" id="modal-id">
			<div class="modal-dialog">
				
				<?php echo Form::open(['route' => 'category.store','method' => 'post']); ?>

					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title">Add Category</h4>
						</div>
						<div class="modal-body">
							<div class="form-group">
								<?php echo e(Form::label('name' ,'Name')); ?>

								<?php echo e(Form::text('name' ,null, array('class' => 'form-control'))); ?>

							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
							<button type="submit" class="btn btn-primary">Save changes</button>
						</div>
					</div> <!--/.modal content-->
				<?php echo Form::close(); ?>


			</div> <!--/.modal dialog-->
		</div> <!--/.modal -->
	</div>


	<?php if(!empty($products)): ?>
		<?php $__env->startSection; ?>
			<h3>Products</h3>

			<table class="table table-hover">
				<thead>
					<tr>
						<th>Products</th>
					</tr>
				</thead>

				<?php $__empty_1 = true; $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
				<thead>
					<tr>
						<td><?php echo e($product->name); ?></td>
					</tr>
					<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
					<tr>
						<td>No Data</td>
					</tr>
				<?php endif; ?>
				</thead>
			</table>
		<?php $__env->stopSection(); ?>
	<?php endif; ?>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>