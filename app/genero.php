<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class genero extends Model
{
    protected $table = 'tb_generos';

    protected $primaryKey = 'id_genero';

    protected $fillable = ['descripcion_genero'];

    public $timestamps = true;

    public function persona(){
        return $this->hasMany(personainvolu::class);
    }

    public function usuario(){
        return $this->hasMany(usuario::class);
    }
}
