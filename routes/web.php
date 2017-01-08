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
/*
Route::get('/', function () {
    //return view('welcome');
    return '<h1>Hello Foo</h1>';
});
*/
/*
Route::pattern('foo','[0-9a-zA-Z]{3}');

Route::get('/{foo?}', function ($foo='bar123') {
    return $foo;
})->where('foo123','[0-9a-zA-Z]{3}');
*/
/*
Route::get('/',[
	'as' => 'home',
	function(){
		return '제 이름은 "home"입니다.';
	}
]);

Route::get('/home',function(){
	return redirect(route('home'));
});
*/
/*
Route::get('/',function(){
	return view('errors.503');
});
*/
/*
Route::get('/',function(){
	return view('welcome')->with('name','Foo');
});
*/
/*
Route::get('/',function(){
	return view('welcome')->with([
		'name'=>'Foo',
		'greeting'=>'안녕하세요?',
		]);
});
*/
/*
Route::get('/',function(){
	return view('welcome',[
		'name'=>'Foo',
		'greeting'=>'안녕하세요?',
		]);
});
*/

Route::get('/',function(){
	//$items = ['apple','banana', 'tomato'];

	//return view('welcome' , ['items' => $items]);

	//return view('layout.master');
	return view('welcome');
});



