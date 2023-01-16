@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="flex flex-col w-10/12 max-w-xl mx-auto py-8">
        <a href="{{url('/manage-product')}}" class="bg-gray-700 w-[17%] md:w-[12%] text-white p-2 rounded-md mb-2"><i class="fa fa-backward text-white"></i> Back</a>
        <div class="flex flex-col bg-white">
            <p class="pl-4 py-2 text-black rounded-t border-b-[1px] border-gray-300">Add Product</p>
            <form class="flex flex-col px-4 py-4" method="POST" enctype="multipart/form-data" action="{{url('/product')}}">
                @csrf
                <label>Name</label>
                <input type="text" id="name" name="name" class="border-[1px] rounded-md px-2 py-1 mb-2">
                @if ($errors->has('name'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('name')}}</label>
                @endif
                <label>Category</label>
                <select class="border-[1px] rounded-md px-2 py-1 mb-2" id="category" name="category">
                    <option disabled selected>Select a category</option>
                    @foreach ($categories as $category)
                        <option value="{{$category->id}}">{{$category->name}}</option>
                    @endforeach
                </select>
                @if ($errors->has('category'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('category')}}</label>
                @endif
                <label>Detail</label>
                <textarea name="detail" id="detail" class="border-[1px] rounded-md px-2 py-1 mb-2" rows="10"></textarea>
                @if ($errors->has('detail'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('detail')}}</label>
                @endif
                <label>Price</label>
                <input type="number" id="price" name="price" class="border-[1px] rounded-md px-2 py-1 mb-2">
                @if ($errors->has('price'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('price')}}</label>
                @endif
                <label>Photo</label>
                <input type="file" name="photo" id="photo" class="border-[1px] rounded-md mb-2">
                @if ($errors->has('photo'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('photo')}}</label>
                @endif
                <div class="flex flex-row">
                    <button class="text-gray-500 border-[1px] rounded-md border-gray-700 px-3 py-1">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
