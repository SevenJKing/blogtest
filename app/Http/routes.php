<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
require(__DIR__.'/routes/auth_routes.php');  
require(__DIR__.'/routes/admin_routes.php');
require(__DIR__.'/routes/blog_routes.php');  

Route::get('/','BaseController@index');
Route::any('/setlang/{lang}','BaseController@setlang');
