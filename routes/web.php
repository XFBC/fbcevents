<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

// Arquivo de rotas controller
Route::get('/', [EventController::class, 'index']); // Rota Home 
Route::get('/events/create', [EventController::class, 'create']); // Rota Criar um evento
// End controller
// URL/ROTA -> /EVENTS/CREATE -> CONTROLLER -> EVENTCONTROLLER-> ACTION -> CREATE



// ROTA DE POST DA PAGINA DE CRIAÇÃO DE UM NOVO EVENTO // 


Route::post('/events', [EventController::class, 'store']);

// DEPOIS VAI NO CONTROLLER CRIAR A FUNCTION 


Route::get('/paginainicial', function () {
    return view('paginainicial');
});


Route::get('/sobre', function () {
    return view('sobre');
});

Route::get('/produtos', function () {
    return view('produtos');
});


Route::get('/produtos/{id}', function ($id) {
    return view('produto', ['id' => $id]);
});


