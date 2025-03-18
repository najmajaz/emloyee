<?php

namespace App\Http\Controllers;

use App\Models\User;

use Illuminate\Support\Facades;

use Illuminate\Support\Facades\Auth;


use Illuminate\Http\Request;

class AuthController extends Controller
{
    //

    public function login()
    {
        return view('auth.login');
    }

    public function register()
    {
        return view('auth.register');
    }


    function loginpost(Request $request)

    {
        $request->validate([
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $credentials = $request->only('email','password');
       
        if(Auth::attempt($credentials))
        {

            return redirect()->intended(route('home'));
        }
        return redirect(route('login'))->with('error','login failed');

     }

    function registerpost(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user= new user();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = hash::make($request->password);

        if($user->save())
        {
            return redirect(route('login'))->with('success','user created success');
         }

         return redirect(route('register'))->with('error','failed to create ');

     }



}
