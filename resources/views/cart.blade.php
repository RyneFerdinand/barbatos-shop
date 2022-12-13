@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="w-1/3 mx-auto my-24">
        <x-cart-card />
        <x-cart-card />
        <x-cart-card />
    </div>
    <div class="fixed bottom-0 bg-white flex justify-center items-center gap-4 w-full py-4">
        <p>Total Price IDR 3812808</p>
        <button
            class="bg-transparent text-green-500 font-semibold py-2 px-4 border border-green-500 rounded hover:bg-green-500 hover:text-white">Purchase</button>
    </div>
@endsection
