@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="py-8 pt-16 flex flex-col gap-4">
        <form method="GET" action="{{url('/search')}}" class="mx-auto w-3/4 flex items-center bg-white rounded-md">
            <input type="text" name="query" class="w-full bg-transparent px-4 outline-none" value="{{$query}}">
            <i class="fa fa-search bg-gray-700 text-white p-3 rounded-r-md"></i>
        </form>
        <section class="flex flex-col w-[100vw] font-montserrat">
            <div class="w-[75%] mx-auto">
                <p class="pl-4 py-2 text-black bg-white rounded-t border-b-[1px] border-gray-300">Search Result</p>
                <div class="bg-white px-3 py-3 pb-10 flex flex-wrap mb-5 items-stretch">
                    @foreach ($products as $product)
                        <x-product-card :product="$product"></x-product-card>
                    @endforeach
                </div>
            </div>
        </section>
    </div>
@endsection
