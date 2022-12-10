<?php

namespace App\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    //
    public function register(Request $request){
        $today = Carbon::today();

        $today = Carbon::createFromFormat('Y-m-d H:i:s', $today)->format('m/d/Y');
        $rules = ([
            'name' => 'required|min:5',
            'email' => 'required|email|unique:users',
            'password' => 'required|alpha_num|min:8',
            'confirmpassword' => 'required|same:password',
            'gender' => 'required',
            'dob' => 'required|before:'.$today.'|after:01/01/1900',
            'country' => 'required'
        ]);

        $messages = ([
            'name.required' => 'You need to fill your name!',
            'email.required' => 'You need to fill your email!',
            'password.required' => 'You need to fill your password!',
            'confirmpassword.required' => 'You need to fill your confirm password!',
            'gender.required' => 'You need to choose your gender!',
            'dob.required' => 'You need to choose your date of birth!',
            'country.required' => 'You need to choose your country!',
            'name.min' => 'Your name should be at least 5 characters!',
            'email.email' => 'Your email should be an email!',
            'email.unique' => 'Your email has been already taken by other users!',
            'password.alpha_num' => 'Your password should be alphanumeric!',
            'password.min' => 'Your password should be at least 8 characters!',
            'confirmpassword.same' => 'Your confirm password needs to be the same as your password!',
            'dob.before' => 'Your date of birth needs to be before'.$today.'!',
            'dob.after' => 'Your date of birth needs to be after 01//01/1900!',
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        $name = $request->name;
        $email = $request->email;
        $password = bcrypt($request->password);
        $gender = $request->gender;
        $dob = $request->dob;
        $country = $request->country;

        $user = new User();
        $user->name = $name;
        $user->email = $email;
        $user->password = $password;
        $user->gender = $gender;
        $user->dob = $dob;
        $user->country = $country;
        $user->save();

        return redirect('/login');
    }

    public function login(Request $request){
        $rules = [
            'email' => 'required',
            'password' => 'required'
        ];

        $messages = ([
            'email.required' => 'You need to fill your email!',
            'password.required' => 'You need to fill your password!',
        ]);

        $validator = Validator::make($request->all(), $rules, $messages);

        if ($validator->fails()){
            return back()->withErrors($validator);
        }

        $validator = Validator::make($request->all(), $rules, $messages);

        $email = $request->email;
        $password = $request->password;

        if ($request->remember){
            Cookie::queue('email', $email, 120);
            Cookie::queue('password', $password, 120);
        }

        if (Auth::attempt(['email' => $email, 'password' => $password])){
            Session::put('usersession', ['email' => $email, 'password' => $password]);
            return redirect('/');
        }
        return back()->withErrors(['error' => 'You filled in wrong email or password']);
    }

    public function registerPage(){
        return view('register');
    }

    public function loginPage(){
        return view('login');
    }

    public function logout(){
        Auth::logout();
        return redirect('/login');
    }
}
