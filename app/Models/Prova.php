<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Prova extends Model
{
    use HasFactory;
    protected $table = 'prova';

    public function aluno()
    {
        return $this->belongsTo(Aluno::class);
    }

    public function provaQuestao()
    {
        return $this->hasMany(ProvaQuestao::class);
    }
}
