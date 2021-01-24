<?php

namespace App\Http\Controllers;

use App\Http\Requests\ParticipanteRequest;
use App\Models\Participante;

class ParticipanteController extends Controller
{
    private $participante;

    public function __construct(Participante $participante)
    {
        $this->participante = $participante;
    }

    /**
     * Retorna a lista de participantes cadastrados
     *
     * @return \App\Models\Participante
     */
    public function index()
    {
        return $this->participante->all();
    }

    /**
     * Cadastra um novo participante e retorna os dados
     *
     * @param  \App\Http\Requests\ParticipanteRequest $request
     * @return \App\Models\Participante
     */
    public function store(ParticipanteRequest $request)
    {
        return $this->participante->create($request->all());
    }

    /**
     * Remove um participante
     *
     * @param  \App\Models\Participante  $participante
     * @return \Illuminate\Http\Response
     */
    public function destroy(Participante $participante)
    {
        //
    }
}
