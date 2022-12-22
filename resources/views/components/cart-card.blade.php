@props(['product', 'qty'])
<div class="flex flex-row w-[100%] bg-white mb-3">
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
    <form enctype="multipart/form-data" method="POST" action="{{url('/product/cart/'.$product->id)}}" class="pr-3 pt-2">
        {{method_field('DELETE')}}
        {{csrf_field()}}
        <button type="submit" class="bg-white text-rounded-md border-[2px] border-[rgb(255,0,0)] h-[40px] w-[40px] mt-2 rounded-md fa fa-trash text-[rgb(255,0,0)] hover:bg-[rgb(255,0,0)] hover:text-white transition-all"></button>
    </form>
</div>
