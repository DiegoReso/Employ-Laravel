<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeController;
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

Route::get('/',[EmployeeController::class, 'index']);

Route::get('/register', [EmployeeController::class, 'register']);

Route::get('/employee/{id}', [EmployeeController::class, 'employee']);

Route::get('/employeessn/{id}', [EmployeeController::class, 'employeessn']);

Route::get('/edit/{id}', [EmployeeController::class, 'edit']);

Route::post('/create',[EmployeeController::class, 'create']);

Route::put('/employee/update/{id}', [EmployeeController::class, 'update']);

Route::delete('/delete/{id}', [EmployeeController::class, 'delete']);
