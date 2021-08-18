<?php

use App\Http\Controllers\api\PhraseController;

Route::apiResource('phrases', 'App\Http\Controllers\api\PhraseController');

Route::get('/random-phrase', [PhraseController::class, 'random'] );