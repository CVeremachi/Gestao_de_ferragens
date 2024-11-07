<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Users;

class Authcontroller extends Controller
{
    public function login(Request $request)
    {
        $validated = $request->validate([
            'email' => 'required|email',
            'senha' => 'required',
        ]);
        
        
        $user = Users::where('email', $validated['email'])->first();
        
    
        if ($user && $user->senha === $validated['senha']) {
            
            Auth::login($user);  

            if (Auth::user()->user_role === 'admin') {
                return redirect()->route('admin'); 
            } else {
                return redirect()->route('home'); 
            }
        }        
        
       
        return redirect()->back()->withErrors(['senha' => 'Credenciais inválidas.']);
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('user.cadastro'); 
    }
    


}
