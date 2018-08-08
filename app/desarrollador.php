<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class desarrollador extends Model
{
    protected $table = 'tb_desarrolladores';

    protected $primaryKey = 'id_desarrollador';

    protected $fillable = ['nombre_desarrollador','nit','direccion_empresa','correo_electronico','telefono'];

    public $timestamps = true;

    public function proyectos()
    {
       return $this->hasMany(proyectos::class);
    }

    public function telefonos()
    {
       return $this->hasMany(telefono::class);
    }

    
}
