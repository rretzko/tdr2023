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

    /** SCHOOLS **/
    Route::get('/schools', [\App\Http\Controllers\SchoolController::class, 'index'])
        ->name('schools');
    Route::get('/schools/add', [\App\Http\Controllers\SchoolController::class, 'create'])
        ->name('schools.create');
    Route::get('/schools/edit/{tenure}', [\App\Http\Controllers\SchoolController::class, 'edit'])
        ->name('schools.edit');
    Route::get('/schools/export', [\App\Http\Controllers\SchoolController::class, 'export'])
        ->name('schools.export');
    Route::get('/schools/remove/{tenure}', [\App\Http\Controllers\SchoolController::class, 'destroy'])
        ->name('schools.destroy');
    Route::post('/schools/save', [\App\Http\Controllers\SchoolController::class, 'store'])
        ->name('schools.store');
    Route::post('/schools/update/{school}', [\App\Http\Controllers\SchoolController::class, 'update'])
        ->name('schools.update');

});
