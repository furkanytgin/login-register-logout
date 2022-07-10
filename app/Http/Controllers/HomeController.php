<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Hash;
use App\Models\User;


class HomeController extends Controller
{

    public function home(){

        return view('home');
    }

    
    public function login() {

        return view('login');
    }

    public function loginCreated(Request $request) {
         
        $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        $datas = $request->only('email', 'password');

        if (Auth::attempt($datas)) {
            return redirect()->route('home')->with('success', 'Hoşgeldiniz');
        }

        return redirect()->back()->with('success', 'Giriş bilgileri geçerli değil');
    }
    
    
    
    
    public function register() {

        return view('register');
    }

    public function registerCreated(Request $request) {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);
        $password = $request->password;
        
        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'password' => Hash::make($password)
        ]);

        return redirect()->route('home');
    }
    
    public function logout() {
        Auth::logout();
   
        return Redirect('login');
    }
}

