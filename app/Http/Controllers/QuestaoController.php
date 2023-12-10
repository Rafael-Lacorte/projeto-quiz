<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QuestaoController
{

    public function printP()
    {
        echo '<p>Tá Printando<p>';
    }

    public function store(Request $request)
    {
        $textoPergunta = $request->input('textoPergunta');

        DB::insert('INSERT INTO questao (questao_id, texto_pergunta) VALUES (?, ?)', [$materiaId, $textoPergunta]);

    }



}
