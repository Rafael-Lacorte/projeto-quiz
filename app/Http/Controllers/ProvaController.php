<?php

namespace App\Http\Controllers;


use App\Models\Aluno;
use App\Models\Materia;
use App\Models\Prova;
use Database\Factories\ProvaFactory;
use Illuminate\Http\Request;

class ProvaController
{

    public function index()
    {
        return Prova::all();
    }

    public function store(Request $request)
    {
        $alunoId = $request->input('aluno_id');
        $materiaId = $request->input('materia_id');
        $aluno = Aluno::find($alunoId);
        $materia = Materia::find($materiaId);

        return ProvaFactory::create($aluno, $materia);
    }

//    public function grade(Request $request)
//    {
//        $provaId = $request->input('prova_id');
//        $prova = Prova::find($provaId);
//
//    }

}
