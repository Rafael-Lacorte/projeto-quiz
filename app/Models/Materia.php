<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Facades\DB;

class Materia extends Model
{
    use HasFactory;
    protected $table = 'materia';
    public function questao(): HasMany
    {
        return $this->hasMany(Questao::class);
    }

    public function getRandomQuestions($numberOfQuestions = 10)
    {
        $result = $this->questao()->inRandomOrder()->limit($numberOfQuestions)->get();
        return $result;
    }

}
