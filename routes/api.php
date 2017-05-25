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

Route::group(['prefix'=>env('API_VERSION')], function() {
  Route::get('gizi', 'API\GiziController@getAll')->name('gizi.getAll');
  Route::get('gizi/{id}', 'API\GiziController@getOne')->name('gizi.getOne');
});

Route::group(['prefix'=>env('API_VERSION')], function() {
  Route::post('calory', 'API\IngredientController@getCalory')->name('ingredient.getCalory');
});
