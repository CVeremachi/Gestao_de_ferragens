<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Http\Middleware\verificador;

class UserController extends Controller
{
    public function store(Request $request){
        $User = new Users;

    
        
    $User -> email = $request->email;
    $User -> senha = $request->senha;
    $User -> user_role = $request->user_role;
        
    $User->save();

    return redirect('/cadastro')->with('success', 'Usuário cadastrado com sucesso!');
    
}

    public function contar(){
        $totalusers = Users::count();
        
    }


}
