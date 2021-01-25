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
        return $this->projeto->create($request->all());
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
