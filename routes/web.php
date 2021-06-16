<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\DocumentTypeController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\GeneralObjectiveController;
use App\Http\Controllers\SpecificObjectiveController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\NewsController;
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
    Route::resource('general_objective', GeneralObjectiveController::class);
    Route::resource('specific_objective', SpecificObjectiveController::class);
    Route::resource('contracts', ContractController::class);
    Route::resource('news', NewsController::class);
});


Route::get('profile',function(){
  return view('profile');
});

Route::get('contacto', function () {
  return view('contact');
})->name('contact');

Route::get('Error404', function () {
  return view('404');
})->name('404');

//Contáctanos
// Route::get('/', function () {
//   return view('home');
// })->name('home');

// Route::get('service', function () {
//   return view('service');
// })->name('service');

// Route::get('nosotros', function () {
//   return view('nosotros');
// })->name('nosotros');

// Route::get('inisesion', function () {
//   return view('inisesion');
// })->name('inisesion');

Route::post('messages', function(){
  //enviar correo
  $data = request()->all();
  Mail::send("emails.message", $data, function($message) use ($data) {
      $message->from($data['email'], $data['name'])
          ->to('dprueba029@gmail.com', 'Diego')
          ->subject($data['subject']);
  });
  //responder al usuario
  return back()->with('flash', $data['name'] .',  Tu mensaje ha sido recibido');

})->name('messages');

