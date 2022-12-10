@props(['product'])
<div class="flex flex-col justify-center items-center font-montserrat h-[100vh]">
    <div class="bg-white flex flex-row items-center justify-center w-[50vw] drop-shadow rounded">
        <img src="{{$product->photo}}" class="mx-2 my-5 border-[1px] border-black/[10%]">
        <div class="flex flex-col px-2 py-5 mb-3">
            <p class="font-bold text-2xl mb-2">{{$product->name}}</p>
            <div class="flex flex-row">
                <p class="text-gray-400 mr-16">Detail</p>
                <p>{{$product->detail}}</p>
            </div>
            <div class="flex flex-row mb-3">
                <p class="text-gray-400 mr-16">Price</p>
                <p class="ml-2">IDR {{$product->price}}</p>
            </div>
            @auth
                @if (Auth::user()->isAdmin === 0)
                    <form class="flex flex-col">
                        <div class="flex flex-row mb-5">
                            <p class="text-gray-400 mr-16">Qty</p>
                            <input type="number" name="qty" class="border rounded border-[1px] border-black/[10%] ml-5 w-[100%]">
                        </div>
                        <div>
                            <button type="submit" class="border rounded border-[1px] border-black/[50%] px-3 py-1 text-black/[50%]">Purchase</button>
                        </div>
                    </form>
                @endif
            @endauth
        </div>
    </div>
</div>
