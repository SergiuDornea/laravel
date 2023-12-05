<?php


use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [WelcomeController::class, 'index']);
Route::get('contact', [WelcomeController::class, 'contact']);

// enunt 2
Route::get('about', [WelcomeController::class, 'about']);
Route::get('contactp', [WelcomeController::class, 'contactp']);

// enunt 3
Route::get('despre', [WelcomeController::class,'despre']);

// enunt 4
Route::get('despresir', [WelcomeController::class,'despresir']);

//enunt 5
Route::get('main', [WelcomeController::class,'main']);

// lab 2 lara
Route::get('/', 'TaskController@index'); //afisare lista sarcini pe pagina destart
Route::resource('tasks', 'TaskController');// Ruta de resurse va genera CRUDURI
