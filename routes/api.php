<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(['namespace' => 'App\Http\Controllers\API'], function(){
    Route::group(['prefix' => 'meta'], function(){
        Route::get('art-themes', 'MetaSelectsController@getArtThemes');
        Route::get('brands', 'MetaSelectsController@getBrands');
        Route::get('categories', 'MetaSelectsController@getCategories');
        Route::get('characters', 'MetaSelectsController@getCharacters');
        Route::get('conditions', 'MetaSelectsController@getConditions');
        Route::get('cultures', 'MetaSelectsController@getCultures');
        Route::get('decor-styles', 'MetaSelectsController@getDecorStyles');
        Route::get('eras', 'MetaSelectsController@getEras');
        Route::get('franchises', 'MetaSelectsController@getFranchises');
        Route::get('materials', 'MetaSelectsController@getMaterials');
        Route::get('occasions', 'MetaSelectsController@getOccasions');
        Route::get('shapes', 'MetaSelectsController@getShapes');
        Route::get('manufacturer-id-types', 'MetaSelectsController@getManufacturerIdTypes');
    });
});
