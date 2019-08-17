<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Vehiculos;

class estadistica extends Controller
{
    public function index()
    {
        $veh = Vehiculos::getEstads();
        return view('estadistica',['vehs'=>$veh]);
    }
}
