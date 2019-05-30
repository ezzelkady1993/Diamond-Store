@extends('layouts.main')

@section('title','Rings')

@section('content')


<!-- Latest RINGS -->
		<div class="row">
			@forelse($rings as $ring)
					<div class="small-3 columns">
						<div class="item-wrapper" style="width: 270px;height: 400px;">
							<div class="img-wrapper" style="width: 230px;height: 200px;">
								<a href="{{route('cart.addItem',$ring->id)}}" class="button expanded add-to-cart">
									Add to cart
								</a>
				 				<a href="">
									<img src="{{url('images',$ring->image)}}">
								</a>
							</div>
							<a href="{{route('reserve')}}">
								<h3>
									{{$ring->name}}
								</h3>
							</a>
							<h5>
								${{$ring->price}}
							</h5>
							<p>
								{{$ring->description}}
							</p>
						</div>
					</div>
				@empty
					<h3>No Products</h3>
			@endforelse
		</div>


		<!-- Footer -->
		<br>

@endsection