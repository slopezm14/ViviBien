<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class diligencia extends Model
{
    protected $table = 'tb_expediente_diligencia';

    protected $primaryKey = 'id_expediente_diligencia';

    protected $fillable = ['id_expediente','id_diligencia','fecha_diligencia','resultado_diligencia',
    'diligencia_finalizada'];

    public $timestamps = true;
}
