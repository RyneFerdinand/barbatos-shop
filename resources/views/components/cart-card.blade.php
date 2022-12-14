@props(['product', 'qty'])
<div class="flex flex-row w-[100%] bg-white justify-between mb-3">
    <div class="flex flex-row w-[100%]">
        <img src="{{$product->photo}}">
        <div class="p-3">
            <h2 class="font-medium text-2xl ">
                {{ Str::limit($product->name, 25) }}
            </h2>
            <p>Quantity: {{$qty}}</p>
            <?php
                $totalPrice = $qty * $product->price
            ?>
            <p>Total Price IDR {{$totalPrice}}</p>

        </div>
    </div>
    <form class="flex flex-row pr-3 pt-2" method="POST" action="{{url('/cart/'.Auth::user()->id.'/'.$product->id)}}">
        @csrf
        {{method_field('DELETE')}}
        <button class="bg-white text-rounded-md border-[2px] border-[rgb(255,0,0)] h-[40px] w-[40px] mt-2 rounded-md fa fa-trash text-[rgb(255,0,0)] hover:bg-[rgb(255,0,0)] hover:text-white transition-all"></button>
    <form>
</div>
