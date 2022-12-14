@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="w-1/2 mx-auto my-20">
        @foreach (Auth::user()->transactions as $header)
            <div
                class="text-blue-600 bg-blue-100 font-medium px-4 py-3 rounded-md flex items-center justify-between cursor-pointer mb-2">
                Transaction Date {{$header->transaction_date}}
                <i class="fa fa-angle-up text-2xl"></i>
            </div>

            <div class="bg-white grid grid-cols-[50%_25%_25%] rounded-md p-2">
                <h4 class="font-semibold text-lg">Name</h4>
                <h4 class="font-semibold text-lg">Quantity</h4>
                <h4 class="font-semibold text-lg">Sub Price</h4>
                <?php
                    $totalQty = 0;
                    $totalPrice = 0;
                ?>
                @foreach ($header->details as $detail)
                    <p class="border border-gray-600 border-l-0">{{$detail->product->name}}</p>
                    <p class="border border-gray-600">{{$detail->qty}}</p>
                    <p class="border border-gray-600 border-r-0">IDR {{$detail->product->price * $detail->qty}}</p>
                    <?php
                        $totalQty += $detail->qty;
                        $totalPrice += $detail->qty * $detail->product->price;
                    ?>
                @endforeach

                <h4 class="font-semibold text-lg border border-gray-600 border-l-0 border-b-0">Total</h4>
                <p class="text-lg border border-gray-600 border-b-0">{{$totalQty}} Item(s)</p>
                <p class="text-lg border border-gray-600 border-r-0 border-b-0">IDR {{$totalPrice}}</p>
            </div>
        @endforeach
    </div>
@endsection
