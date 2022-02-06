<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloController;
use App\Http\Controllers\FlexWebController;
use App\Http\Controllers\GridWebController;
use App\Http\Controllers\SotechHtmlCssController;

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

Route::get('/hello', [HelloController::class, 'index']);

Route::get('/flexweb/', [FlexWebController::class, 'index'])->name('flexweb.index');
Route::get('/flexweb/post01', [FlexWebController::class, 'post01'])->name('flexweb.post01');
Route::get('/flexweb/about', [FlexWebController::class, 'about'])->name('flexweb.about');
Route::get('/flexweb/contact', [FlexWebController::class, 'contact'])->name('flexweb.contact');


Route::get('/gridweb/', [GridWebController::class, 'index'])->name('gridweb.index');
Route::get('/gridweb/post01', [GridWebController::class, 'post01'])->name('gridweb.post01');
Route::get('/gridweb/post02', [GridWebController::class, 'post02'])->name('gridweb.post02');
Route::get('/gridweb/post03', [GridWebController::class, 'post03'])->name('gridweb.post03');
Route::get('/gridweb/post04', [GridWebController::class, 'post04'])->name('gridweb.post04');


Route::get('/sotech/', [SotechHtmlCssController::class, 'index'])->name('sotech.index');
Route::get('/sotech/menu', [SotechHtmlCssController::class, 'menu'])->name('sotech.menu');
Route::get('/sotech/access', [SotechHtmlCssController::class, 'access'])->name('sotech.access');
Route::get('/sotech/contact', [SotechHtmlCssController::class, 'contact'])->name('sotech.contact');
