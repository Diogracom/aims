<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function login(Request $request){
        
        $login = $request->validate([
            'username' => ['required']
        ]);
        
        $username = $login['username'];

        $returnedUser = User::where('username', $username)->exists();
        if($returnedUser){ 
            return redirect()->route('pages.dashboard', compact('returnedUser'))->with('success', 'Login successful! Welcome back.');
             
        }else{
            return redirect()->back()->with('error', 'The provided credentials do not match our records.');    
        }
        
    }
 
}
