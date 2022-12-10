@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <section class="flex flex-col w-[100vw] font-montserrat pt-16">
        <div class="w-[75%] mx-auto">
            <p class="pl-4 py-2 text-black bg-white rounded-t border-b-[1px] border-gray-300">{{$category->name}}</p>
            <div class="bg-white px-3 py-3 pb-10 flex flex-wrap mb-5 items-stretch">
                @foreach ($products as $product)
                    <x-product-card :product="$product"></x-product-card>
                @endforeach
            </div>
            {{$products->links()}}
        </div>
    </section>
@endsection
