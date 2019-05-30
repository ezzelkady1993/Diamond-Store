<?php $__env->startSection('content'); ?>
	<div class="row">
		<div class="small-6 small-centered columns">
			<h3>Shipping Info</h3>

			<?php echo Form::open(['route' => 'address.store','method'=>'post']); ?>

						
				<div class="form-group">
					<?php echo e(Form::label('addressline' , 'Address Line')); ?>

					<?php echo e(Form::text('addressline' , null,array('class'=>'form-control'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('city' , 'City')); ?>

					<?php echo e(Form::text('city' , null,array('class'=>'form-control'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('state' , 'State')); ?>

					<?php echo e(Form::text('state' , null,array('class'=>'form-control'))); ?>

				</div>

				<div class="form-group">                
					<?php echo e(Form::label('zip' , 'Zip')); ?>

					<?php echo e(Form::text('zip' , null,array('class'=>'form-control'))); ?>            
				</div>

				<div class="form-group">
					<?php echo e(Form::label('country' , 'Country')); ?>

					<?php echo e(Form::text('country' , null,array('class'=>'form-control'))); ?>

				</div>

				<div class="form-group">
					<?php echo e(Form::label('phone' , 'Phone')); ?>

					<?php echo e(Form::text('phone' , null,array('class'=>'form-control'))); ?>

				</div>

				<?php echo e(Form::submit('Proceed To Payment' , array('class'=>'button success'))); ?>

			<?php echo Form::close(); ?>

		</div>
	</div>

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.main', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>