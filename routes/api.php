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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::namespace('Api')->group(function () {
});

// testApi
Route::get('/home/list', 'HomeController@testApi');

// FILES UPLOAD

Route::post('/files/uploadFiles/{folder}', 'FilesController@uploadFiles');
Route::post('/files/deleteFiles', 'FilesController@deleteFiles');

//users

Route::group(['middleware' => 'auth.jwt'], function () {

    Route::get('/users/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'UserController@getAll');
    Route::apiResource('users', 'UserController');

    //regions
    Route::get('/regions/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'RegionController@getList');
    Route::apiResource('regions', 'RegionController');

    //activite
    Route::get('/activites/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'ActiviteController@getAll');
    Route::apiResource('activites', 'ActiviteController');

    //planifications
    Route::get('/planifications/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'PlanificationController@getAll');
    Route::apiResource('planifications', 'PlanificationController');

    //presidents
    Route::get('/presidents/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'PresidentController@getList');
    Route::apiResource('presidents', 'PresidentController');

    //galeries
    Route::get('/galeries/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'GalerieController@getList');
    Route::apiResource('galeries', 'GalerieController');

    //blogs
    Route::get('/blogs/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'BlogController@getAll');
    Route::apiResource('blogs', 'BlogController');

    //contacts
    Route::get('/contacts/getList/{startIndex}/{pageSize}/{sortBy}/{sortDir}', 'ContactController@getList');
    Route::apiResource('contacts', 'ContactController');
});

//activite
Route::get('/activites/listApi/{startIndex}/{pageSize}/{idRegion}/{dateOrderDir}', 'ActiviteController@listApi');
//planifications
Route::get('/planifications/getLast/{city}', 'PlanificationController@getLast');


//accounts
Route::post('/accounts/login', 'AccountController@login');
// Route::middleware('auth:sanctum')->post('/accounts/login', 'AccountController@login');

Route::post('/accounts/register', 'AccountController@register');
// Route::apiResource('accounts', 'UserController');