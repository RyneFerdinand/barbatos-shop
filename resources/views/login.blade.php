@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <section class="flex items-center justify-center w-[100vw] h-[100vh] bg-black/[5%] font-montserrat">
        <div class="flex flex-col bg-white w-10/12 max-w-md">
            <h1 class="font-bold p-3 text-center bg-black/[5%]">Login</h1>
            <hr>
            <form class="flex flex-col px-10 py-5" method="POST" enctype="multipart/form-data" action="{{ url('/login') }}">
                @csrf
                <label class="mb-3">Email</label>
                <input type="email" name="email" placeholder="Enter Your Email"
                    class="border border-black/[25%] rounded px-3 py-1 mb-5"
                    value={{ Cookie::get('email') !== null ? Cookie::get('email') : '' }}>
                @if ($errors->has('email'))
                    <label class="mb-3 text-red-500 text-sm">{{ $errors->first('email') }}</label>
                @endif
                <label class="mb-3">Password</label>
                <input type="password" name="password" placeholder="Enter Your Password"
                    class="border border-black/[25%] rounded px-3 py-1 mb-3"
                    value={{ Cookie::get('password') !== null ? Cookie::get('password') : '' }}>
                @if ($errors->has('password'))
                    <label class="mb-3 text-red-500 text-sm">{{ $errors->first('password') }}</label>
                @endif
                <div class="flex flex-row items-center mb-8">
                    <input type="checkbox" name="remember" class="mr-1" checked={{ Cookie::get('email') !== null }}>
                    <label>Remember Me</label>
                </div>
                @if ($errors->has('error'))
                    <label class="mb-3 text-red-500 text-sm">{{ $errors->first('error') }}</label>
                @endif
                <div class="flex flex-row justify-center">
                    <button type="submit" class="border border-black/[50%] rounded w-2/6 py-2">Login</button>
                </div>
            </form>
            <div class="px-10 mb-5">
                Don't have an account? <a href="{{ url('/register') }}" class="text-blue-600 underline">Register Here</a>
            </div>
        </div>
    </section>
@endsection
