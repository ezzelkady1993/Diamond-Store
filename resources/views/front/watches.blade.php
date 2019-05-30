@extends('layouts.main')

@section('title','Watches')

@section('content')

<!-- Latest Watches -->
		<div class="row">
			@forelse($watches as $watch)
					<div class="small-3 columns">
						<div class="item-wrapper" style="width: 270px;height: 400px;">
							<div class="img-wrapper" style="width: 230px;height: 200px;">
								<a href="{{route('cart.addItem',$watch->id)}}" class="button expanded add-to-cart">
									Add to cart
								</a>
				 				<a href="">
									<img src="{{url('images',$watch->image)}}">
								</a>
							</div>
							<a href="{{route('reserve')}}">
								<h3>
									{{$watch->name}}
								</h3>
							</a>
							<h5>
								${{$watch->price}}
							</h5>
							<p>
								{{$watch->description}}
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