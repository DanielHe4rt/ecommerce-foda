<?php

use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\Customers\CustomersController;
use App\Http\Controllers\ProductsController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/categories', [CategoriesController::class, 'index'])->name('categories.index');
Route::get('/categories/create', [CategoriesController::class, 'create'])->name('categories.create');
Route::post('/categories', [CategoriesController::class, 'store'])->name('categories.store');
Route::get('/categories/{category}', [CategoriesController::class, 'edit'])->name('categories.edit');
Route::put('/categories/{category}', [CategoriesController::class, 'update'])->name('categories.update');
Route::delete('/categories/{category}', [CategoriesController::class, 'delete'])->name('categories.delete');

Route::get('/products', [ProductsController::class, 'index'])->name('products.index');
Route::get('/products/create', [ProductsController::class, 'create'])->name('products.create');
Route::post('/products', [ProductsController::class, 'store'])->name('products.store');
Route::get('/products/{product}', [ProductsController::class, 'edit'])->name('products.edit');
Route::put('/products/{product}', [ProductsController::class, 'update'])->name('products.update');
Route::delete('/products/{product}', [ProductsController::class, 'delete'])->name('products.delete');

Route::get('/customers', [CustomersController::class, 'viewCustomers'])->name('customers.index');
Route::get('/customers/create', [CustomersController::class, 'viewNewCustomer'])->name('customers.create');
Route::post('/customers', [CustomersController::class, 'postCustomer'])->name('customers.store');
Route::get('/customers/{customer}', [CustomersController::class, 'viewCustomerEdit'])->name('customers.edit');
Route::put('/customers/{customer}', [CustomersController::class, 'putCustomer'])->name('customers.update');
Route::delete('/customers/{customer}', [CustomersController::class, 'deleteCustomer'])->name('customers.delete');
