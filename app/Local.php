<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $fillable = ['nome_dono', 'obs', 'preco_hora', 'tipo'];

    protected $table = 'locals';
}
