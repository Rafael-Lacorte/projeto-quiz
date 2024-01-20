<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RespostaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $respostas = [
            [
                'texto_resposta' => 'Lagos',
                'questao_id' => 1,
                'is_correct' => 1
            ],
            [
                'texto_resposta' => 'Nairobe',
                'questao_id' => 1,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Berlin',
                'questao_id' => 1,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Bogotá',
                'questao_id' => 1,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Washington D.C.',
                'questao_id' => 1,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Berlin',
                'questao_id' => 2,
                'is_correct' => 1
            ],
            [
                'texto_resposta' => 'Rio de Janeiro',
                'questao_id' => 2,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Munique',
                'questao_id' => 2,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Bogotá',
                'questao_id' => 2,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Washington D.C',
                'questao_id' => 2,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Cali',
                'questao_id' => 3,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Los Angeles',
                'questao_id' => 3,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Bruxelas',
                'questao_id' => 3,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Bogotá',
                'questao_id' => 3,
                'is_correct' => 1
            ],
            [
                'texto_resposta' => 'Nova York',
                'questao_id' => 3,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Washington D.C.',
                'questao_id' => 4,
                'is_correct' => 1
            ],
            [
                'texto_resposta' => 'Londres',
                'questao_id' => 4,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Bruxelas',
                'questao_id' => 4,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Roma',
                'questao_id' => 4,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Nova York',
                'questao_id' => 4,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Constantinopla',
                'questao_id' => 5,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Beirute',
                'questao_id' => 5,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Instambul',
                'questao_id' => 5,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Ankara',
                'questao_id' => 5,
                'is_correct' => 1
            ],
            [
                'texto_resposta' => 'Karach',
                'questao_id' => 5,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Paris',
                'questao_id' => 6,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Birmingham',
                'questao_id' => 6,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Nova York',
                'questao_id' => 6,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Liverpool',
                'questao_id' => 6,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Londres',
                'questao_id' => 6,
                'is_correct' => 1
            ],
            [
                'texto_resposta' => 'Bruxelas',
                'questao_id' => 7,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Paris',
                'questao_id' => 7,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Estocolmo',
                'questao_id' => 7,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Amsterdâ',
                'questao_id' => 7,
                'is_correct' => 1
            ],
            [
                'texto_resposta' => 'Andorra',
                'questao_id' => 7,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Bruxelas',
                'questao_id' => 8,
                'is_correct' => 1
            ],
            [
                'texto_resposta' => 'Paris',
                'questao_id' => 8,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Estocolmo',
                'questao_id' => 8,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Amsterdâ',
                'questao_id' => 8,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Estocolmo',
                'questao_id' => 8,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Amsterdâ',
                'questao_id' => 8,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Andorra',
                'questao_id' => 8,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Seoul',
                'questao_id' => 9,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Kyoto',
                'questao_id' => 9,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Tóquio',
                'questao_id' => 9,
                'is_correct' => 1
            ],
            [
                'texto_resposta' => 'Pequim',
                'questao_id' => 9,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Singapura',
                'questao_id' => 9,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Singapura',
                'questao_id' => 9,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Dubai',
                'questao_id' => 10,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Riade',
                'questao_id' => 10,
                'is_correct' => 1
            ],
            [
                'texto_resposta' => 'Paris',
                'questao_id' => 10,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Londres',
                'questao_id' => 10,
                'is_correct' => 0
            ],
            [
                'texto_resposta' => 'Meca',
                'questao_id' => 10,
                'is_correct' => 0
            ],
        ];
        foreach ($respostas as $resposta) {
            DB::table('materia')->insert($resposta);
        }
    }
}
