<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Phrase;

class PhraseController extends Controller
{
    public function index()
    {
        return Phrase::all();
    }

    public function random()
    {
        return Phrase::all()->random();
    }

    public function store(Request $request)
    {
        return Phrase::create($request->all());
    }

    public function show($id)
    {
        return Phrase::findOrFail($id);
    }

    public function update(Request $request, $id)
    {
        $phrase = Phrase::findOrFail($id);

        $phrase->update($request->all());
    }

    public function destroy($id)
    {
        $phrase = Phrase::findOrFail($id);

        $phrase->delete();
    }
}
