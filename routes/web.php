<?php

use Illuminate\Support\Facades\Route;

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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/', [App\Http\Controllers\ResumeController::class, 'index']);
Route::get('/resume/{id}', [App\Http\Controllers\ResumeController::class, 'resume'])->name("resume");


Route::post('/create', [App\Http\Controllers\CreateResumeController::class, 'create'])->name('create');
// Route::namespace('manage')->prefix('manage')->name('manage.')->middleware('can:manage-users')->group(function() {
    //     Route::resource('/manage', 'AdminController', ['except'=>['index, edit']]);
// });
    
    
Route::get('/manage', [App\Http\Controllers\AdminController::class, 'index'])->name("manage.index");

Route::get('/manage/generate', [App\Http\Controllers\AdminController::class, 'generate'])->name("manage.generate");
Route::get('/manage/edit/{id}', [App\Http\Controllers\AdminController::class, 'edit'])->name("manage.edit");
Route::post('/manage/editItem/{id}', [App\Http\Controllers\AdminController::class, 'editSubmit'])->name("manage.editItem");
Route::delete('/manage/delete/{id}', [App\Http\Controllers\AdminController::class, 'delete'])->name('manage.delete');


