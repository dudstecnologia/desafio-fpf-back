<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'API - Gerenciamento de Projetos';
});

Route::resource('participantes', 'ParticipanteController')->only([
    'index', 'store', 'destroy'
]);

Route::resource('projetos', 'ProjetoController');
