<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{   
    protected $primaryKey = 'idcategoria';
    protected $table='categorias';
    protected $fillable=['nombre','codigo','descripcion'];
    public $timestamps=false;
}
