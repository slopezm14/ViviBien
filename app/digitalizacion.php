<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class digitalizacion extends Model
{
    protected $table = 'tb_digitalizacion';

    protected $primaryKey = 'id_digitalizacion';

    protected $fillable = ['id_expediente_requisito','id_expediente','id_solicitante','id_usuario',
    'fecha_presentacion','aceptado','motivo_rechazo','path'];

    public $timestamps = true;
}
