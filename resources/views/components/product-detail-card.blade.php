@props(['product'])
<div class="flex flex-col justify-center items-center font-montserrat h-[100vh]">
    <div class="bg-white flex flex-row items-center w-[50vw] drop-shadow rounded">
        <img src="{{$product->photo}}" class="mx-2 my-5 border-[1px] border-black/[10%] w-[200px] h-[200px]">
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
                    <form method="POST" action="{{url('/product/cart/'.$product->id)}}" enctype="multipart/form-data" class="flex flex-col">
                        @csrf
                        <div class="flex flex-row mb-5">
                            <p class="text-gray-400 mr-16">Qty</p>
                            <input type="number" name="qty" class="border rounded border-[1px] border-black/[10%] ml-5 w-[100%]">
                        </div>
                        <div>
                            <button
                            class="transtion-all bg-transparent text-green-500 font-semibold py-2 px-4 border border-green-500 rounded hover:bg-green-500 hover:text-white">Purchase</button>
                        </div>
                    </form>
                @endif
            @endauth
        </div>
    </div>
</div>
