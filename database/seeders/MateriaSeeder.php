<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MateriaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $materias = [
            [
                'name' => 'Geografia',
            ],
            [
                'name' => 'Matemática',
            ],
        ];
        foreach ($materias as $materia) {
            DB::table('materia')->insert($materia);
        }
    }
}
