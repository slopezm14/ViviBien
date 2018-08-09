<?php

namespace ViviBien;

use Illuminate\Database\Eloquent\Model;

class categoriadili extends Model
{
    protected $table = 'tb_cat_diligencias';

    protected $primaryKey = 'id_diligencia';

    protected $fillable = ['id_unidad_trabajo',
    'descripcion_diligencia','obligatoria','orden'];

    public $timestamps = true;

    public function unitrabajo(){
        return $this->hasMany(unidad_trabajo::class);
    }
}
