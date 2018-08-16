<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class expediente extends Model
{
    protected $table = 'tb_expediente';

    protected $primaryKey = 'id_expediente';

    protected $fillable = ['id_expediente','id_diligencia','numero_expediente','id_usuario',
    'id_tipo_ingreso','id_tipo_solicitud_subsidio','id_proyecto','fecha_registro','observaciones_expediente','monto_solicitado','status'];

    public $timestamps = true;
}
