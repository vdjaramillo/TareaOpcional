<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Marca;
use App\Persona;
use App\Vehiculos;
class Registrar extends Controller
{
    public function vista(){
        return view('RegistrarVehiculo',['marcas'=>Marca::all()]);
    }
    public function index(){
        $data = [
            'nombre' => $_POST['nombred'],
            'cedula' => $_POST['cedula'],
            'placa' => $_POST['placa'],
            'marca' => $_POST['marca'],
        ];
        $rules = [
            'nombre' => ['required','string'],
            'cedula' => ['required','integer', 'min:10000000','unique:persona'],
            'placa' => ['required','regex:/[a-zA-Z]{3}\s{0,1}\d{3}/','unique:vehiculo'],
            'marca' => ['required','string','exists:marca,nombre'],
        ];
        $validator = Validator::make($data, $rules);
        if ($validator->fails()) {
            // Algo esta mal
            return redirect()->back()->withErrors($validator->messages())->withInput();
        }
        Persona::create(['nombre'=>$data['nombre'],'cedula'=>$data['cedula']]);
        Vehiculos::create(['dueno'=>$data['cedula'],'placa'=>$data['placa'],'marca'=>$data['marca']]);
        return vista();
    }
}
