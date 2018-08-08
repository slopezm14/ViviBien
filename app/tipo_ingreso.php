<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_ingreso extends Model
{
    protected $table = 'tb_tipo_ingreso';

    protected $primaryKey = 'id_tipo_ingreso';

    protected $fillable = ['descripcion_ingreso'];

    public $timestamps = true;

    public function requisito()
    {
       return $this->hasMany(requisito::class);
    }
}
