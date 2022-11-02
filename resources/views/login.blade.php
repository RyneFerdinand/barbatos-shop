@extends('components.layout')

@section('content')
    <section class="flex items-center justify-center w-[100vw] h-[100vh] bg-black/[5%] font-montserrat">
        <div class="flex flex-col bg-white w-[30vw]">
            <h1 class="font-bold p-3 text-center bg-black/[10%]">Login</h1>
            <hr>
            <form class="flex flex-col px-10 py-5">
                <label class="mb-3">Email</label>
                <input type="text" name="email" placeholder="Enter Your Email" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                <label class="mb-3">Password</label>
                <input type="password" name="password" placeholder="Enter Your Password" class="border border-black/[25%] rounded px-3 py-1 mb-3">
                <div class="flex flex-row items-center mb-8">
                    <input type="checkbox" name="remember" class="mr-1">
                    <label>Remember Me</label>
                </div>
                <div class="flex flex-row justify-center">
                    <button type="submit" class="border border-black/[50%] rounded mb-5 w-[10vw] py-2">Login</button>
                </div>
                <div>
                    Don't have an account? <a href="{{route('register')}}" class="text-blue-600 underline">Register Here</a>
                </div>
            </form>
        </div>
    </section>
@endsection
