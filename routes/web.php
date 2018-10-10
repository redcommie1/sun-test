<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'IndexController@index');
Route::get('/recipes/{id}', 'IndexController@getRecipe')->name('getRecipe');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/admin', 'AdminController@admin')
    ->middleware('is_admin')
    ->name('admin');

Route::group(['middleware' => ['is_admin']], function () {

    Route::get('/create-recipe', 'AdminController@getCreateRecipe')->name('create-recipe');
    Route::post('/save-recipe', 'AdminController@saveRecipe')->name('save-recipe');
    Route::get('/edit-recipe/{id}', 'AdminController@getEditRecipe')->name('get-edit-recipe');
    Route::post('/save-edit-recipe/{id}', 'AdminController@saveEditRecipe')->name('save-edit-recipe');
    Route::get('/delete-recipe/{id}', 'AdminController@deleteRecipe')->name('delete-recipe');
});