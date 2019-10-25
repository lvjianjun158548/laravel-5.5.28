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

// Route::get('/{id?}', function ($id=10) {
//     // return view('welcome');
//     echo $id;
//     echo 'hello word';
//     echo 'sdafgdsafgd';
// });

Route::get('/home/{id}', function ($id) {
    // return view('welcome');
    echo $id;
})->name('root');
Route::group(['prefix'=>'home/test'],function(){
	Route::get('test1',function(){
		return 'test1';
	});
	Route::get('test2',function(){
		return 'test2';
	});
});
//控制器理由
Route::get('test1','Admin\TestController@test1');
Route::get('test2','Admin\TestController@test2');
Route::get('test3','Admin\TestController@test3');
Route::get('test4','Admin\TestController@test4');
Route::get('test5','Admin\TestController@test5');
Route::get('test6','Admin\TestController@test6');
Route::post('test7','Admin\TestController@test7')->name('t7');
Route::get('test8','Admin\TestController@test8');
Route::post('test9','Admin\TestController@test9')->name('t9');
Route::get('test10','Admin\TestController@test10');
//数据库的操作
Route::get('add','Admin\TestController@add');
Route::get('del','Admin\TestController@del');
Route::get('mod','Admin\TestController@mod');
Route::get('select','Admin\TestController@select');