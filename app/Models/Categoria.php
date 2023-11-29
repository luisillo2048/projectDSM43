<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    protected $table = "categoria";
    protected $id = "id_categoria";
    protected $fillable = ['categoria'];
    protected $hidden = ['created_at','updated_at'];
}
