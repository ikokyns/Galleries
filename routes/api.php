<?php

use Illuminate\Http\Request;

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


// Route::get('/galleries', 'GallerieController@index');
// Route::get('/galleries/{id}', 'GallerieController@show');

Route::post('/login', 'Auth\LoginController@authenticate');
Route::middleware('jwt')->post('/register', 'UserController@register');

Route::middleware('jwt')->get('/all', 'GallerieController@index');

Route::middleware('jwt')->post('/contacts', 'ContactController@store');