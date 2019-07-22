<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Validator;
use Auth;
use App\Models\User;
use App\Models\News;
use Hash;


class MainController extends Controller
{
    function index()
    {
     return view('pages.login');
    }

    function checklogin(Request $request)
    {
     $this->validate($request, [
      'email'   => 'required|email',
      'password'  => 'required',
     ]);

     $user_data = array(
      'email'  => $request->get('email'),
      'password' => $request->get('password')
     );



     if(Auth::attempt($user_data))
     {
      return redirect('/news');
     }
     else
     {
      return back()->with('error', 'Wrong Login Details');
     }

    }
   
    function successlogin()
    {
     return view('pages.home');
    }

    function logout()
    {
     Auth::logout();
     return redirect('main');
    }
    function register()
    {
     return view('pages.register');
    }


    function singup(Request $request)
    {
    
        User::insert([
        'name'=> $request->name,
        'email' => $request->email,
        'password' =>Hash::make($request->password),
        'remember_token'=> str_random(10),
    ]);
    return redirect('main');
    }   
}

?>