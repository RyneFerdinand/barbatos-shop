@props(['product'])
<div class="flex flex-row w-[100%] bg-white justify-between mb-3">
    <div class="flex flex-row w-[100%]">
        <img src="{{ $product->photo }}" class="w-[200px] h-[200px] object-cover">
        <div class="pt-2 font-medium text-2xl ml-2 flex flex-wrap w-[60%]">
            {{ $product->name }}
        </div>
    </div>
    <div class="flex flex-row pr-3">
        <a href="{{ url('/update-product/' . $product->id) }}"
            class="flex items-center justify-center bg-white text-rounded-md border-[2px] border-yellow-400 h-[40px] w-[40px] mt-2 mr-2 rounded-md hover:bg-yellow-400 hover:text-white fa fa-pencil text-yellow-400 transition-all"></a>
        <form enctype="multipart/form-data" method="POST" action="{{ url('/product/' . $product->id) }}">
            {{ method_field('DELETE') }}
            {{ csrf_field() }}
            <button type="submit"
                class="bg-white text-rounded-md border-[2px] border-[rgb(255,0,0)] h-[40px] w-[40px] mt-2 rounded-md fa fa-trash text-[rgb(255,0,0)] hover:bg-[rgb(255,0,0)] hover:text-white transition-all"></button>
        </form>
    </div>
</div>
