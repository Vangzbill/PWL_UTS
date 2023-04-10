<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BukuController;
use Illuminate\Support\Facades\Route;
use App\Models\BukuModel;

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

Route::get('/', function () {
    return view('dashboard');
});

Route::middleware(['auth'])->group(function () {
    Route::resource('/buku', BukuController::class)->parameter('buku', 'id');

    Route::resource('/blog', BlogController::class)->parameter('blog', 'id');

    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::get('buku/search', function() {
        $query = request('query');
        $posts = App\Models\BukuModel::search($query);
        return view('buku.search', compact('posts', 'query'));
    });
});



