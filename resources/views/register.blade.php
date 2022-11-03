@extends('components.layout')

@section('content')
    <section class="flex items-center justify-center w-[100vw] pt-16 bg-black/[5%] font-montserrat">
        <div class="flex flex-col bg-white w-[30vw] my-10">
            <h1 class="font-bold p-3 text-center bg-black/[10%]">Register</h1>
            <hr>
            <form class="flex flex-col px-10 py-5">
                <label class="mb-3">Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                <label class="mb-3">Email</label>
                <input type="text" name="email" placeholder="Enter Your Email" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                <label class="mb-3">Password</label>
                <input type="password" name="password" placeholder="Enter Your Password" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                <label class="mb-3">Confirm Password</label>
                <input type="password" name="password" placeholder="Re-type Your Password" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                <label class="mb-1">Gender</label>
                <div>
                    <input type="radio" id="male" name="male" value="Male">
                    <label for="male">Male</label>
                </div>
                <div class="mb-3">
                    <input type="radio" id="female" name="female" value="Female">
                    <label for="female">Female</label>
                </div>
                <label class="mb-3">Date of Birth</label>
                <input type="date" id="date" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                <label class="mb-3">Country</label>
                <select id="country" name="country" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                    <option value="" disabled selected class="text-black/[40%]">Choose a country</option>
                    <option value=""></option>
                    <option value=""></option>
                </select>
                <div class="flex flex-row justify-center">
                    <button type="submit" class="border border-black/[50%] rounded mb-5 w-[10vw] py-2">Register</button>
                </div>
                <div>
                    Have an account? <a href="{{route('login')}}" class="text-blue-600 underline">Login Here</a>
                </div>
            </form>
        </div>
    </section>
@endsection
