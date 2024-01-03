<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/ola', [\App\Http\Controllers\ProvaController::class, 'printP']);
Route::get('/materia', [\App\Http\Controllers\MateriaController::class, 'index']);
Route::post('/materia/store', [\App\Http\Controllers\MateriaController::class, 'store']);

Route::get('/aluno', [\App\Http\Controllers\AlunoController::class, 'index']);
Route::post('/aluno/store', [\App\Http\Controllers\AlunoController::class, 'store']);

Route::get('/questao',[\App\Http\Controllers\QuestaoController::class, 'index']);
Route::post('questao/store',[\App\Http\Controllers\QuestaoController::class, 'store']);
Route::get('/questao/getRandomQuestionsBySubject', [\App\Http\Controllers\QuestaoController::class, 'getRandomQuestionsBySubject']);

Route::get('/prova', [\App\Http\Controllers\ProvaController::class, 'index']);
Route::post('/prova/store', [\App\Http\Controllers\ProvaController::class, 'store']);

Route::get('/provaQuestao/questions/{id}', [\App\Http\Controllers\ProvaQuestaoController::class, 'getAllQuestionsByProva']);
Route::post('/provaQuestao/answer', [\App\Http\Controllers\ProvaQuestaoController::class, 'answer']);
Route::get('/provaQuestao/grade', [\App\Http\Controllers\ProvaQuestaoController::class, 'grade']);
