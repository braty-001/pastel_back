<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Orders extends Model
{
    protected $table = 'orders';
    protected $fillable = [
        'id_do_cliente', 
        'id_do_produto', 
        'data_da_criacao'
    ];
}
