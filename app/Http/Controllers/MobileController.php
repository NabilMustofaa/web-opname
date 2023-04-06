<?php

namespace App\Http\Controllers;

use App\Models\StockCountTask;
use App\Models\StockCountUser;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class MobileController extends Controller
{
    public function home()
    {
        return view('mobile.home');
    }

    public function login()
    {
        return view('mobile.login');
    }

    public function authenticate(Request $request){
        
        $credentials= $request->validate([
            'Operator' => 'required',
        ]);
        $credentials['password'] = "";

        $TaskId = StockCountTask::where('Token', $request->Token)->first()->Id;

        $credentials['TaskId'] = $TaskId;

        if(Auth::guard('mobile')->attempt($credentials)){
            $request->session()->regenerate();
            
            // dd(auth()->guard('mobile')->user());
            return redirect()->intended($request->Token);
        }
        return back()->with('error','Invalid Username or Password');
    }

    public function logout(Request $request)
    {
        Auth::guard('mobile')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function index($token)
    {   
        $Task = DB::table('StockCountTask')->where('Token', $token)->first();

        $History = DB::table('StockCountResult')->where('Operator', auth()->guard('mobile')->user()->Operator)->groupBy('BinLoc')->get();

        return view('mobile.index', compact('Task'));
    }


}
