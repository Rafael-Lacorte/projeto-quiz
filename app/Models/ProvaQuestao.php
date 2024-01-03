<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProvaQuestao extends Model
{
    use HasFactory;
    protected $table = 'prova_questao';

    public function prova()
    {
        return $this->belongsToMany(Prova::class);
    }

    public function questao()
    {
        return $this->belongsToMany(Questao::class);
    }

    public function resposta()
    {
        return $this->belongsToMany(Resposta::class);
    }

    public function grade(Prova $prova)
    {
         $provaQuestoes =  ProvaQuestao::where('prova_id', $prova->id)->get();
         $grade = 0;
         foreach ($provaQuestoes as $provaQuestao) {
             $resposta = Resposta::where('id', $provaQuestao->resposta_escolhida_id)->get();
             if($resposta[0]->is_correct == 1) {
                 var_dump($provaQuestao->questao_id);
                 var_dump($resposta[0]->texto_resposta);
                $grade++;
             }
         }
         $prova->nota = $grade;
         $prova->save();
    }

}
