@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="w-10/12 mx-auto my-24 max-w-2xl">
        <?php
        $totalPrice = 0;
        ?>
        @foreach ($carts as $cart)
            <?php
            $totalPrice += $cart->product->price * $cart->qty;
            ?>
            <x-cart-card :product="$cart->product" :qty="$cart->qty"></x-cart-card>
        @endforeach
    </div>
    @if (count($carts) != 0)
        <div class="fixed bottom-0 bg-white flex justify-center items-center gap-4 w-full py-4">
            <p>Total Price IDR {{ $totalPrice }}</p>
            <form method="POST" enctype="multipart/form-data" action="{{ url('/product/transaction') }}">
                @csrf
                <button
                    class="bg-transparent text-success font-semibold py-2 px-4 border border-success rounded hover:bg-success hover:text-white">Purchase</button>
            </form>
        </div>
    @endif
@endsection
