<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\View\View;
use Session;


class AuthController extends Controller
{

    public function index()
    {
        if (Auth::check()) 
        {
            return view('student.index');
        }
        else
        {
            return view("auth.login");
        }
    }

    public function post_login (Request $request)
    {
        // dd($request->all());
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);
        
        $data = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($data)){
            return redirect()->route('/student');
        } else {
            return redirect()->route('login');
        }
    }
    
      
    

    public function regis()
    {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'remember_token' => Str::random(60),
        ]);

    
        return redirect ('login');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
