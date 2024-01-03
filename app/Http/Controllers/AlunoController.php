<?php

namespace App\Http\Controllers;

use App\Models\Aluno;
use Illuminate\Http\Request;

class AlunoController extends Controller
{

    public function index()
    {
        return Aluno::all();
    }

    public function store(Request $request)
    {
        $name = $request->input('name');
        $email = $request->input('email');
        $password = $request->input('password');

        $aluno = new Aluno();
        $aluno->name = $name;
        $aluno->email = $email;
        $aluno->password = $password;

        $aluno->save();
    }

}
