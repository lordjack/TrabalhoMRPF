<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'TurmaController@listar');

Route::get('/login', function (){
  return view('login');
});

Route::get('/avaliacao/cadastrar/{id}', 'AvaliacaoController@cadastrar');
Route::post('/avaliacao/salvar/{id}', 'AvaliacaoController@salvar');
Route::get('/avaliacoes/exibir/{id}', 'AvaliacaoController@exibir');
Route::get('/avaliacoes/{id}', 'AvaliacaoController@listar');
Route::get('/avaliacoes/editar/{id}', 'AvaliacaoController@editar');
Route::get('/avaliacoes/deletar/{id}', 'AvaliacaoController@deletar');

Route::get('/alunos/{id}', 'AlunoController@listar');
Route::get('/alunos/cadastrar/{id}', 'AlunoController@cadastrar');
Route::post('/alunos/salvar/{id}', 'AlunoController@salvar');
Route::get('/alunos/editar/{id}', 'AlunoController@editar');
Route::get('/alunos/deletar/{id}', 'AlunoController@deletar');

Route::get('/cursos', 'CursoController@listar');
Route::get('/cursos/cadastrar', 'CursoController@cadastrar');
Route::post('/cursos/salvar/{id}', 'CursoController@salvar');
Route::get('/cursos/editar/{id}', 'CursoController@editar');
Route::get('/cursos/deletar/{id}', 'CursoController@deletar');

Route::get('/professores', 'ProfessorController@listar');
Route::get('/professores/cadastrar', 'ProfessorController@cadastrar');
Route::post('/professores/salvar/{id}', 'ProfessorController@salvar');
Route::get('/professores/editar/{id}', 'ProfessorController@editar');
Route::get('/professores/deletar/{id}', 'ProfessorController@deletar');

Route::get('/turmas', 'TurmaController@listar');
Route::get('/turmas/cadastrar', 'TurmaController@cadastrar');
Route::post('/turmas/salvar/{id}', 'TurmaController@salvar');
Route::get('/turmas/editar/{id}', 'TurmaController@editar');
Route::get('/turmas/deletar/{id}', 'TurmaController@deletar');

Route::get('/responsavel', 'ResponsavelAlunoController@listar');
Route::get('/responsavel/cadastrar', 'ResponsavelAlunoController@cadastrar');
Route::post('/responsavel/salvar/{id}', 'ResponsavelAlunoController@salvar');
Route::get('/responsavel/editar/{id}', 'ResponsavelAlunoController@editar');
Route::get('/responsavel/deletar/{id}', 'ResponsavelAlunoController@deletar');
