<?php

namespace App\Http\Controllers;

use App\Models\Projeto;
use App\Http\Requests\ProjetoRequest;

class ProjetoController extends Controller
{
    private $projeto;

    public function __construct(Projeto $projeto)
    {
        $this->projeto = $projeto;
    }

    public function index()
    {
        //
    }

    public function store(ProjetoRequest $request)
    {
        $projeto = $this->projeto->create($request->all());

        $projeto->participantes()->sync($request->participantes);

        return $projeto;
    }

    public function show(Projeto $projeto)
    {
        //
    }

    public function update(Request $request, Projeto $projeto)
    {
        //
    }

    public function destroy(Projeto $projeto)
    {
        //
    }
}
