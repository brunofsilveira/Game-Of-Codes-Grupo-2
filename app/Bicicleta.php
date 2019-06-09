<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bicicleta extends Model
{
    protected $fillable = ['numero', 'foto', 'bicicleta'];

    protected $table = 'bicicletas';
}
