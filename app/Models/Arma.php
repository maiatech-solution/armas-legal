<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Arma extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = [
        'id',
        'foto',
        'nome',
        'image_id',
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
        'taxa',
    ];

    public function Image_arma():BelongsTo
    {
        return $this->belongsTo(Image_arma::class);
    }
}
