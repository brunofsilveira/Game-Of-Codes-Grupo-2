<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
    protected $fillable = ['user_id', 'locais_id', 'avaliacao', 'data'];

    protected $table = 'user_locals';

    public function usuario () {
        return $this->belongsTo('App\User');
    }

    public function local () {
        return $this->belongsTo('App\Local');
    }
}
