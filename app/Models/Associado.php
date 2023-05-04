<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Associado extends Model
{
    use HasFactory;
    public $timestamps = false;

    protected $fillable = ['cpf', 'matricula', 'nome', 'email', 'telefone1', 'telefone2'];
}
