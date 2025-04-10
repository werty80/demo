<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\EmployerController;
use App\Http\Controllers\HouseController;
use App\Http\Controllers\IslandController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VillageController;
use Illuminate\Support\Facades\Route;


Route::view('/', 'home');
Route::view('learn more', 'learn more');

Route::resource('islands', IslandController::class);
Route::resource('villages', VillageController::class);
Route::resource('contacts', ContactController::class);
Route::resource('users', UserController::class);
Route::resource('jobs', JobController::class);
Route::resource('employers', EmployerController::class);
Route::resource('houses', HouseController::class);
Route::resource('peoples', PeopleController::class);

Route::get('/register', [RegisteredUserController::class, 'create']);
Route::post('/register', [RegisteredUserController::class, 'store']);

Route::get('/login', [SessionController::class, 'create']);
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/houses/create', [HouseController::class, 'create'])->name('houses.create');
