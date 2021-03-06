<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class proyectos extends Model
{
    protected $table = 'tb_cat_proyectos';

    protected $primaryKey = 'id_proyecto';

    protected $fillable = ['id_municipio','id_desarrollador','nombre_proyecto','longitud_proyecto','latitud_proyecto',
    'monto_aproximado_proyecto','fecha_inicio_trabajo'];

    public $timestamps = true;

    public function municipio(){
        return $this->belongsTo(cat_municipio::class);
    }

    public function desarrollador(){
        return $this->belongsTo(cat_desarrollador::class);
    }

    public function departamento(){
        return $this->belongsTo(cat_departamento::class);
    }
}
