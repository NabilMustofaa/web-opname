<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use App\Models\Product;
use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class DesktopController extends Controller
{
    public function home()
    {
        dump(Auth::user());
        return view('desktop.home');
    }

    public function index()
    {
        return view('desktop.index');
    }

    public function login()
    {
        return view('desktop.login');
    }

    public function authenticate(Request $request){
    
        $credentials= $request->validate([
            'UserName' => 'required',
            'password' => 'required'
        ]);

        if(Auth::guard('web')->attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('admin');
        }
        return back()->with('error','Invalid Username or Password');
    }

    public function logout(Request $request){
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
