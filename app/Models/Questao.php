<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Questao extends Model
{
    use HasFactory;
    protected $table = 'questao';

    public function materia()
    {
        return $this->belongsTo(Materia::class);
    }

    public function resposta()
    {
        return $this->hasOne(Resposta::class);
    }

    public function provaQuestao()
    {
        return $this->hasMany(ProvaQuestao::class);
    }
}
