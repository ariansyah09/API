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


// Get all Categories
Route::get('categories', 'CategoriesController@getCategories');

// Get Specic Categories detail
Route::get('Categories/{id}', 'CategoriesController@getCategoriesById');

// Add Categories
Route::post('addCategories', 'CategoriesController@addCategories');

// Update Categories
Route::put('updateCategories/{id}', 'CategoriesController@updateCategories');

// Delete Categories
Route::delete('deleteCategories/{id}', 'CategoriesController@deleteCategories');


