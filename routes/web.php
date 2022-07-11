<?php

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
    return view('welcome');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    /** DASHBOARD **/
    Route::get('/dashboard', [\App\Http\Controllers\Dashboard\DashboardController::class, 'index'])
        ->name('dashboard');

    /** LIBRARY COMPOSITION AND COLLECTION **/
    Route::get('/library', [\App\Http\Controllers\Library\LibraryController::class, 'index'])
        ->name('library');
    Route::get('/library/composition', [\App\Http\Controllers\Library\CompositionController::class, 'create'])
        ->name('library.composition');
    Route::get('/library/medley', function() {
        return view('library.medley');
    })->name('library.medley');

    Route::post('/composition/store', [\App\Http\Controllers\Library\CompositionController::class, 'store'])
        ->name('library.composition.store');
    Route::post('/collection/store', [\App\Http\Controllers\Library\MedleyController::class, 'store'])
        ->name('library.collection.store');

    /** PROFILE */
    Route::get('/profile', [\App\Http\Controllers\ProfileController::class, 'index'])
        ->name('profile');
    Route::post('/profile.password', [\App\Http\Controllers\ProfileController::class, 'password'])
        ->name('profile.password');
    Route::post('/profile.update', [\App\Http\Controllers\ProfileController::class, 'update'])
        ->name('profile.update');

});
