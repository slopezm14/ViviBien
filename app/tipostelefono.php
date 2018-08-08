<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipostelefono extends Model
{
    protected $table = 'tb_tipos_telefonos';

    protected $primaryKey = 'id_tipotelefono';

    protected $fillable = ['descripcion_tipotelefono'];

    public $timestamps = true;

    public function desarrollador()
    {
       return $this->hasMany(desarrollador::class);
    }
}
