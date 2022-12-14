@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="pt-10 w-2/4 mx-auto flex flex-row">
        <div class="flex flex-row justify-between mx-auto w-[100%] mb-3">
            <form method="GET" enctype="multipart/form-data" action="{{url('/search-admin')}}" class="flex flex-row items-stretch">
                @csrf
                <input type="text" class="bg-white px-4 outline-none" placeholder="Product Name" value="" name="query">
                <i class="fa fa-search bg-gray-700 text-white p-3 rounded-r-md"></i>
            </form>
            <form method="GET" enctype="multipart/form-data" action="{{url('/add-product')}}">
                <button class="bg-gray-700 text-white rounded-md px-3 py-2">Add Product <i
                        class="fa fa-plus text-white"></i></button>
            </form>
        </div>
    </div>
    <div class="w-2/4 mx-auto mb-5">
        @foreach ($products as $product)
            <x-manage-product-card :product="$product"></x-manage-product-card>
        @endforeach
        {{$products->links()}}
    </div>
@endsection
