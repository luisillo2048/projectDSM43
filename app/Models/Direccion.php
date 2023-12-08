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

    public function municipio()
    {
        return $this->belongsTo(Municipio::class, 'id_municipio1');
    }
    public function estado()
    {
        return $this->belongsTo(Estado::class, 'id_estado1');
    }
    public function sitio()
    {
        return $this->belongsTo(Sitio::class, 'id_sitio1');
    }
}