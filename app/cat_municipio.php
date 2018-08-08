<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cat_municipio extends Model
{
    protected $table = 'tb_cat_municipios';

    protected $primaryKey = 'id_municipio';

    protected $fillable = ['descripcion_municipio','id_departamento'];

    public $timestamps = true;

    public function departamento(){
        return $this->belongsTo(cat_departamento::class);
    }

    public function proyectos()
    {
       return $this->hasMany(proyectos::class);
    }
}
