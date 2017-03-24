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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'PresentationController@index')->middleware('auth');
Route::get('files/{title_pres}/{filename}', 'FileController@show')->where('filename', '^[^/]+$')->middleware('auth');

Route::get('{title_pres}/{number}','SlideController@show');

//->where(['title_pres'=>'[A-Za-z0-9-]+', 'number'=>'[0-9]+']);


/*Route::get('/pres/{title_pres}/{number}',function($title_pres,$number){
	$listSlides = App\Presentation::listSlideByPres($title_pres);
	return view('layouts.testView',['listSlides'=>$listSlides,'number'=>$number]);
});*/