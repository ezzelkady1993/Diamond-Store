<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head> 
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">   

        <!-- CSRF Token -->
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

        <title><?php echo $__env->yieldContent('title','Diamond Store'); ?></title>    
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <!-- Fonts -->
        <link rel="dns-prefetch" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet" type="text/css">    
        
        <link rel="stylesheet" media="screen" href="https://netdna.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">    


        <link rel="stylesheet" media="screen" type="text/css" href="<?php echo e(asset('styles/bootstrap4/admin.min.css')); ?>">

        <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.css">   -->

        <link href="<?php echo e(asset('dist/css/app.css')); ?>" rel="stylesheet">
        <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
        <link rel="stylesheet" href="<?php echo e(asset('css/parsley.css')); ?>">
        <link href="<?php echo e(asset('dist/css/bootstrap.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('dist/css/bootstrap.min.css')); ?>" rel="stylesheet">
        <link href="<?php echo e(asset('dist/css/foundation.css')); ?>" rel="stylesheet">
    </head>

    <body> 
        <?php echo $__env->make('admin.layout.includes.header', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
        <div class="page-content">        
            <?php if(Session::has('message')): ?>            
            <div class="alert alert-info">                
                <p><?php echo e(Session::get('message')); ?></p>            
            </div>        
            <?php endif; ?>            

            <?php if(count($errors) > 0): ?>                
            <div class="alert alert-danger">                    
                <ul>                        
                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>                            
                    <li><?php echo e($error); ?></li>                        
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>                    
                </ul>                
            </div>            
            <?php endif; ?>    

            <div class="row">        
                <?php echo $__env->make('admin.layout.includes.sidenav', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>        
                <div class="col-md-10 display-area">            
                    <div class="row text-center">                
                        <div class="col-md-10 col-md-offset-1">                    
                            <div class="content-box-large">                        <?php echo $__env->yieldContent('content'); ?>                    
                            </div>                
                        </div>            
                    </div>        
                </div>
                    <!--/Display area after sidenav-->    
            </div>
        </div>

            <!--/Page Content-->
            <script src="https://code.jquery.com/jquery.js"></script>
            <script src="<?php echo e(asset('js/parsley.min.js')); ?>"></script>
            <script src="<?php echo e(asset('js/app.js')); ?>"></script>
            <script src="https://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
            <script>    
                $(document).ready(function () {        
                    $(".submenu > a").click(function (e) {            
                        e.preventDefault();            
                        var $li = $(this).parent("li");            
                        var $ul = $(this).next("ul");            
                        if ($li.hasClass("open")) {                
                            $ul.slideUp(350);                
                            $li.removeClass("open");            
                        } else {                
                            $(".nav > li > ul").slideUp(350);                
                            $(".nav > li").removeClass("open");                
                            $ul.slideDown(350);                
                            $li.addClass("open");            
                        }        
                    });    
                });
            </script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/dropzone/5.1.1/dropzone.js"></script>
        <?php echo $__env->yieldContent('js'); ?>
    </body>
</html>