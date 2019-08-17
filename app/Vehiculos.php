<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Vehiculos extends Model
{   
    protected $fillable = [
        'dueno','placa','marca',
    ];
    protected $table = 'vehiculo';
    public static function getEstads(){
        return DB::table('vehiculo')->groupBy('marca')->select('marca',DB::raw('count(*) as total'))->pluck('total','marca')->all();
    }
}
