<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LeadController;

use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/', function () {
    return view('login');
});
use App\Http\Controllers\DashboardController;

// Dashboard (tampil setelah login)
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Halaman list calon customer (lead)
Route::get('/leads', [LeadController::class, 'index'])->name('leads.index');

use App\Http\Controllers\ProjectController;

Route::get('/projects/process/{id}', [ProjectController::class, 'process'])->name('projects.process');
Route::post('/projects/process/{id}', [ProjectController::class, 'store'])->name('projects.store');


use App\Http\Controllers\CustomerController;

Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

use App\Http\Controllers\ProductController;

// Route untuk menampilkan daftar produk
Route::get('/products', [ProductController::class, 'index'])->name('products.index');
Route::delete('/projects/{id}', [ProjectController::class, 'destroy'])->name('projects.destroy');


Route::get('/customers', [CustomerController::class, 'index'])->name('customers.index');

Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
Route::post('/products', [ProductController::class, 'store'])->name('products.store');

Route::resource('products', ProductController::class);
Route::get('/leads/{lead}/edit', [LeadController::class, 'edit'])->name('leads.edit');
Route::delete('/leads/{lead}', [LeadController::class, 'destroy'])->name('leads.destroy');
Route::resource('leads', LeadController::class);

Route::get('/leads/create', [LeadController::class, 'create'])->name('leads.create');
Route::post('/leads', [LeadController::class, 'store'])->name('leads.store');
