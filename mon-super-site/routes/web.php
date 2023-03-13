<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StorePostController;
use App\Http\Controllers\PostController;

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

Route::view('/a-propos', 'a-propos');

Route::post('/posts', [StorePostController::class, 'store']); 
Route::post('/posts', StorePostController::class); 


Route::resource('posts', PostController::class );


Route::view('/mon-super-formulaire', 'mon-super-formulaire');
Route::post('/mon-super-formulaire', function(){
    // c'est ici qu'on écrira le code.
});

Route::post('/traitement-dde-mon-super-formulaire', function () {
    $input = request()->validate([
        'nom'=>['requireed', 'min:3', 'max:255'],
    ]);

    return 'Bonjour, ' . $input['nom'] . ' !'; 
});