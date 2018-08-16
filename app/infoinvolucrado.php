<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class infoinvolucrado extends Model
{
    protected $table = 'tb_info_personas_invo';

    protected $primaryKey = 'id_solicitante';

    protected $fillable = ['id_relacion_familiar','id_genero','numero_documento','nombre1',
    'nombre2','apellido1','apellido2','apellidoCasada','numero_telefono','fecha_nacimiento','direccion'];

    public $timestamps = true;
}
