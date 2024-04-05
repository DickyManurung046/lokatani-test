<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Employee\EmployeeController;

Route::redirect('/', '/employees');

// Rute resource untuk EmployeesController
Route::resource('employees', EmployeeController::class);
