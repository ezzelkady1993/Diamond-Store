@extends('layouts.main')


@section('content')

<h3>Cart Items</h3>
	<div class="row">
		
		<table class="table table-hover">
		<thead>
			<tr>
				<th>Name</th>
				<th>Price</th>
				<th>qty</th>
				<th>Action</th>
			</tr>
		</thead>
		<tbody>
			@foreach($cartItems as $cartItem)
				<tr>
					<td>{{$cartItem->name}}</td>
					<td>{{$cartItem->price}}</td>
					<td width="50px">
						{!! Form::open(['route' => ['cart.update',$cartItem->rowId], 'method' => 'PUT']) !!}
							{{ Form::text('qty',$cartItem->qty) }}
							
					</td>
					<td>

							<input type="submit" style="float: left;" class="button success small" value="OK">
						{!! Form::close() !!}

						{!! Form::open(['route' => ['cart.destroy',$cartItem->rowId], 'method' => 'POST']) !!}
							{{csrf_field()}}
							{{method_field('DELETE')}}
							{{ Form::submit('Delete' , array('class'=>'button small alert')) }}
						{!! Form::close() !!}
					</td>
				</tr>
			@endforeach	
			<tr>
				<td></td>
				<td>
					Tax :$ {{Cart::tax()}}<br>
					Sub Total :$ {{Cart::subtotal()}}<br>
					Grand Total :$ {{Cart::total()}}
				</td>
				<td>
					Items :{{Cart::count()}}<br>
				</td>
				<td></td>
			</tr>
			
		</tbody>
	</table>

	<a href="{{route('checkout.shipping')}}" class="button">Checkout</a>

	</div>

@endsection