@extends('components.layout');

@section('content')
    <div class="pt-10 w-2/4 mx-auto flex flex-row">
        <div class="flex flex-row justify-between mx-auto w-[100%] mb-3">
            <div class="flex flex-row items-stretch">
                <input type="text" class="bg-white px-4 outline-none" placeholder="Product Name">
                <i class="fa fa-search bg-gray-700 text-white p-3 rounded-r-md"></i>
            </div>
            <button class="bg-gray-700 text-white rounded-md px-3 py-2">Add Product <i
                    class="fa fa-plus text-white"></i></button>
        </div>
    </div>
    <div class="w-2/4 mx-auto">
        <x-manage-product-card></x-manage-product-card>
        <x-manage-product-card></x-manage-product-card>
        <x-manage-product-card></x-manage-product-card>
        <x-manage-product-card></x-manage-product-card>
        <x-manage-product-card></x-manage-product-card>
    </div>
@endsection
