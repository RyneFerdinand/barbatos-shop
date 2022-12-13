@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <div class="flex items-center h-[100vh] justify-center py-8">
        <div class="flex flex-col bg-white w-2/4">
            <p class="pl-4 py-2 text-black rounded-t border-b-[1px] border-gray-300 text-center font-bold">Profile</p>
            <form class="flex flex-col px-4 py-4">
                <label>Name</label>
                <input type="text" id="name" class="border-[1px] rounded-md px-2 py-1 mb-2 bg-gray-300" value="Camille Marvin" disabled>
                <label>Emai</label>
                <input type="email" id="email" class="border-[1px] rounded-md px-2 py-1 mb-2 bg-gray-300" value="srice@example.org" disabled>
                <label>Gender</label>
                <input type="text" id="gender" class="border-[1px] rounded-md px-2 py-1 mb-2 bg-gray-300" value="Female" disabled>
                <label>Date of Birth</label>
                <input type="text" id="dob" class="border-[1px] rounded-md px-2 py-1 mb-2 bg-gray-300" value="1978-02-17" disabled>
                <label>Country</label>
                <input type="text" id="country" class="border-[1px] rounded-md px-2 py-1 mb-2 bg-gray-300" value="Laos" disabled>
            </form>
        </div>
    </div>
@endsection
