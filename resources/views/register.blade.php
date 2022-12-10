@extends('components.layout', ['categories' => ($categories = App\Models\Category::all())])

@section('content')
    <section class="flex items-center justify-center w-[100vw] bg-black/[5%] font-montserrat py-8 pt-16">
        <div class="flex flex-col bg-white w-[30vw]">
            <h1 class="font-bold p-3 text-center bg-black/[10%]">Register</h1>
            <hr>
            <form class="flex flex-col px-10 py-5" method="POST" action="{{url('/register')}}" enctype="multipart/form-data">
                @csrf
                <label class="mb-3">Name</label>
                <input type="text" name="name" placeholder="Enter Your Name" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                @if ($errors->has('name'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('name')}}</label>
                @endif
                <label class="mb-3">Email</label>
                <input type="text" name="email" placeholder="Enter Your Email" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                @if ($errors->has('email'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('email')}}</label>
                @endif
                <label class="mb-3">Password</label>
                <input type="password" name="password" placeholder="Enter Your Password" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                @if ($errors->has('password'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('password')}}</label>
                @endif
                <label class="mb-3">Confirm Password</label>
                <input type="password" name="confirmpassword" placeholder="Re-type Your Password" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                @if ($errors->has('confirmpassword'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('confirmpassword')}}</label>
                @endif
                <label class="mb-1">Gender</label>
                <div>
                    <input type="radio" id="male" name="gender" value="male">
                    <label for="male">Male</label>
                </div>
                <div class="mb-3">
                    <input type="radio" id="female" name="gender" value="female">
                    <label for="female">Female</label>
                </div>
                @if ($errors->has('gender'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('gender')}}</label>
                @endif
                <label class="mb-3">Date of Birth</label>
                <input type="date" id="date" name="dob" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                @if ($errors->has('dob'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('dob')}}</label>
                @endif
                <label class="mb-3">Country</label>
                <select id="country" name="country" class="border border-black/[25%] rounded px-3 py-1 mb-5">
                    <option value="" disabled selected class="text-black/[40%]">Choose a country</option>
                    <option value="Indonesia">Indonesia</option>
                    <option value="Singapore">Singapore</option>
                </select>
                @if ($errors->has('country'))
                    <label class="mb-3 text-red-500 text-sm">{{$errors->first('country')}}</label>
                @endif
                <div class="flex flex-row justify-center">
                    <button type="submit" class="border border-black/[50%] rounded w-[10vw] py-2">Register</button>
                </div>
            </form>
            <div class="px-10 mb-5">
                Have an account? <a href="{{url('/login')}}" class="text-blue-600 underline">Login Here</a>
            </div>

        </div>
    </section>
@endsection
