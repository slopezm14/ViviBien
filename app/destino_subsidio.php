<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class destino_subsidio extends Model
{
    protected $table = 'tb_cat_destino_subsidio';

    protected $primaryKey = 'id_tipo_solicitud_subsidio';

    protected $fillable = ['descripcion'];

    public $timestamps = true;
}
