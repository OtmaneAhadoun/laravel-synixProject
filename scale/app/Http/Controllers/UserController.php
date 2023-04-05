<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    public function login(Request $request)
    {
        if(auth()->user()){
            return back();
         }
        $path=$request->path();
        return view('login',compact('path'));
    }
    public function aauth(LoginRequest $request)
    {   
        $data=$request->validated();
        if(Auth::attempt($data)){
            $request->session()->regenerate();
            return Redirect::to('/');
        }else{
            return back()->withErrors(['error'=>'please virefy your credancials'])->onlyInput('email');
        }
    }
    public function logout(Request $request)
    {
    Auth::logout();
    
    $request->session()->invalidate();
    
    $request->session()->regenerateToken();
    
    return redirect('/');
    }
}
