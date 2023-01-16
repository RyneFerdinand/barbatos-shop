@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="w-10/12 max-w-2xl mx-auto my-20">
        @foreach ($transactions as $transaction)
            <div onclick="dropdown({{ $transaction->id }})"
                class="text-blue-600 bg-blue-100 font-medium px-4 py-3 rounded-md flex items-center justify-between cursor-pointer mt-5">
                Transaction Date {{ $transaction->created_at }}
                <i id="icon{{ $transaction->id }}" class="fa fa-angle-down text-2xl"></i>
            </div>

            <div id="trigger{{ $transaction->id }}"
                class="bg-white grid-cols-[50%_25%_25%] rounded-md p-2 hidden ease-in transition-all origin-top duration-1000">
                <h4 class="font-semibold text-lg ml-1">Name</h4>
                <h4 class="font-semibold text-lg ml-1">Quantity</h4>
                <h4 class="font-semibold text-lg ml-1">Sub Price</h4>
                <?php
                $totalQty = 0;
                $totalPrice = 0;
                ?>
                @foreach ($transaction->details as $detail)
                    <p class="border border-gray-300 border-l-0 pl-1">{{ $detail->product->name }}</p>
                    <p class="border border-gray-300 pl-1">{{ $detail->qty }}</p>
                    <p class="border border-gray-300 border-r-0 pl-1">IDR {{ $detail->product->price * $detail->qty }}</p>
                    <?php
                    $totalQty += $detail->qty;
                    $totalPrice += $detail->qty * $detail->product->price;
                    ?>
                @endforeach

                <h4 class="font-semibold text-lg border border-gray-300 border-l-0 border-b-0 pl-1">Total</h4>
                <p class="text-lg border border-gray-300 border-b-0 pl-1">{{ $totalQty }} Item(s)</p>
                <p class="text-lg border border-gray-300 border-r-0 border-b-0 pl-1">IDR {{ $totalPrice }}</p>
            </div>
        @endforeach
    </div>

    <script>
        function dropdown(id) {
            if (document.getElementById("trigger" + id).classList.contains("hidden")) {
                document.getElementById("trigger" + id).classList.remove("hidden");
                document.getElementById("trigger" + id).classList.add("grid");
                document.getElementById("icon" + id).classList.add("fa-angle-up");
                document.getElementById("icon" + id).classList.remove("fa-angle-down");
            } else {
                document.getElementById("trigger" + id).classList.add("hidden");
                document.getElementById("trigger" + id).classList.remove("grid");
                document.getElementById("icon" + id).classList.add("fa-angle-down");
                document.getElementById("icon" + id).classList.remove("fa-angle-up");
            }
        }
    </script>
@endsection
