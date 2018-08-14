<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', 'API\UserController@index');
// Route::get('/user/{username}/edit',"API\UserController@edit")->name('user.edit')->middleware('auth');
Route::apiResource('user', 'API\UserController', [	
	'except' => [ 'index' ]
]);