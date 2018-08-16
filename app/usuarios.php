<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class usuarios extends Model
{
    protected $table = 'tb_usuarios';

    protected $primaryKey = 'id_usuario';

    protected $fillable = ['username','id_rol','id_unidad_trabajo','id_generos','nombre1','nombre2',
    'apellido1','apellido2','estatus','password'];

    public $timestamps = true;

    public function rol(){
        return $this->belongsTo(rol::class);
    }

    public function unidad(){
        return $this->belongsTo(unidad_trabajo::class);
    }
    
    public function genero(){
        return $this->belongsTo(genero::class);
    }

}
