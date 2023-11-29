<?php

use App\Http\Controllers\StaffController;
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

Route::get('/', [StaffController::class, 'index']);
Route::get('/create', [StaffController::class, 'create'])->name('create');

Route::post('/post-staff', [StaffController::class, 'store'])->name('staff.store');
Route::get('/staff/{id}/edit', [StaffController::class, 'edit'])->name('staff.edit');
Route::put('/staff/{id}/update', [StaffController::class, 'update'])->name('staff.update');
Route::delete('/staff-delete/{id}', [StaffController::class, 'destroy'])->name('staff.destroy');


