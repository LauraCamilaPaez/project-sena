<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\DocumentTypeController;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\IncapacidadesController;
use App\Http\Controllers\TrainingCenterController;

use Illuminate\Support\Facades\Mail;
use App\Mail\IncapacidadesMailable; 

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



Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

// Solo vistas con usuarios logueados
Route::middleware(['auth:sanctum', 'verified'])->group(function(){
    Route::get('/', function () {
        return view('welcome');
    });
    Route::resource('users',UserController::class);
    Route::resource('genders', GenderController::class);
    Route::resource('document_types', DocumentTypeController::class);
    Route::resource('training_center', TrainingCenterController::class);
    Route::resource('campus', CampusController::class);
});

    Route::get('incapacidades', [IncapacidadesController::class, 'index'] )->name('incapacidades.index');

    Route::post('incapacidades', [IncapacidadesController::class, 'store'] )->name('incapacidades.store');

    
    Route::get('profile',function(){
    
        return view('profile');
    
    });


