<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Resposta extends Model
{
    use HasFactory;
    protected $table = 'resposta';

    public function questao()
    {
        return $this->belongsTo(Questao::class);
    }

    public function provaQuestao()
    {
        return $this->hasMany(ProvaQuestao::class);
    }

}
