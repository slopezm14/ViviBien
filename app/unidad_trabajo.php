<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class unidad_trabajo extends Model
{
    protected $table = 'tb_unidad_trabajo';

    protected $primaryKey = 'id_unidad_trabajo';

    protected $fillable = ['descripcion_unidad'];

    public $timestamps = true;

    public function usuario(){
        return $this->belongsTo(usuarios::class);
    }

    public function unitrabajo(){
        return $this->belongsTo(unidad_trabajo::class);
    }
}
