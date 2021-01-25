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
        return $this->projeto->all();
    }

    public function store(ProjetoRequest $request)
    {
        $projeto = $this->projeto->create($request->all());

        $projeto->participantes()->sync($request->participantes);

        return $projeto;
    }

    public function show(Projeto $projeto)
    {
        $participantes = $projeto->participantes;

        return compact('projeto', 'participantes');
    }

    public function update(ProjetoRequest $request, Projeto $projeto)
    {
        $update = $projeto->update($request->all());

        $projeto->participantes()->sync($request->participantes);

        return response(null, $update ? 200 : 400);
    }

    public function destroy(Projeto $projeto)
    {
        $projeto->participantes()->sync([]);

        return response(null, $projeto->delete() ? 200 : 400);
    }
}
