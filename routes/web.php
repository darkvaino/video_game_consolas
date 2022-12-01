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
/*
Route::get('/', function () {
    return view('video_game\index');
});*/

/* pagina principal  */
Route::get(
    '/',
    [\App\Http\Controllers\VideogamesController::class,'index']
);

Route::get(
    '/test-database',
    [\App\Http\Controllers\TestController::class, 'testdb']
);

Route::resource(
    '/video_game',
    \App\Http\Controllers\VideogamesController::class
);
/*
Route::resource(
    '/students',
    \App\Http\Controllers\StudentsController::class
);*/
