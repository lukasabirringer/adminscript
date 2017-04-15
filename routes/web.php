<?php
//listen aller Routes: php artisan route:list

//VORRÜBERGEHENDE ROUTES
//Route::get('/', function () {return view('welcome');});


//BACKEND-ROUTES
Route::group(['namespace' => 'Admin', 'middleware' => 'App\Http\Middleware\IsAdmin'], function () {

		Route::get('admin', function () {
				return view('admin.dashboard');
		});

		Route::resource('/admin/pages', 'PagesController');
		Route::resource('/admin/beachcourts', 'BeachcourtController');
		Route::resource('/admin/users', 'UserController');

});


//FRONTEND-ROUTES
Route::group(['namespace' => 'Frontend'], function () {
	
		Route::get('/', 'HomepageController@show');
		Route::get('/pages/{id}', 'PagesController@read');
		Route::resource('/beachcourts', 'BeachcourtController');

		Route::get('/profile/{id}', 'ProfileController@show')->middleware('auth');

});

Auth::routes();

Route::get('/home', 'HomeController@index');
