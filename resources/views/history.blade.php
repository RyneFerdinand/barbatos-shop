@extends('components.layout');

@section('content')
    <div class="w-1/2 mx-auto my-20">
        <div
            class="text-blue-600 bg-blue-100 font-medium px-4 py-3 rounded-md flex items-center justify-between cursor-pointer mb-2">
            Transaction Date 2022-07-04 04:42:42
            <i class="fa fa-angle-up text-2xl"></i>
        </div>
        <div class="bg-white grid grid-cols-[50%_25%_25%] rounded-md p-2">
            <h4 class="font-semibold text-lg">Name</h4>
            <h4 class="font-semibold text-lg">Quantity</h4>
            <h4 class="font-semibold text-lg">Sub Price</h4>

            <p class="border border-gray-600 border-l-0">Cannon EOS Serial 1 II Body Only</p>
            <p class="border border-gray-600">11</p>
            <p class="border border-gray-600 border-r-0">IDR 1234567</p>

            <p class="border border-gray-600 border-l-0">Cannon EOS Serial 1 II Body Only</p>
            <p class="border border-gray-600">11</p>
            <p class="border border-gray-600 border-r-0">IDR 1234567</p>

            <p class="border border-gray-600 border-l-0">Cannon EOS Serial 1 II Body Only</p>
            <p class="border border-gray-600">11</p>
            <p class="border border-gray-600 border-r-0">IDR 1234567</p>

            <h4 class="font-semibold text-lg border border-gray-600 border-l-0 border-b-0">Total</h4>
            <p class="text-lg border border-gray-600border-b-0">33 Item(s)</p>
            <p class="text-lg border border-gray-600 border-r-0 border-b-0">IDR 1234567</p>
        </div>
    </div>
@endsection
