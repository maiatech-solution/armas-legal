<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Image_arma extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['id', 'imagem1', 'imagem2', 'imagem3'];

    public function arma(): HasMany
    {
        return $this->hasMany(Arma::class);
    }
}
