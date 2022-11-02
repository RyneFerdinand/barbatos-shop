@extends('components.layout')

@section('content')
    <section class="flex flex-col w-[100vw] bg-black/[5%] font-montserrat">
        <div class="px-24 pt-10">
            <p class="pl-2 py-1 text-black bg-gray rounded-t border-[1px] border-gray-300">Beauty</p>
            <div class="bg-white px-3 py-3 pb-10 grid grid-cols-5 gap-12 mb-5 border-[1px] border-gray-300">
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
            <div class="flex flex-row justify-end mb-16 text-blue-700 font-bold">
                <div class="rounded-l border-r border-l bg-white px-5 py-3 border-[1px] border-gray-300">
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
                </div>
            </div>
        </div>
    </section>
@endsection
