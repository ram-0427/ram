<?php

use App\Http\Controllers\FacultyController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/index', [FacultyController::class, 'main']);//FRONT PAGE WITH USER BUTTON

Route::resource('faculties', FacultyController::class);  

Route::get('/faculties/{faculty_id}/edit', 'FacultyController@edit')->name('faculties.edit');

Route::put('/faculties/{faculty_id}', 'FacultyController@update')->name('faculties.update');








//sample 
//Route::get('/index', [FacultyController::class, 'index1']);