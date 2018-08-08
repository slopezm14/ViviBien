<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipoaccion extends Model
{
    protected $table = 'tb_tipoaccion';

    protected $primaryKey = 'id_accion';

    protected $fillable = ['descripcion_accioin'];

    public $timestamps = true;

    public function bitacora()
    {
       return $this->hasMany(bitacora::class);
    }
}
