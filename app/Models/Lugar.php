<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LugarModel extends Model
{
    use HasFactory;
 
    protected $table = "categoria";
   # protected $id = "id_categoria";
    protected $fillable = ['categoria'];
    #esconde columnas especificas
    #public $timestamps = false;
    protected $hidden =['created_at','updated_at'];

}
