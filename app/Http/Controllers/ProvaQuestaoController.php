<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use App\Models\Materia;
use App\Models\Prova;
use App\Models\ProvaQuestao;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class ProvaQuestaoController extends Controller
{

    public function getAllQuestionsByProva($id)
    {
        return ProvaQuestao::where('prova_id', $id)->get();
    }

    public function answer(Request $request)
    {
        if (count($request->all()) < 10) {
            return response()->json(['error' => 'As 10 questões devem ser respondidas'], Response::HTTP_BAD_REQUEST);
        }

        $answers = $request->all();
        foreach ($answers as $answer) {
            $provaQuestao = ProvaQuestao::find($answer['id']);
            $provaQuestao->resposta_escolhida_id = $answer['resposta_escolhida_id'];
            $provaQuestao->save();
        }

    }

    public function grade($provaId)
    {
        $provaQuestao =  new ProvaQuestao();
        $prova = Prova::find($provaId);
        $provaQuestao->grade($prova);
        $prova->status = 'Concluída';
        $prova->save();
    }

}
