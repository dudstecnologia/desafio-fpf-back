<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participante extends Model
{
    /**
     * Indica se a model deve registrar a data/hora dos eventos de create/update
     *
     * @var bool
     */
    public $timestamps = false;

    /**
     * Define os atributos que podem ser atribuídos em massa.
     *
     * @var array
     */
    protected $fillable = [
        'nome'
    ];
}
