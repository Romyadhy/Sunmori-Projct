<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnggotaController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\AdminAuthController;
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

Route::get('/login', function () {
    return view('Sunmori.Home');

});
Route::get('/Sunmori', function () {
    return view('Sunmori.Home');
});

Route::get('/Home', [AnggotaController::class, 'Home'])->name('Sunmori.Home');

Route::get('/Anggota', [AnggotaController::class, 'Anggota'])->name('Sunmori.Anggota');
Route::get('/Pendaftaran', [AnggotaController::class, 'Pendaftaran'])->name('Sunmori.Pendaftaran');
Route::get('/Form', [AnggotaController::class, 'Form'])->name('Sunmori.Form');
Route::get('/adminpage', [AnggotaController::class, 'adminpage'])->name('Sunmori.adminpage');
// Route::post('/approve-member/{id}', 'AnggotaController@approveMember')->name('approve.member');
Route::post('/approve-member/{id}', [AnggotaController::class, 'approveMember'])->name('approve.member');

Route::delete('/reject-member/{id}', 'AnggotaController@rejectMember')->name('reject.member');

// Route::post('/approve-member/{id}', 'AnggotaController@approveMember')->name('approve.member');
// Route::post('/reject-member/{id}', 'AnggotaController@rejectMember')->name('reject.member');


Route::get('/anggotas/create', [AnggotaController::class, 'create']);
Route::post('/anggotas', [AnggotaController::class, 'store'])->name('anggotas.store');
Route::get('/anggotas', [AnggotaController::class, 'index'])->name('Sunmori.Anggota');


// Route::get('/anggotas/create', [AnggotaController::class, 'create']);
// Route::post('/anggotas', [AnggotaController::class, 'store'])->name('anggotas.store');
// Route::get('/anggotas', [AnggotaController::class, 'index'])->name('Sunmori.adminpage');



// Menampilkan formulir login
Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

// Menampilkan formulir registrasi
Route::get('/register', [AuthController::class, 'showRegistrationForm'])->name('auth.register');
Route::post('/register', [AuthController::class, 'register']);

// Logout
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Tampilkan halaman approve members
// Route::get('/admin/approve-members', [AdminAuthController::class, 'approveMembers'])->name('admin.approve-members');

// // Menyetujui anggota berdasarkan ID
// Route::post('/admin/approve-member/{id}', [AdminAuthController::class, 'approveMember'])->name('admin.approve-member');



// Route::get('/admin/register', [AdminAuthController::class, 'showRegistrationForm'])->name('admin.register');
// Route::post('/admin/register', [AdminAuthController::class, 'register']);


// Route::get('/admin/login', [AdminAuthController::class, 'showLoginForm'])->name('admin.login');
// Route::post('/admin/login', [AdminAuthController::class, 'login']);
