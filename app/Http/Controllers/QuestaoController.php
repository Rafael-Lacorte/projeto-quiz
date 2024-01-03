<?php

namespace App\Http\Controllers;


use App\Models\Materia;
use App\Models\Questao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestaoController
{

    public function index()
    {
       return Questao::all();
    }

    public function getRandomQuestionsBySubject(Materia $materia)
    {
        $materia = new Materia();
        dd($materia->getRandomQuestions());
        return $materia->getRandomQuestions();

    }

    public function store(Request $request)
    {
        $textoPergunta = $request->input('texto_pergunta');
        $materiaId = $request->input('materia_id');

        $materia = new Questao();
        $materia->texto_pergunta = $textoPergunta;
        $materia->materia_id = $materiaId;
        $materia->save();

    }



}
