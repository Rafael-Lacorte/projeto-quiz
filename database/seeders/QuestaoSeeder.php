<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class QuestaoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $questoes = [
            [
                'texto_pergunta' => 'Qual a capital da Nigeria',
                'materia_id' =>    1
            ],
            [
                'texto_pergunta' => 'Qual a capital da Alemanha',
                'materia_id' =>    1
            ],
            [
                'texto_pergunta' => 'Qual a capital do Colombia',
                'materia_id' =>    1
            ],
            [
                'texto_pergunta' => 'Qual a capital dos Estados Unidos da America',
                'materia_id' =>    1
            ],
            [
                'texto_pergunta' => 'Qual a capital da Turquia',
                'materia_id' =>    1
            ],
            [
                'texto_pergunta' => 'Qual a capital da Inglaterra',
                'materia_id' =>    1
            ],
            [
                'texto_pergunta' => 'Qual a capital da Holanda',
                'materia_id' =>    1
            ],
            [
                'texto_pergunta' => 'Qual a capital da Belgica',
                'materia_id' =>    1
            ],
            [
                'texto_pergunta' => 'Qual a capital do Japão',
                'materia_id' =>    1
            ],
            [
                'texto_pergunta' => 'Qual a capital da Arábia Saudita',
                'materia_id' =>    1
            ],
            [
                'texto_pergunta' => 'Qual a capital da Coreia do Sul',
                'materia_id' =>    1
            ],
        ];
        foreach ($questoes as $questao) {
            DB::table('questao')->insert($questao);
        }
    }

}
