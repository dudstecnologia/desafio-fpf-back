<?php

use Illuminate\Support\Facades\Route;

Route::resource('participantes', 'ParticipanteController')->only([
    'index', 'store', 'destroy'
]);

Route::resource('projetos', 'ProjetoController');
