<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Municipio extends Model
{
    use HasFactory;

    protected $table = "municipio";
    # protected $id = "id_categoria";
    protected $fillable = ['municipio'];
    protected $hidden =['created_at','updated_at'];

}
