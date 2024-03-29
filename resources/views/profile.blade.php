@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="flex items-center h-[100vh] justify-center py-8">
        <div class="flex flex-col bg-white w-10/12 max-w-md">
            <p class="pl-4 py-2 text-black rounded-t border-b-[1px] border-gray-300 text-center font-bold">Profile</p>
            <form class="flex flex-col px-4 py-4">
                <label>Name</label>
                <input type="text" id="name" class="border-[1px] rounded-md px-2 py-1 mb-2 bg-gray-300" value="{{Auth::user()->name}}" disabled>
                <label>Email</label>
                <input type="email" id="email" class="border-[1px] rounded-md px-2 py-1 mb-2 bg-gray-300" value="{{Auth::user()->email}}" disabled>
                <label>Gender</label>
                <input type="text" id="gender" class="border-[1px] rounded-md px-2 py-1 mb-2 bg-gray-300" value="{{Auth::user()->gender}}" disabled>
                <label>Date of Birth</label>
                <input type="text" id="dob" class="border-[1px] rounded-md px-2 py-1 mb-2 bg-gray-300" value="{{Auth::user()->dob}}" disabled>
                <label>Country</label>
                <input type="text" id="country" class="border-[1px] rounded-md px-2 py-1 mb-2 bg-gray-300" value="{{Auth::user()->country}}" disabled>
            </form>
        </div>
    </div>
@endsection
