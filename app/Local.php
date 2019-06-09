<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $fillable = ['nome_dono', 'obs', 'preco_hora', 'tipo'];

    protected $table = 'locals';

    public function via () {
        return $this->belongsTo('App\Via');
    }
}
