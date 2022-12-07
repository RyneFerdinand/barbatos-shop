@props(['product'])
<a class="border-[1px] border-gray-300 flex flex-col w-50 shrink-0 cursor-pointer" href="{{url('/product/'.$product->id)}}">
    <img src="{{$product->photo}}">
    <div class="py-2 px-2 bg-white">
        <p>
            {{ Str::limit($product->name, 25) }}
        </p>
        <p class="font-bold">
            IDR {{$product->price}}
        </p>
    </div>
</a>
