<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    protected $table = "productos";
    protected $fillable = ['name','description','tax','price','stock'];

    public function categoria()
    {
    	return $this->belongsTo('App\Categoria');
    }
    
    public function user()
    {
    	return $this->belongsTo('App\User');
    }
}
