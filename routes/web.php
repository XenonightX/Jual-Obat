<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ListBarangController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [HomeController::class, 'index']);
Route::get('/contact', [HomeController::class, 'contact']);
route::get('/welcome', function () {
    return view('welcome');
});
route::get('/user/{id}', function ($id) {
    return 'User dengan ID ' . $id;
});
route::prefix('admin')->group(function () {
    route::get('/dashboard', function () {
        return 'Admin Dashboard';
    });

    route::get('/users', function () {
        return 'Admin Users';
    });
});
// Route::get('/listbarang/{id}/{nama}', function($id, $nama){
//     return view('list_barang', compact('id', 'nama'));
// });
Route::get('/listbarang/{id}/{nama}', [ListBarangController::class, 'tampilkan']);
