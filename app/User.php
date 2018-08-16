<?php

namespace ViviBien;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;

class User extends Authenticatable
{
    use Notifiable,HasRoles;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id_unidad','id_generos','name', 'email', 'password','nombre2', 
        'apellido1','apellido2','estatus',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    // public function hasRoles(array $roles){
    //     foreach($roles as $role){
    //         if ($this->id_rol === $role){
    //             return true;
    //         }
    //     }

    //     return false;
    // }
}
