<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Material;
use App\Http\Controllers\UserController;
use App\Http\Controllers\FerragemController;
use App\Http\Controllers\Authcontroller;

class dashboardController extends Controller
{
    public function index(){
        $totalUsuarios = Users::count();


        $totalMateriais = Material::count();

       
        $materiais = Material::all();  

      
        return view('admin', compact('totalUsuarios', 'totalMateriais', 'materiais'));
    }
    
}
