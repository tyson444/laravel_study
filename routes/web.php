<?php
Route::resource('articles','ArticlesController');

/*
DB::listen(function ($query){
	var_dump($query->sql);
});
*/
/*
Route::get('/','WelcomeController@index');

Route::get('protected', ['middleware' => 'auth', function() {

}]);

Route::get('auth/login', function(){

	$credentials = [
		'email' => 'john@example.com',
		'password' => 'password',
		//'password' => 'secret',
	];

	if(! auth()->attempt($credentials)){
		return '로그인 정보가 정확하지 않습니다.';
	}

	return redirect('protected');
	//return '머야이거';
});

Route::get('protected', function(){
	dump(session()->all());

	if(! auth()->check()){
		return '누구세요?111';
	}

	return '어서 오세요' . auth()->user()->name;
});

Route::get('auth/logout', function(){
	auth()->logout();

	return '또 봐요~';
});



Auth::routes();

Route::get('/home', 'HomeController@index');
*/
