<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Customers extends Model
{

    protected $table = 'clientes';

    protected $fillable = [
        'nome',
        'email',
        'telefone',
        'data_de_nascimento',
        'endereco',
        'complemento',
        'bairro',
        'cep',
        'data_de_cadastro'
    ];

    const CREATED_AT = 'data_de_cadastro';

    protected $primaryKey = 'id';

}
