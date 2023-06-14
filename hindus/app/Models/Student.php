<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'imoveis';

    protected $fillable = [
        'imobiliaria',
        'titulo',
        'metros_quadrados',
        'quartos',
        'banheiros',
        'endereco',
        'valor',
        'descricao',
        'coordenadas',
        'created_at',
        'latitude',
        'longitude',
    ];
}