<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class bitacora extends Model
{
    protected $table = 'tb_bitacora_auditoria';

    protected $primaryKey = 'id_bitacora';

    protected $fillable = ['id_usuario','objeto','dato_anterior','nuevo_dato','fecha_accion',
    'direccionIP','nombre_computadora','id_accion'];

    public $timestamps = true;

    public function bitacora()
    {
       return $this->hasMany(bitacora::class);
    }
}
