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

Route::prefix( 'api' )->group( function( ){
  Route::group( [ 'middleware' => ['api'] ], function( ) {
    Route::post( 'login', [ 'as' => 'user.auth', 'uses' => 'UserController@login' ] );
    Route::post( 'admin-login', [ 'as' => 'admin.auth', 'uses' => 'AdminController@login' ] );
  });

  Route::group( [ 'middleware' => ['admin-api'] ], function( ) {
    Route::get( 'dashboard', [ 'as' => 'admin.dashboard', 'uses' => 'AdminController@dash' ] );
  });

});


Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
