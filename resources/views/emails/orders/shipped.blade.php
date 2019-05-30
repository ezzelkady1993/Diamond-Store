@component('mail::message')
# Order Shipped

Order Has Been Shipped.
Your Total Price {{$order->total}}

@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
