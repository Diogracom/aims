<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login(Request $request){
        
        $login = $request->validate([
            'username' => ['required']
        ]);

        if (Auth::attempt($login)) {
            return redirect()->intended(); 
        } else {
            return back()->withErrors([
                'failed' => 'The provided credentials do not match our records.'
            ]);
        }

        
    }
 
}
