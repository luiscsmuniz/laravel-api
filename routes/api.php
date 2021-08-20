<?php

use App\Http\Controllers\api\PhraseController;

Route::get('/random-phrase', [PhraseController::class, 'random'] );
Route::get('/phrase/{id}', [PhraseController::class, 'show'] );
Route::get('/phrases', [PhraseController::class, 'index'] );
Route::post('/create-phrase', [PhraseController::class, 'store'] );
Route::put('/update-phrase/{id}', [PhraseController::class, 'update'] );
Route::delete('/delete-phrase/{id}', [PhraseController::class, 'destroy'] );
