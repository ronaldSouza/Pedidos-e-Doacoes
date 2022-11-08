<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pedidosController;
use App\Http\Controllers\DoacaoController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdminController;

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
    return view('landing_page');
})->name('landing_page');

Route::get('/dashboard', function () {
    return view('common_user.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


// Route::get('/login', function () {
//     return view('auth.login');
// })->name('auth.login');

// Route::get('/register', function () {
//     return view('auth.register');
// })->name('auth.register');

// Route::get('/Pedidos', function () {
//     return view('common_user.requests.index');
// })->name('requests.index');

// Route::get('pedidos', [pedidosController::class, 'index'])->name('requests.index');


// Route::get('pedidos/criar', [pedidosController::class, 'create'])->name('requests.create');


// Route::post('pedidos/criar', [pedidosController::class, 'store']);

Route::resource('pedidos', pedidosController::class)->middleware('auth');

Route::resource('doacao', DoacaoController::class)->middleware('auth');

Route::resource('users', UserController::class)->middleware('auth');


Route::get('admin/list', [AdminController::class, 'list'])->name('admin.list')->middleware(['auth', 'isAdmin']);
Route::resource('admin', AdminController::class)->middleware(['auth', 'isAdmin']);


// Route::middleware(['auth', 'isAdmin'])->group(function () {
//     Route::get('/admin', function () {
//       return view('admin.dashboard');
//     })->name('admin.dashboard');
//   });

// Route::post('doacao/create/{$id}', [DoacaoController::class, 'stores'])->name();

// Route::middleware(['auth'])->group(function (){
//     //only authenticated people access 

// });
require __DIR__.'/auth.php';
