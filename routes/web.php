<?php

use App\Http\Controllers\Admin;
use App\Http\Controllers\Authentification;
use App\Http\Controllers\RegisterUser;
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
// page principale
Route::get('/', function () {
    return view('welcome');
});

// page validation en cours
Route::get('/message', function () {
    return view('message');
});

// page principale Admin
Route::view('/admin','admin')->name('admin_page')->middleware('auth')->middleware('is_admin');


//enregistrement d'un utilisateur
Route::get('/register',[RegisterUser::class,'Form'])->name('register');
Route::post('/register',[RegisterUser::class,'registre'])->name('register');

//authentification d'un utilisateur
Route::get('/authentification',[Authentification::class,'Form'])->name('authentification');
Route::post('/authentification',[Authentification::class,'login'])->name('authentification');

Route::get('/déconnexion',[Authentification::class,'logout'])
    ->name('déconnexion')->middleware('auth');

//PARTIE ADMIN
//page d'affichage des utilisateurs
Route::get('/affichageUsers',[Admin::class,'affichageUser'])->name('affichageUsers')->middleware('is_admin');


//page d'affichage des etudiants
Route::get('/affichageStudent',[Admin::class,'affichageStudent'])->name('affichageStudent')->middleware('is_admin');


//page de modification d'un utilisateur par ladmin
Route::get('/validationUsers',[Admin::class,'adminvalidation'])->name('validation')->middleware('is_admin');
Route::post('/validationUsers',[Admin::class,'valid'])->middleware('is_admin');


//PARTIE ETUDIANT
Route::view('/student','student')->name('student_page')->middleware('is_student');

//Saisir message
Route::get('/messageGrl',[\App\Http\Controllers\Users::class,'affichageMessageGrl'])->name('msgGeneral');
Route::post('/messageGrl',[\App\Http\Controllers\Users::class,'msgsave']);

