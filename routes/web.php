<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\GenderController;
use App\Http\Controllers\DocumentTypeController;
use Illuminate\Support\Facades\Mail;
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

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');


Route::get('profile',function(){
  return view('profile');
});

Route::get('contacto', function () {
  return view('contact');
})->name('contact');

Route::get('Error404', function () {
  return view('404');
})->name('404');

Route::resource('users',UserController::class);

Route::resource('genders', GenderController::class);

Route::resource('document_types', DocumentTypeController::class);

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