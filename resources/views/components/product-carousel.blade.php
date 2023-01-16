@props(['category'])

<div class="bg-white w-3/4 mx-auto pb-4">
    <div class="flex gap-4 p-4 bg-gray-400">
        <h2>{{$category->name}}</h2>
        <a href="{{url('/category/'.$category->id)}}" class="text-blue-600 hover:underline">View All</a>
    </div>
    <hr class="opacity-20">

    <div class="flex bg-white overflow-x-scroll mt-4 gap-4 px-4 pt-2 pb-4 w-full">
        <?php
            $ctr = 0;
        ?>
        @foreach ($category->products as $product)
        <div class="w-60 flex shrink-0">
            <x-product-card :product="$product"/>
        </div>
            <?php
                if ($ctr == 10) {
                    break;
                }
                else {
                    $ctr++;
                }
            ?>
        @endforeach
    </div>
</div>
