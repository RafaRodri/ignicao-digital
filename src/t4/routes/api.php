<?php

/*use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});*/

/**
 * Rota que retornará o JSON
 */
Route::get('/', ['as'=>'index','uses'=>'ApiController@index']);


