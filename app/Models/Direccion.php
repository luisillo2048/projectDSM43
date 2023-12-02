<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Direccion extends Model
{
    use HasFactory;
    protected $table = "direccion";
    protected $primaryKey = "id_direccion";
    protected $fillable = ['calle', 'num', 'colonia', 'id_municipio1', 'id_estado1', 'id_sitio1'];
    protected $hidden =['created_at','updated_at'];

    public function municipio(){
        return $this->hasMany(municipio::class);
    }
    public function estado(){
        return $this->hasMany(Estado::class);
    }
    public function sitio(){
        return $this->hasMany(Sitio::class);
    }
}