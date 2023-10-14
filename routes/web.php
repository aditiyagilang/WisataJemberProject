<?php

use Illuminate\Support\Facades\Route;

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

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\BillingController;
use App\Http\Controllers\TransaksiController;
use App\Models\Transaksi;

Route::get('/', function () {return redirect('sign-in');})->middleware('guest');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('auth')->name('dashboard');
Route::get('sign-up', [RegisterController::class, 'create'])->middleware('guest')->name('register');
Route::post('sign-up', [RegisterController::class, 'store'])->middleware('guest');
Route::get('sign-in', [SessionsController::class, 'create'])->middleware('guest')->name('login');
Route::post('sign-in', [SessionsController::class, 'store'])->middleware('guest');
Route::post('verify', [SessionsController::class, 'show'])->middleware('guest');
Route::post('reset-password', [SessionsController::class, 'update'])->middleware('guest')->name('password.update');
Route::get('verify', function () {
	return view('sessions.password.verify');
})->middleware('guest')->name('verify');
Route::get('/reset-password/{token}', function ($token) {
	return view('sessions.password.reset', ['token' => $token]);
})->middleware('guest')->name('password.reset');
Route::get('/UserManagement', [UserController::class, 'tabel'])->middleware('auth')->name('UserManagement');
Route::get('/pesanan', [TransaksiController::class, 'tabeltrans'])->middleware('auth')->name('pesanan');
Route::get('/tables', [HomeController::class, 'tabeldoc'])->middleware('auth')->name('tables');
Route::get('/count', [DashboardController::class, 'count'])->middleware('auth')->name('count');
Route::get('/billing', [BillingController::class, 'tabelbill'])->middleware('auth')->name('billing');
Route::get('/jenis', [BillingController::class, 'jenis'])->middleware('auth')->name('jenis');
Route::post('sign-out', [SessionsController::class, 'destroy'])->middleware('auth')->name('logout');
Route::get('profile', [ProfileController::class, 'create'])->middleware('auth')->name('profile');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::post('user-profile', [ProfileController::class, 'update'])->middleware('auth');
Route::post('/admin-users', [UserController::class, 'insertAdminUser'])->name('admin-user.store');
Route::post('/isertdoc', [HomeController::class, 'insertDokumen'])->name('insertdoc.store');
Route::post('/isertsej', [HomeController::class, 'insertSejarah'])->name('insertsej.store');
Route::post('/isertbill', [BillingController::class, 'insertBilling'])->name('insertbill.store');
Route::post('/iserttran', [TransaksiController::class, 'insertTransaction'])->name('inserttran.store');
Route::post('/updatesej/{id}', [HomeController::class, 'updateSejarah'])->name('updatesej.store');
Route::post('/updatebill/{id}', [BillingController::class, 'updateBilling'])->name('updatebill.store');
Route::post('/updatetran/{id}', [TransaksiController::class, 'updateTransaction'])->name('updatetran.store');
Route::post('/updateadm/{id}', [UserController::class, 'updateAdminUser'])->name('updateadm.store');
Route::put('/user-profile/{id}', [UserController::class, 'updateAdminUser'])->name('update-user-profile');
Route::post('/user-profile-photo', [UserController::class, 'updateAdminUserPhoto'])->name('update-user-profile-photo');

Route::delete('/category/{id}', [UserController::class, 'destroy'])->name('nieuws.destroy');
Route::delete('/deletedoc/{id}', [HomeController::class, 'destroydoc'])->name('nieuws.destroydoc');
Route::delete('/deletebill/{id}', [BillingController::class, 'destroybill'])->name('nieuws.destroybill');
Route::delete('/deletetrans/{id}', [TransaksiController::class, 'destroytrans'])->name('nieuws.destroytrans');
Route::get('/get-harga/{id}', [TransaksiController::class, 'getHarga']);
Route::group(['middleware' => 'auth'], function () {
	// Route::get('billing', function () {
	// 	return view('pages.billing');
	// })->name('billing');
	// Route::get('pesanan', function () {
	// 	return view('pages.pesanan');
	// })->name('pesanan');
	// Route::get('tables', function () {
	// 	return view('pages.tables');
	// })->name('tables');

	Route::get('virtual-reality', function () {
		return view('pages.virtual-reality');
	})->name('virtual-reality');
	Route::get('notifications', function () {
		return view('pages.notifications');
	})->name('notifications');
	Route::get('static-sign-in', function () {
		return view('pages.static-sign-in');
	})->name('static-sign-in');
	Route::get('static-sign-up', function () {
		return view('pages.static-sign-up');
	})->name('static-sign-up');
	Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
		Route::get('user-profile', function () {
		return view('pages.laravel-examples.user-profile');
	})->name('user-profile');
});
