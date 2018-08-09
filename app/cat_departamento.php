<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class cat_departamento extends Model
{
    protected $table = 'tb_cat_departamento';

    protected $primaryKey = 'id_departamento';

    protected $fillable = ['descripcion_departamento'];

    public $timestamps = true;

    public function municipios()
    {
       return $this->hasMany(cat_municipio::class);
    }

    public function proyectos()
    {
       return $this->hasMany(proyectos::class);
    }
}
