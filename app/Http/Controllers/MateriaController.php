<?php

namespace App\Http\Controllers;


use App\Models\Materia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MateriaController
{
    public function index()
    {
        $materias = Materia::all();
        return $materias;
    }
    public function store(Request $request)
    {
        $name = $request->input('name');
        $materia = new Materia();
        $materia->name = $name;
        $materia->save();

    }

}
