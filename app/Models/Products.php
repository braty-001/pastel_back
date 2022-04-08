<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    protected $table = 'produtos';

    protected $fillable = [
        'nome',
        'preco',
        'foto',
        'tipo_foto'
    ];

    protected $primaryKey = 'id';
}
