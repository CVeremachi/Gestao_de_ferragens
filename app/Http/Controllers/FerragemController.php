<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Users;
use App\Models\Material;

class FerragemController extends Controller
{
    public function material(){
        $materiais = Material::all();
        return view('buy', compact('materiais'));
       
    }

    public function contarMaterial(){
        $totalMaterial = Material::count();
       
    }

    public function showAdmin()
    {
    $materiais = Material::all(); 
    return view('admin', compact('materiais'));
    }
}
