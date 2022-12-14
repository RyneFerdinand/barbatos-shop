@props(['product'])
<a class="border-[1px] border-gray-300 flex flex-col w-52 shrink-0 cursor-pointer mb-5 mx-2" href="{{url('/product/'.$product->id)}}">
    <img src="{{asset($product->photo)}}">
    <div class="py-2 px-2 bg-white">
        <p>
            {{ Str::limit($product->name, 25) }}
        </p>
        <p class="font-bold">
            IDR {{$product->price}}
        </p>
    </div>
</a>
