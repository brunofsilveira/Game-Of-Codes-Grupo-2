<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Local extends Model
{
    protected $fillable = ['nome_dono', 'obs', 'preco_hora', 'tipo', 'foto'];

    protected $table = 'locals';

    public function via () {
        return $this->belongsTo('App\Via');
    }
}
