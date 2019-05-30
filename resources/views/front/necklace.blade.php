@extends('layouts.main')

@section('title','Necklace')

@section('content')

<!-- Latest Necklace -->
		<div class="row">
			@forelse($necklaces as $necklace)
				<div class="small-3 columns">
					<div class="item-wrapper" style="width: 270px;height: 400px;">
						<div class="img-wrapper" style="width: 230px;height: 200px;">
							<a href="{{route('cart.addItem',$necklace->id)}}" class="button expanded add-to-cart">
								Add to cart
							</a>
				 			<a href="">
								<img src="{{url('images',$necklace->image)}}">
							</a>
						</div>
						<a href="{{route('reserve')}}">
							<h3>
								{{$necklace->name}}
							</h3>
						</a>
						<h5>
							${{$necklace->price}}
						</h5>
						<p>
							{{$necklace->description}}
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