<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    //
    protected $primaryKey = 'idproducto';
    protected $table='productos';
    protected $fillable=['nombre','codigo','descripcion','imagen','precio','idcategoria'];
    public $timestamps=false;
}
