<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ModalController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContactController;
use App\Http\Requests\ContactRequest;

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
require __DIR__.'/auth.php';

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::post('/logout', [App\Http\Controllers\Auth\AuthenticatedSessionController::class, 'destroy'])->name('logout');

// Route::get('/register', [UserController::class, 'add']);
// Route::post('/register', [UserController::class, 'create']);

// Route::get('/admin', [UserController::class, 'admin']);
// Route::get('/admin', [UserController::class, 'login']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'post']);
Route::get('/contact/confirm', [ContactController::class, 'confirm']);
Route::post('/contact/confirm', [ContactController::class, 'send']);
Route::get('/contact/thanks', [ContactController::class, 'thanks']);


// Route::get('/form', "SampleFormController@show")->name("form.show");
// Route::post('/form', "SampleFormController@post")->name("form.post");
// Route::get('/form/confirm', "SampleFormController@confirm")->name("form.confirm");
// Route::post('/form/confirm', "SampleFormController@send")->name("form.send");
// Route::get('/form/thanks', "SampleFormController@complete")->name("form.complete");

Route::get('/modal', [ModalController::class, 'modal']);