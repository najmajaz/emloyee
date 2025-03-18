<?php



use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

use App\Http\Controllers\EmployeeController;





Route::view('/', 'welcome')->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');

Route::post('/login', [AuthController::class, 'loginpost'])->name('login.post');

Route::get('/register',[AuthController::class, 'register'])->name('register');

Route::post('/register', [AuthController::class, 'registerpost'])->name('register.post');

Route::get('/create',[AuthController::class, 'create']);


// Default route that redirects to /employee
Route::get('/', [EmployeeController::class, 'index'])->name('home');

// Employees index route
Route::get('/employees', [EmployeeController::class, 'index'])->name('employees.index');

// Other routes for employees
Route::get('/employees/create', [EmployeeController::class, 'create'])->name('employees.create');
Route::post('/employees', [EmployeeController::class, 'store'])->name('employees.store');
Route::get('/employees/{employee}/edit', [EmployeeController::class, 'edit'])->name('employees.edit');
Route::put('/employees/{employee}', [EmployeeController::class, 'update'])->name('employees.update');
Route::delete('/employees/{employee}', [EmployeeController::class, 'destroy'])->name('employees.destroy');







  

