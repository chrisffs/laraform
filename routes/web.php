<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FormController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [FormController::class, 'index']);

Route::post('/attendance', [FormController::class, 'store']);

Route::get('/success', [FormController::class, 'success']);

Route::get('/get-options/{school}', [FormController::class, 'getSchool']);

Route::get('/admin', [AdminController::class, 'login'])->name('login');

Route::post('/admin/authenticate', [AdminController::class, 'authenticate']);

Route::get('/admin/index', [AdminController::class, 'index'])->middleware('auth');

Route::get('/admin/intern_list', [AdminController::class, 'interns'])->middleware('auth');

Route::get('/admin/intern_list/add_intern', [AdminController::class, 'createIntern'])->middleware(('auth'));

Route::post('/admin/intern_list/create_intern', [AdminController::class, 'storeIntern'])->middleware(('auth'));

Route::get('/admin/intern_list/edit_intern/{intern}', [AdminController::class, 'editIntern'])->middleware(('auth'));

Route::put('/admin/intern_list/{intern}', [AdminController::class, 'updateIntern'])->middleware(('auth'));

Route::delete('/admin/intern_list/delete_intern/{intern}', [AdminController::class, 'deleteIntern'])->middleware(('auth'));

Route::get('/admin/intern_list/show_intern/{intern}', [AdminController::class, 'show'])->middleware('auth');

Route::get('/admin/intern_logs/', [AdminController::class, 'logs'])->middleware('auth');

Route::get('/admin/settings/', [AdminController::class, 'settings'])->middleware('auth');

Route::post('/admin/settings/add_school', [AdminController::class, 'storeSchool'])->middleware('auth');

Route::delete('/admin/settings/delete_school/{school}', [AdminController::class, 'deleteSchool'])->middleware('auth');

Route::post('/admin/settings/add_program', [AdminController::class, 'storeProgram'])->middleware('auth');

Route::delete('/admin/settings/delete_program/{program}', [AdminController::class, 'deleteProgram'])->middleware(('auth'));
Route::post('/admin/logout', [AdminController::class, 'logout']);

