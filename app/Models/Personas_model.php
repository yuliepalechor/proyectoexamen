<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personas_model extends Model
{
    use HasFactory;
    protected $table='Personas'; 
    protected $fillable=[
        'nombre',
        'apellido',
        'direccion',
        'telefono'
    ];  
}
