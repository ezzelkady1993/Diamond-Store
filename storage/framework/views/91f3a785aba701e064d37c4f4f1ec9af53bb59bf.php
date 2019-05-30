<?php $__env->startSection('content'); ?>

    <h3>Update Product</h3>

    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <?php echo Form::model($product,['route' => ['product.update',$product->id], 'method' => 'PUT', 'files' => true]); ?>

            <div class="form-group">
                <?php echo e(Form::label('name', 'Name')); ?>

                <?php echo e(Form::text('name', null, array('class' => 'form-control','required'=>'','minlength'=>'5'))); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('description', 'Description')); ?>

                <?php echo e(Form::text('description', null, array('class' => 'form-control'))); ?>

            </div>
            <div class="form-group">
                <?php echo e(Form::label('price', 'Price')); ?>

                <?php echo e(Form::text('price', null, array('class' => 'form-control'))); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('category_id', 'Categories')); ?>

                <?php echo e(Form::select('category_id', $categories, null, ['class' => 'form-control','placeholder'=>'Select Category'])); ?>

            </div>

            <div class="form-group">
                <?php echo e(Form::label('image', 'Image')); ?>

                <?php echo e(Form::file('image',array('class' => 'form-control'))); ?>

            </div>

             <?php echo e(Form::submit('Edit', array('class' => 'btn btn-default'))); ?>

            <?php echo Form::close(); ?>



        </div>
    </div>



<?php $__env->stopSection(); ?>
<?php echo $__env->make('admin.layout.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>