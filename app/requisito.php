<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class requisito extends Model
{
    protected $table = 'tb_requisitos';

    protected $primaryKey = 'id_requisito';

    protected $fillable = ['id_tipo_ingreso','descripcion_requisito','observaciones','obligatorio'];

    public $timestamps = true;


    public function tipoingreso()
    {
       return $this->belongsTo(tipo_ingreso::class);
    }
    
}
