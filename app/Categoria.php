<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    protected $table = "categorias";

    protected $fillable = ['name','description'];

    /**
     * [productos description]
     * @return [type] [description]
     */
    public function productos()
    {
    	return $this->hasMany('App\Producto');
    }

    public function user()
    {
    	return $this->belongsTo('App\User');
    }

}
