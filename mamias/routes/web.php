<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\UserController;

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
    return view('layouts.base');
});

Route::resource('user', UserController::class);
Route::get('/user', [UserController::class, 'index']);
Route::get('/user/edit', [UserController::class, 'edit']);
Route::get('/user/{id}', [PostsController::class, 'show'])
    ->name('user.show');

Route::get('/countries', [CountryController::class, 'index'])->name('country.index');
Route::get('countries/list', [StudentController::class, 'getStudents'])->name('students.list');

Route::get('logs', '\Rap2hpoutre\LaravelLogViewer\LogViewerController@index');

Route::get('form', [CountryController::class, 'index']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
