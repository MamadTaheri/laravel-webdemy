<?php

use App\Http\Controllers\SeriesController;
use App\Models\Series;
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
    $featuredSeries = Series::take(3)->oldest()->get();
    return view('front', compact('featuredSeries'));
});

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('/series', App\Http\Controllers\SeriesController::class);
Route::get('/series/{series}/episode/{episodeNumber}',[SeriesController::class,'episode'])->name('series.episode');


Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
