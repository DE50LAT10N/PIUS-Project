<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\TopicController;
use Illuminate\Support\Facades\Route;


Route::get('/', [MainController::class, 'mp']);

Route::get('/crtop', [TopicController::class, 'create']);

Route::get('/topics', [TopicController::class, 'index']);


