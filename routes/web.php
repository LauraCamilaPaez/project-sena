<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\DocumentTypeController;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\CampusController;
use App\Http\Controllers\IncapacidadesController;
use App\Http\Controllers\TrainingCenterController;
use App\Http\Controllers\GeneralObjectiveController;
use App\Http\Controllers\SpecificObjectiveController;
use App\Http\Controllers\ContractController;
use App\Http\Controllers\InabilityController;
use App\Http\Controllers\NewsController;
// use App\Http\Controllers\PDFController;
use App\Http\Controllers\StatusCertificateController;
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
    Route::get('edit-profile', [UserController::class, 'edit_profile']);
    Route::put('update-profile', [UserController::class, 'update_profile']);
    Route::resource('users',UserController::class);
    Route::resource('genders', GenderController::class);
    Route::resource('document_types', DocumentTypeController::class);
    Route::resource('training_center', TrainingCenterController::class);
    Route::resource('campus', CampusController::class);
    Route::resource('general_objective', GeneralObjectiveController::class);
    Route::resource('specific_objective', SpecificObjectiveController::class);
    Route::get('list-contract', [ContractController::class,'listContracts']);
    Route::resource('contracts', ContractController::class);
    Route::resource('inability', InabilityController::class);
    Route::resource('news', NewsController::class);
    Route::resource('status_certificate', StatusCertificateController::class);

});

//Ruta para el PDf
// Route::get('generate-pdf', [PDFController::class, 'generatePDF']);

    Route::post('incapacidades', [IncapacidadesController::class, 'store'] )->name('incapacidades.store');

    
    Route::get('profile',function(){
    
        return view('profile');
    
    });

Route::get('incapacidad',function(){
  return view('incapacidad');
});

Route::get('contacto', function () {
  return view('contact');
})->name('contact');

Route::get('Error404', function () {
  return view('404');
})->name('404');

Route::resource('users',UserController::class);

// Route::resource('genders', GenderController::class);

Route::resource('document_types', DocumentTypeController::class);

//Route::resource('inability',InabilityController::class);



Route::post('messages', function(){
  //enviar correo
  $data = request()->all();
  Mail::send("emails.message", $data, function($message) use ($data) {
      $message->from($data['email'], $data['name'])
          ->to('dprueba029@gmail.com', 'Diego')
          ->subject($data['subject']);
  });
  //responder al usuario
  return back()->with('flash', $data['name'] .',  Tu incapacidad ha sido recibida');

})->name('messages');

//mensaje para contáctanos
Route::post('messagescontact', function(){
  //enviar correo
  $data = request()->all();
  Mail::send("emails.messagecontact", $data, function($messagescontact) use ($data) {
      $messagescontact->from($data['email'], $data['name'])
          ->to('dprueba029@gmail.com', 'Diego')
          ->subject($data['subject']);
  });
  //responder al usuario
  return back()->with('flash', $data['name'] .',  Tu mensaje ha sido recibido');

})->name('messagescontact');
