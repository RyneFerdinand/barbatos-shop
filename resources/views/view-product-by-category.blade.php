@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <section class="flex flex-col w-[100vw] font-montserrat pt-16">
        <div class="w-[75%] mx-auto">
            <p class="pl-4 py-2 text-black bg-white rounded-t border-b-[1px] border-gray-300">{{$category->name}}</p>
            <div class="bg-white px-3 py-3 pb-10 grid grid-cols-4 gap-20 gap-y-4 mb-5">
                @foreach ($products as $product)
                    <x-product-card :product="$product"></x-product-card>
                @endforeach
            </div>
            {{$products->links()}}
            <div class="flex flex-row justify-end mb-16 text-blue-700 font-bold">
                {{-- <div class="rounded-l border-r border-l bg-white px-5 py-3 border-[1px] border-gray-300">
                    <
                </div>
                <div class="bg-black border-r border-l text-white bg-blue-600 px-5 py-3 border-[1px] border-gray-300">
                    1
                </div>
                <div class="bg-white border-r border-l px-5 py-3 border-[1px] border-gray-300">
                    2
                </div>
                <div class="bg-white border-r border-l px-5 py-3 border-[1px] border-gray-300">
                    3
                </div>
                <div class="bg-white border-r border-l px-5 py-3 border-[1px] border-gray-300">
                    4
                </div>
                <div class="bg-white border-r border-l px-5 py-3 border-[1px] border-gray-300">
                    5
                </div>
                <div class="bg-white border-r border-l px-5 py-3 border-[1px] border-gray-300">
                    6
                </div>
                <div class="bg-white border-r border-l px-5 py-3 border-[1px] border-gray-300">
                    7
                </div>
                <div class="bg-white border-r border-l px-5 py-3 border-[1px] border-gray-300">
                    8
                </div>
                <div class="bg-white border-r border-l px-5 py-3 border-[1px] border-gray-300">
                    9
                </div>
                <div class="bg-white rounded-r border-r border-l px-5 py-3 border-[1px] border-gray-300">
                    >
                </div> --}}
            </div>
        </div>
    </section>
@endsection
