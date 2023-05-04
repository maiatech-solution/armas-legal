<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arma extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'foto',
        'fabricante',
        'tipo',
        'calibre',
        'acabamento',
        'capacidade_tiro',
        'sistema_funcionamento',
        'qtd_cano',
        'comprimento_cano',
        'tipo_alma',
        'qtd_raias',
        'sentido_raias',
        'pais_fabricacao',
        'preco',
        'taxa'
    ];
}
