<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class roles extends Model
{
    protected $table = 'tb_roles';

    protected $primaryKey = 'id_rol';

    protected $fillable = ['descripcion_rol','short_desc'];

    public $timestamps = true;

    public function usuario(){
        return $this->belongsTo(usuarios::class);
    }
}
