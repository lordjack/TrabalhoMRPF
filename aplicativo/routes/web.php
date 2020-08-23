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

Route::get('/', function () {
    return view('main');
});

Route::get('/alunos', 'AlunoController@listar');
Route::get('/alunos/cadastrar', 'AlunoController@cadastrar');
Route::post('/alunos/salvar/{id}', 'AlunoController@salvar');
Route::post('/alunos/editar/{id}', 'AlunoController@editar');
Route::post('/alunos/deletar/{id}', 'AlunoController@deletar');

Route::get('/avaliacoes', 'AvaliacaoController@listar');
Route::get('/avaliacoes/cadastrar', 'AvaliacaoController@cadastrar');
Route::post('/avaliacoes/salvar/{id}', 'AvaliacaoController@salvar');
Route::post('/avaliacoes/editar/{id}', 'AvaliacaoController@editar');
Route::post('/avaliacoes/deletar/{id}', 'AvaliacaoController@deletar');

Route::get('/cidades', 'CidadeController@listar');
Route::get('/cidades/cadastrar', 'CidadeController@cadastrar');
Route::post('/cidades/salvar/{id}', 'CidadeController@salvar');
Route::post('/cidades/editar/{id}', 'CidadeController@editar');
Route::post('/cidades/deletar/{id}', 'CidadeController@deletar');

Route::get('/curso_disciplinas', 'Curso_disciplinaController@listar');
Route::get('/curso_disciplinas/cadastrar', 'Curso_disciplinaController@cadastrar');
Route::post('/curso_disciplinas/salvar/{id}', 'Curso_disciplinaController@salvar');
Route::post('/curso_disciplinas/editar/{id}', 'Curso_disciplinaController@editar');
Route::post('/curso_disciplinas/deletar/{id}', 'Curso_disciplinaController@deletar');

Route::get('/cursos', 'CursoController@listar');
Route::get('/cursos/cadastrar', 'CursoController@cadastrar');
Route::post('/cursos/salvar/{id}', 'CursoController@salvar');
Route::post('/cursos/editar/{id}', 'CursoController@editar');
Route::post('/cursos/deletar/{id}', 'CursoController@deletar');

Route::get('/disciplina_turmas', 'Disciplina_turmaController@listar');
Route::get('/disciplina_turmas/cadastrar', 'Disciplina_turmaController@cadastrar');
Route::post('/disciplina_turmas/salvar/{id}', 'Disciplina_turmaController@salvar');
Route::post('/disciplina_turmas/editar/{id}', 'Disciplina_turmaController@editar');
Route::post('/disciplina_turmas/deletar/{id}', 'Disciplina_turmaController@deletar');

Route::get('/disciplinas', 'DisciplinaController@listar');
Route::get('/disciplinas/cadastrar', 'Disciplina_turmaController@cadastrar');
Route::post('/disciplinas/salvar/{id}', 'DisciplinaController@salvar');
Route::post('/disciplinas/editar/{id}', 'DisciplinaController@editar');
Route::post('/disciplinas/deletar/{id}', 'DisciplinaController@deletar');

Route::get('/escolas', 'EscolaController@listar');
Route::get('/escolas/cadastrar', 'EscolaController@cadastrar');
Route::post('/escolas/salvar/{id}', 'EscolaController@salvar');
Route::post('/escolas/editar/{id}', 'EscolaController@editar');
Route::post('/escolas/deletar/{id}', 'EscolaController@deletar');

Route::get('/habilidades', 'HabilidadeController@listar');
Route::get('/habilidades/cadastrar', 'HabilidadeController@cadastrar');
Route::post('/habilidades/salvar/{id}', 'HabilidadeController@salvar');
Route::post('/habilidades/editar/{id}', 'HabilidadeController@editar');
Route::post('/habilidades/deletar/{id}', 'HabilidadeController@deletar');

Route::get('/matriculas', 'MatriculaController@listar');
Route::get('/matriculas/cadastrar', 'MatriculaController@cadastrar');
Route::post('/matriculas/salvar/{id}', 'MatriculaController@salvar');
Route::post('/matriculas/editar/{id}', 'MatriculaController@editar');
Route::post('/matriculas/deletar/{id}', 'MatriculaController@deletar');

Route::get('/pessoas', 'PessoaController@listar');
Route::get('/pessoas/cadastrar', 'PessoaController@cadastrar');
Route::post('/pessoas/salvar/{id}', 'PessoaController@salvar');
Route::post('/pessoas/editar/{id}', 'PessoaController@editar');
Route::post('/pessoas/deletar/{id}', 'PessoaController@deletar');

Route::get('/professores', 'ProfessorController@listar');
Route::get('/professores/cadastrar', 'EscolaController@cadastrar');
Route::post('/professores/salvar/{id}', 'ProfessorController@salvar');
Route::post('/professores/editar/{id}', 'ProfessorController@editar');
Route::post('/professores/deletar/{id}', 'ProfessorController@deletar');

Route::get('/questionarios', 'QuestionarioController@listar');
Route::get('/questionarios/cadastrar', 'QuestionarioController@cadastrar');
Route::post('/questionarios/salvar/{id}', 'QuestionarioController@salvar');
Route::post('/questionarios/editar/{id}', 'QuestionarioController@editar');
Route::post('/questionarios/deletar/{id}', 'QuestionarioController@deletar');

Route::get('/turmas', 'TurmaController@listar');
Route::get('/turmas/cadastrar', 'TurmaController@cadastrar');
Route::post('/turmas/salvar/{id}', 'TurmaController@salvar');
Route::post('/turmas/editar/{id}', 'TurmaController@editar');
Route::post('/turmas/deletar/{id}', 'TurmaController@deletar');
