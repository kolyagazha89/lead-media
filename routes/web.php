<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;

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


Route::get('/company', [CompanyController::class,'index'])->name("index");
Route::get('/company/show/{company}', [CompanyController::class,'show'])->name("showCompany");
Route::get('/company/add', [CompanyController::class,'create'])->name("createFormCompany");
Route::post('/company/add', [CompanyController::class,'store'])->name("addCompany");
Route::get('/company/update/{company}', [CompanyController::class,'edit'])->name("editFormCompany");
Route::post('/company/update/{company}', [CompanyController::class,'update'])->name("editCompany");
Route::post('/company/delete/{company}', [CompanyController::class,'destroy'])->name("deleteCompany");

Route::get('/customer/add/{company}', [CustomerController::class,'create'])->name("createFormCustomer");
Route::post('/customer/add', [CustomerController::class,'store'])->name("addCustomer");
Route::get('/customer/update/{customer}', [CustomerController::class,'edit'])->name("editFormCustomer");
Route::post('/customer/update/{customer}', [CustomerController::class,'update'])->name("editCustomer");
Route::post('/customer/delete/{customer}', [CustomerController::class,'destroy'])->name("deleteCustomer");

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
