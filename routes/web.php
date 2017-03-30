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

Route::get('/newPres','PresentationController@createPres')->middleware('auth');

Route::post('/addPres',array('as' => 'addPres','uses' => 'PresentationController@savePres'));

Route::get('{title_pres}/newSlide','SlideController@createSlide');

Route::get('{title_pres}/listSlides','SlideController@getListByPres');

Route::get('{title_pres}/','SlideController@show');


//->where(['title_pres'=>'[A-Za-z0-9-]+', 'number'=>'[0-9]+']);


/*Route::get('/pres/{title_pres}/{number}',function($title_pres,$number){
	$listSlides = App\Presentation::listSlideByPres($title_pres);
	return view('layouts.testView',['listSlides'=>$listSlides,'number'=>$number]);
});*/