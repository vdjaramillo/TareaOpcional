<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculos;
class listar extends Controller
{
    public function index(){
        return view('listar',['lista'=>Vehiculos::all()]);
    }
}
