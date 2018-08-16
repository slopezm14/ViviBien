<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class expedienterequi extends Model
{
    protected $table = 'tb_expediente_requisitos';

    protected $primaryKey = 'id_expediente_requisito';

    protected $fillable = ['id_expediente','id_usuario','id_requisito','id_solicitante',
    'fecha_presentacion','estatus','observaciones'];

    public $timestamps = true;
}
