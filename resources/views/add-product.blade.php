@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="flex flex-col w-2/4 mx-auto py-8">
        <a href="#" class="bg-gray-700 w-[10%] text-white p-2 rounded-md mb-2"><i class="fa fa-backward text-white"></i> Back</a>
        <div class="flex flex-col bg-white">
            <p class="pl-4 py-2 text-black rounded-t border-b-[1px] border-gray-300">Add Product</p>
            <form class="flex flex-col px-4 py-4">
                <label>Name</label>
                <input type="text" id="name" class="border-[1px] rounded-md px-2 py-1 mb-2">
                <label>Category</label>
                <select class="border-[1px] rounded-md px-2 py-1 mb-2">
                    <option disabled selected>Select a category</option>
                    <option></option>
                    <option></option>
                </select>
                <label>Detail</label>
                <textarea id="detail" class="border-[1px] rounded-md px-2 py-1 mb-2" rows="10"></textarea>
                <label>Price</label>
                <input type="number" id="price" class="border-[1px] rounded-md px-2 py-1 mb-2">
                <label>Photo</label>
                <input type="file" id="photo" class="border-[1px] rounded-md mb-2">
                <div class="flex flex-row">
                    <button class="text-gray-500 border-[1px] rounded-md border-gray-700 px-3 py-1">Add</button>
                </div>
            </form>
        </div>
    </div>
@endsection
