<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TopicController;
use App\Http\Controllers\StepController;
use App\Http\Controllers\TextController;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\AnswerController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'mp']);

Route::get('/steps/create', [StepController::class, 'create'])-> name('step.create');
Route::get('/steps/{step}', [StepController::class, 'show']) -> name('step.show');
Route::get('/steps/{step}/edit', [StepController::class, 'edit']) -> name('step.edit');
Route::patch('/steps/{step}', [StepController::class, 'update']) -> name('step.update');
Route::delete('/steps/{step}', [StepController::class, 'destroy']) -> name('step.delete');
Route::post('/steps', [StepController::class, 'store']) -> name('step.store');
Route::get('/steps', [StepController::class, 'index'])-> name('step.index');

Route::get('/answers/create', [AnswerController::class, 'create'])-> name('answer.create');
Route::get('/answers/{answer}', [AnswerController::class, 'show']) -> name('answer.show');
Route::get('/answers/{answer}/edit', [AnswerController::class, 'edit']) -> name('answer.edit');
Route::patch('/answers/{answer}', [AnswerController::class, 'update']) -> name('answer.update');
Route::delete('/answers/{answer}', [AnswerController::class, 'destroy']) -> name('answer.delete');
Route::post('/answers', [AnswerController::class, 'store']) -> name('answer.store');
Route::get('/answers', [AnswerController::class, 'index'])-> name('answer.index');


Route::get('/questions/create', [QuestionController::class, 'create'])-> name('question.create');
Route::get('/questions/{question}', [QuestionController::class, 'show']) -> name('question.show');
Route::get('/questions/{question}/edit', [QuestionController::class, 'edit']) -> name('question.edit');
Route::patch('/questions/{question}', [QuestionController::class, 'update']) -> name('question.update');
Route::delete('/questions/{question}', [QUestionController::class, 'destroy']) -> name('question.delete');
Route::post('/questions', [QuestionController::class, 'store']) -> name('question.store');
Route::get('/questions', [QuestionController::class, 'index'])-> name('question.index');

Route::get('/texts/create', [TextController::class, 'create'])-> name('text.create');
Route::get('/texts/{text}', [TextController::class, 'show']) -> name('text.show');
Route::get('/texts/{text}/edit', [TextController::class, 'edit']) -> name('text.edit');
Route::patch('/texts/{text}', [TextController::class, 'update']) -> name('text.update');
Route::delete('/texts/{text}', [textController::class, 'destroy']) -> name('text.delete');
Route::post('/texts', [TextController::class, 'store']) -> name('text.store');
Route::get('/texts', [TextController::class, 'index'])-> name('text.index');

Route::get('/topics/create', [TopicController::class, 'create'])-> name('topic.create');
Route::get('/topics/{topic}', [TopicController::class, 'show']) -> name('topic.show');
Route::get('/topics/{topic}/edit', [TopicController::class, 'edit']) -> name('topic.edit');
Route::patch('/topics/{topic}', [TopicController::class, 'update']) -> name('topic.update');
Route::delete('/topics/{topic}', [TopicController::class, 'destroy']) -> name('topic.delete');
Route::post('/topics', [TopicController::class, 'store']) -> name('topic.store');
Route::get('/topics', [TopicController::class, 'index'])-> name('topic.index');



