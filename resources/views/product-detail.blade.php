@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="flex justify-center items-center">
        <x-product-detail-card :product="$product"></x-product-detail-card>
    </div>
@endsection
