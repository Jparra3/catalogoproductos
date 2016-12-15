<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * [categorias description]
     * @return [type] [description]
     */
    public function categorias()
    {
        return $this->hasMany('App\Categoria');
    }

    /**
     * [productos description]
     * @return [type] [description]
     */
    public function productos()
    {
        return $this->hasMany('App\Producto');
    }
}
