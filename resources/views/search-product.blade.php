@extends('components.layout')

@section('content')
    <div class="py-8 pt-16 flex flex-col gap-4">
        <div class="mx-auto w-3/4 flex items-center bg-white rounded-md">
            <input type="text" class="w-full bg-transparent px-4 outline-none" value="Azaine">
            <i class="fa fa-search bg-gray-700 text-white p-3 rounded-r-md"></i>
        </div>
        <div class="w-3/4 mx-auto rounded-t flex flex-col">
            <p class="pl-4 py-2 text-black bg-gray rounded-t border-b-[1px] border-gray-300 bg-white">Search Result</p>
            <div class="bg-white px-3 py-3 pb-10 grid grid-cols-4 gap-20 gap-y-4 mb-5">
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
                <x-product-card></x-product-card>
            </div>
        </div>
    </div>
@endsection
