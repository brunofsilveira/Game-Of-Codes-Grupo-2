<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Carro extends Model
{

    // identifica os campos que serão inseridos, ou seja, que estamos
    // dando permissão de serem atualizados na store
    protected $fillable = ['modelo', 'marca_id', 'cor', 'ano', 
                           'preco', 'combustivel', 'foto', 'destaque'];

    public function marca() {
        return $this->belongsTo('App\Marca');
    }

    public function getModeloAttribute($value) {
        return strtoupper($value);
    }

    public static function combust() {
        return ['Álcool', 'Diesel', 'Gasolina', 'Flex'];
    }

    public function getCombustivelAttribute($value) {
        if ($value=="A") {
            return "Álcool";
        } else if ($value == "D") {
            return "Diesel";
        } else if ($value == "F") {
            return "Flex";
        } else if ($value == "G") {
            return "Gasolina";
        }
    }

    public function setCombustivelAttribute($value) {
        if ($value == "Álcool") {
            $this->attributes['combustivel'] = "A";
        } else if ($value == "Diesel") {
            $this->attributes['combustivel'] = "D";
        } else if ($value == "Flex") {
            $this->attributes['combustivel'] = "F";
        } else if ($value == "Gasolina") {
            $this->attributes['combustivel'] = "G";
        }
    }        

    // retira a máscara com "." e "," antes da inserção 
    public function setPrecoAttribute($value) {
        $novo1 = str_replace('.', '', $value);    // retira o ponto
        $novo2 = str_replace(',', '.', $novo1);   // substitui a , por .
        $this->attributes['preco'] = $novo2;
    }

}
