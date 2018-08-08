<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class relacion_familiar extends Model
{
    protected $table = 'tb_cat_relacion_familiar';

    protected $primaryKey = 'id_relacion_familiar';

    protected $fillable = ['descripcion'];

    public $timestamps = true;
}
