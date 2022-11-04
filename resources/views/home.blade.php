@extends('components.layout')

@section('content')
    <div class="py-8 pt-16 flex flex-col gap-4">
        <div class="mx-auto w-3/4 flex items-center bg-white rounded-md">
            <input type="text" class="w-full bg-transparent px-4 outline-none">
            <i class="fa fa-search bg-gray-700 text-white p-3 rounded-r-md"></i>
        </div>
        <x-product-carousel />
        <x-product-carousel />
    </div>
@endsection
