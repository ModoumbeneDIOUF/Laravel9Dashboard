<?php

use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\Admin\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
    korou deukendo niankou ak koor gui gale no stress
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';


Route::prefix('/admin')->group(function(){

    // Admin Login route
    Route::match(['get','post'], 'login','AdminController@login');

    Route::group(['middleware' => ['admin']], function(){

         // Admin Dashboard
         Route::get('dashboard','AdminController@dashboard');
         Route::get('logout','AdminController@logout');
    });
    });


// Start Admin login Route Without admin  group

//Route::get('admin/login','AdminController@login');


// End Admin login Route Without admin  group


// Start Admin Dashboard Route Without admin  group

// Route::get('admin/dashboard','AdminController@dashboard');

// End Admin Dashboard Route Without admin  group

