<!doctype html>
<html class="no-js" lang="en" dir="ltr">
	<head>
		<meta charset="utf-8"/>
		<meta http-equiv="x-ua-compatible" content="ie=edge"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!--CSRF Token -->
		<meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

		<title>
			<?php echo $__env->yieldContent('title','Diamond Store'); ?>
		</title>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/motion-ui/1.1.1/motion-ui.min.css">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
		<link rel="stylesheet" href="<?php echo e(asset('dist/css/foundation.css')); ?>"/>
		<link rel="stylesheet" href="<?php echo e(asset('dist/css/app.css')); ?>"/>
		
		<link href="http://cdnjs.cloudflare.com/ajax/libs/foundicons/3.0.0/foundation-icons.css" rel="stylesheet">


	</head>
	<body>
		<div class="top-bar">
			<div style="color:white" class="top-bar-left">
				<h4 class="brand-title">
					
					<a href="<?php echo e(url('/')); ?>">
						<i class="fa fa-home fa-lg" aria-hidden="true">
						</i>
						Diamond's Store
					</a>
				</h4>
			</div>
			<div class="top-bar-right">
				<ol class="menu">
					<li>
						<a href="<?php echo e(route('rings')); ?>">
							RINGS
						</a>
					</li>
					<li>
						<a href="<?php echo e(route('necklace')); ?>">
							NECKLCE
						</a>
					</li>
					<li>
						<a href="<?php echo e(route('watches')); ?>">
							WATCHES
						</a>
					</li>
					<li>
						<a href="#">
							CONTACT
						</a>
					</li>
					<li>

						<a href="<?php echo e(route('cart.index')); ?>">
							<i class="fa fa-shopping-cart fa-2x" aria-hidden="true">
							</i>
							CART
							<span class="alert badge">
								<?php echo e(Cart::count()); ?>

							</span>
						</a>
					</li>
				</ol>
				<div class="reveal" id="checkoutDetailModal" data-reveal>
					<cart-detail :cart="cart" :carttotal="cartTotal" :totalitems="totalItems"></cart-detail>

					<button class="close-button" data-close aria-label="Close modal" type="button">
						<span aria-hidden="true"></span>
					</button>
				</div>
			</div>
		</div>

<?php echo $__env->yieldContent('content'); ?>

<footer class="footer">
		<div class="row full-width">
			<div class="small-12 medium-4 large-4 columns">
				<I class="fi-laptop"></i>
				<p>Coded with love by Ezz Elkady </p>
			</div>
			<div class="small-12 medium-4 large-4 columns">
				<I class="fi-html5"></i>
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugit impedit consequuntur at! Amet sed itaque
					Nostrum, distinctio eveniet odio, id ipsam fuga quam minima cumque nobis veniam voluptates deserunt!</p>
			</div>

			<div class="small-6 medium-4 large-4 columns">
				<h4>Follow Us</h4>
				<ul class="footer-links">
					<li><a href="https://github.com/webdevmatics">GitHub</a></li>
					<li><a href="#">Facebook</a></li>
					<li><a href="https://twitter.com/webdevmatics">Twitter</a></li>
				</ul>
			</div>
	</footer>

	<script src="<?php echo e(asset('dist/js/vendor/jquery.js')); ?>"></script>
	<script type="text/javascript" src="https://js.stripe.com/v2"/></script>
	<script type="text/javascript">
		Stripe.setPublishableKey('pk_test_GryUHqXe48kgNc75J2BovmeN');
	</script>
	<script src="<?php echo e(asset('dist/js/app.js')); ?>"></script>
	<script src="<?php echo e(asset('js/app.js')); ?>"></script>
	<script src="<?php echo e(asset('dist/js/vendor/foundation.js')); ?>"></script>
	<script>
		$(document).foundation();
	</script>
	</body>
</html>