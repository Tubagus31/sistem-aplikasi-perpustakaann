<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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

Auth::routes();

Route::resource('users', \App\Http\Controllers\UserController::class)
    ->middleware('auth');

Auth::routes();

Route::resource('transaksi', \App\Http\Controllers\TransaksiController::class)
    ->middleware('auth');

Route::resource('buku', \App\Http\Controllers\BukuController::class)
    ->middleware('auth');

Route::resource('member', \App\Http\Controllers\membercontroller::class)
->middleware('auth');


Route::get('/fun', [App\Http\Controllers\FunController::class, 'document']);

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//log-viewers
Route::get('log-viewers', [\Rap2hpoutre\LaravelLogViewer\LogViewerController::class, 'index']);


Route::get('download-pdf', [PostController::class, 'downloadPDF']);
Route::get('generate-pdf', [PDFController::class, 'generatePDF']);
?>