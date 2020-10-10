<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pais extends Model
{
    use HasFactory;
    public $table = "pais";// se coloca la tabla que se va a usar 
    public $timestamps = false; // esto es para que no haya auditoría teniendo en cuenta que no se creó en la bd esos campos
}
