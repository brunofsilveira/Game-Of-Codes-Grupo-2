<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Via extends Model
{
    protected $fillable = ['rua', 'bairro', 'cep', 'cidade'];
}
