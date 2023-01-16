@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <section class="flex flex-col w-[100vw] font-montserrat pt-16">
        <div class="w-[75%] mx-auto">
            <p class="pl-4 py-2 text-black bg-white rounded-t border-b-[1px] border-gray-300">{{$category->name}}</p>
            <div class="px-4 pt-2 bg-white grid sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4 mb-5">
                @foreach ($products as $product)
                    <x-product-card :product="$product"></x-product-card>
                @endforeach
            </div>
            {{$products->links()}}
        </div>
    </section>
@endsection
