<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    protected $fillable = ['user_id', 'locais_id', 'avaliacao', 'data'];

    protected $table = 'user_locals';
}
