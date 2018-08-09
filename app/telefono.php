<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class telefono extends Model
{
    protected $table = 'tb_telefonos';

    protected $primaryKey = 'telefono_id';

    protected $fillable = ['numero_telefono','id_desarrollador','id_informacion_solicitante','id_tipotelefono'];

    public $timestamps = true;

    public function desarrollador()
    {
       return $this->belongsTo(desarrollador::class);
    }
}
