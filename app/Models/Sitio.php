<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Sitio extends Model
{
    use HasFactory;

    protected $table = "sitio";
    protected $primaryKey = "id_sitio";
    protected $fillable = ['nombre', 'telefono', 'id_categoria1'];
    protected $hidden =['created_at','updated_at'];
    
    public function categoria(){
        return $this->hasMany(Categoria::class);
    }

    public function direccion()
    {
        return $this->hasOne(Direccion::class, 'id_sitio1');
    }
}