<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('admin/dashboard', [AdminController::class, 'index'])->name('index');




require __DIR__ . '/auth.php';

