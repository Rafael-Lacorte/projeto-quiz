<?php

namespace App\Http\Controllers;

use App\Models\Resposta;
use Illuminate\Http\Request;

class RespostaController extends Controller
{
    public function index()
    {
        return Resposta::all();
    }

    public function store(Request $request)
    {
        $textoResposta = $request->input('texto_resposta');
        $questaoId = $request->input('questao_id');
        $isCorrect = $request->input('is_correct');


        $materia = new Resposta();
        $materia->texto_resposta = $textoResposta;
        $materia->questao_id = $questaoId;
        $materia->isCorrect = $isCorrect;
        $materia->save();

    }
}
