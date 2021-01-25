<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'nome',
        'data_inicio',
        'data_termino',
        'valor',
        'risco'
    ];

    public function participantes()
    {
        return $this->belongsToMany(Participante::class);
    }
}
