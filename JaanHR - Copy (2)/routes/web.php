<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ManagementController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PayrollController;


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

Route::get('/', function () {
    return view('welcome');
});



// Authentication routes
Route::get('/login', [AuthController::class, 'showLogin'])->name('login.form');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'showRegister'])->name('register.form');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');



// Protected route for the dashboard
Route::middleware('auth')->get('/dashboard', function () {
    return view('pages.dashboard');
})->name('dashboard');

// Route for displaying the forgot password form
Route::get('/forgot-password', [AuthController::class, 'showForgotPassword'])->name('forgot-password');

// Route for handling forgot password submission
Route::post('/sendresetlink', [AuthController::class, 'handleForgotPassword'])->name('sendresetlink');

//Route::post('/password/email', [AuthController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/password/reset/{token}', [AuthController::class, 'showResetForm'])->name('password.reset');
Route::post('/password/update', [AuthController::class, 'updateNewPassword'])->name('password.update');


Route::get('/resetsuccess', [AuthController::class, 'showResetSuccess'])->name('resetsuccess');

Route::get('/api/employees', function () {
    return App\Models\Employee::all();
});

Route::get('/dashboard', [EmployeeController::class, 'GetAllEmployees'])->name('dashboard');



Route::get('/management/employee-management', [ManagementController::class, 'employeeManagement'])->name('employee.management');
Route::get('/management/payroll-management', [ManagementController::class, 'payrollManagement'])->name('payroll.management');
Route::get('/management/leave-management', [ManagementController::class, 'leaveManagement'])->name('leave.management');


Route::get('/employee/{id}', [EmployeeController::class, 'show']);
Route::post('/employee/update', [EmployeeController::class, 'update']);
Route::delete('/employee/delete/{id}', [EmployeeController::class, 'delete']);



Route::get('/dashboard/{section}', [DashboardController::class, 'show'])->name('dashboard.section');

Route::middleware('auth')->get('/dashboard/employee', [EmployeeController::class, 'index'])->name('dashboard.section');
Route::middleware('auth')->get('/dashboard/employee/{id}', [EmployeeController::class, 'show'])->name('employee.details');


// Payroll Management Routes
Route::middleware('auth')->get('/dashboard/payroll', [PayrollController::class, 'index'])->name('dashboard.payroll');
Route::middleware('auth')->get('/dashboard/payroll/{id}', [PayrollController::class, 'show'])->name('payroll.details');
Route::middleware('auth')->get('/dashboard/payroll/{id}/edit', [PayrollController::class, 'edit'])->name('payroll.edit');
Route::middleware('auth')->put('/dashboard/payroll/{id}', [PayrollController::class, 'update'])->name('payroll.update');
Route::middleware('auth')->delete('/dashboard/payroll/{id}', [PayrollController::class, 'destroy'])->name('payroll.destroy');
