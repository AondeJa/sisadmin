<?php

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

Route::get('/', 'CarroController@index')->name('carros.index');
Route::get('reporte_detalhado/{id}', 'CarroController@show');
Route::get('/reportes', 'CarroController@showReportes');


Route::group(['prefix' => 'analise', 'middleware'=>'App\Http\Middleware\AdminMiddleware'], function() {
    Route::get('/', 'CarroController@analise');
    Route::delete('/deletar/{id}', 'CarroController@destroy');
    Route::put('/permitir/{id}', 'CarroController@update');
});

Route::get('/post/{id}', 'PostsController@show')->name('posts.show');
Route::resource('comments', 'CommentsController');

Route::get('/info', function () {
    return view('info');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
