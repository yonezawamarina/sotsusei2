<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DogController;
use App\Models\Dog;
use Illuminate\Http\Request;

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

// Route::resource('dogs', DogController::class)
// ->middleware(['auth']); 

// グループ化してまとめるとシンプルに書ける
Route::prefix('dogs') // 頭に contacts をつける
 ->middleware(['auth']) // 認証
 ->name('dogs.')// ルート名
 ->controller(DogController::class) // コントローラ指定(laravel9から)
 ->group(function(){ // グループ化
 Route::get('/', 'index')->name('index'); // 名前つきルート 
 Route::get('/dog', 'create')->name('dogs'); 
 Route::post('/dog', 'store')->name('store'); 
 Route::get('/{id}', 'show')->name('show'); 
 Route::get('/{id}/edit', 'edit')->name('edit'); 
 Route::post('/{id}', 'update')->name('update'); 
 Route::post('/{id}/destroy', 'destroy')->name('destroy'); 
 
 });


Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

