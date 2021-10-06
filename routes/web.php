<?php

use Illuminate\Support\Facades\Route;
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

// Route::get('/', function () {

//     // $name = 'Mr. Digital';
//     $data['name'] = 'Mr. Digital';
//     $data['channel'] = 'Youtube';

//     return view('home', compact('data'));
// });


// Route::get('/', function () {

//     dd('welcome');
// });

// Route::get('/admin', function () {

//     dd('welcome to the admin page');
// });


// Route::get('/admin/users/{id}', function ($id) {

//     dd('welcome to ' . ' user ' . $id . ' page.');
// });

// Route::get('/' 'UserController@showUsers');

Route::get('/', [UserController::class, 'showUsers'])->name('/');
Route::get('/users/create',[UserController::class, 'createUser']);
Route::post('/users/create',[UserController::class, 'saveUser'])->name('createuser');