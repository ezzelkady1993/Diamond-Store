@extends('layouts.main')

@section('content')


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
			@forelse($products->chunk(4) as $chunk)
				@foreach($chunk as $product)
					<div class="small-3 columns">
						<div class="item-wrapper" style="width: 270px;height: 400px;">
							<div class="img-wrapper" style="width: 230px;height: 200px;">
								<a href="{{route('cart.addItem',$product->id)}}" class="button expanded add-to-cart">
									Add to cart
								</a>
				 				<a href="">
									<img src="{{url('images',$product->image)}}">
								</a>
							</div>
							<a href="{{route('reserve')}}">
								<h3>
									{{$product->name}}
								</h3>
							</a>
							<h5>
								${{$product->price}}
							</h5>
							<p>
								{{$product->description}}
							</p>
						</div>
					</div>
				@endforeach
				@empty
					<h3>No Products</h3>
			@endforelse
		</div>

		<!-- Footer -->
		<br>
@endsection