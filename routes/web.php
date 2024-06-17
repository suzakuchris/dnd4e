<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Controller;
use App\Http\Controllers\FetchController;

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

Route::get('/', [Controller::class, 'status']);

Route::group(['prefix' => 'fetch'], function(){
    Route::get('/class/{id?}', [FetchController::class, 'class'])->name('fetch.class');
    Route::get('/background/{id?}', [FetchController::class, 'background'])->name('fetch.background');
    Route::get('/companion/{id?}', [FetchController::class, 'companion'])->name('fetch.companion');
    Route::get('/deity/{id?}', [FetchController::class, 'deity'])->name('fetch.deity');
    Route::get('/disease/{id?}', [FetchController::class, 'disease'])->name('fetch.disease');
    Route::get('/epic_destiny/{id?}', [FetchController::class, 'epic_destiny'])->name('fetch.epic_destiny');
    Route::get('/feat/{id?}', [FetchController::class, 'feat'])->name('fetch.feat');
    Route::get('/glossary/{id?}', [FetchController::class, 'glossary'])->name('fetch.glossary');
    Route::get('/item/{id?}', [FetchController::class, 'item'])->name('fetch.item');
    Route::get('/monster/{id?}', [FetchController::class, 'monster'])->name('fetch.monster');
    Route::get('/paragon_path/{id?}', [FetchController::class, 'paragon_path'])->name('fetch.paragon_path');
    Route::get('/poison/{id?}', [FetchController::class, 'poison'])->name('fetch.poison');
    Route::get('/power/{id?}', [FetchController::class, 'power'])->name('fetch.power');
    Route::get('/race/{id?}', [FetchController::class, 'race'])->name('fetch.race');
    Route::get('/ritual/{id?}', [FetchController::class, 'ritual'])->name('fetch.ritual');
    Route::get('/skill/{id?}', [FetchController::class, 'skill'])->name('fetch.skill');
    Route::get('/terrain/{id?}', [FetchController::class, 'terrain'])->name('fetch.terrain');
    Route::get('/theme/{id?}', [FetchController::class, 'theme'])->name('fetch.theme');
    Route::get('/trap/{id?}', [FetchController::class, 'trap'])->name('fetch.trap');
});

Route::get('/sheet', [Controller::class, 'sheet']);