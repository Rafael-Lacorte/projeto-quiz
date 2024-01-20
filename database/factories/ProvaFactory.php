<?php

namespace Database\Factories;

use App\Models\Aluno;
use App\Models\Materia;
use App\Models\Prova;
use App\Models\ProvaQuestao;

class ProvaFactory
{
    protected $model = Prova::class;

    public static function create(Aluno $aluno, Materia $materia)
    {
        $prova = new Prova();
        $prova->aluno_id = $aluno->id;
        $prova->status = 'ABERTA';
        $prova->nota = null;

        $prova->save();

        (new self())->setQuestions($materia, $prova);
        return $prova;
    }

    private function setQuestions(Materia $materia, Prova $prova) 
    {
        $questions = $materia->getRandomQuestions();
        foreach ($questions as $question) {
            $provaQuestao = new ProvaQuestao();
            $provaQuestao->prova_id = $prova->id;
            $provaQuestao->questao_id = $question->id;
            $provaQuestao->resposta_escolhida_id = null;
            $provaQuestao->save();
        }

    }
}
