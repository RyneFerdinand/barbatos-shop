@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="py-8 pt-16 flex flex-col gap-4">
        <form method="GET" action="{{url('/search')}}" class="mx-auto w-3/4 flex items-center bg-white rounded-md">
            <input type="text" name="query" class="w-full bg-transparent px-4 outline-none">
            <button type="submit">
                <i class="fa fa-search bg-gray-700 text-white p-3 rounded-r-md"></i>
            </button>
        </form>
        @foreach ($categories as $category)
            <x-product-carousel :category="$category"/>
        @endforeach
    </div>
@endsection
