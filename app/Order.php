<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'orders';
    protected $fillable = ['subtotal', 'envio', 'user_id'];

    //Relación con la tabla de usuario
    public function user(){
        return $this->belongsTo('App\User');
    }

    //Relación con la tabla order item
    public function order_items(){
        return $this->hasMany('App\OrderItem');
    }
}
