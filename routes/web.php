<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\EmailVerificationRequest;

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
    return view('home');
})->name('home');

Route::get('/invite/{username}', [App\Http\Controllers\HomeController::class, 'invite'])->name('user.invite');

Route::post('/get/contract/address', [App\Http\Controllers\GetController::class, 'contract_address'])->name('get.contract.address');

Auth::routes();

Route::get('/dashboard', [App\Http\Controllers\UserController::class, 'index'])->name('user.home');

Route::get('/asset', [App\Http\Controllers\UserController::class, 'asset'])->name('user.asset');

Route::get('/wallet/send', [App\Http\Controllers\UserController::class, 'wallet_send'])->name('user.wallet.send');

Route::get('/wallet/receive', [App\Http\Controllers\UserController::class, 'wallet_receive'])->name('user.wallet.receive');

Route::get('/wallet/{asset}', [App\Http\Controllers\UserController::class, 'wallet'])->name('user.wallet');

Route::get('/referral', [App\Http\Controllers\UserController::class, 'referral'])->name('user.referral');

Route::post('/contract/history', [App\Http\Controllers\UserController::class, 'contract_history'])->name('user.contract.history');

Route::post('/user/profile/update', [App\Http\Controllers\UserController::class, 'profile_update'])->name('user.profile.update');

Route::get('/user/profile', [App\Http\Controllers\UserController::class, 'profile'])->name('user.profile');

Route::post('/user/password/update', [App\Http\Controllers\UserController::class, 'password_change'])->name('user.password.update');

Route::get('/user/email/verify', function() {
	return view('auth.verify');
})->middleware('auth')->name('verification.notice');

Route::get('/user/email/verify/{id}/{hash}', function(EmailVerificationRequest $request) {
	$request->fulfill();

	return redirect('/dashboard');
})->middleware(['auth', 'signed'])->name('verification.verify');

Route::post('/user/email/verification-notification', function(Request $request) {
	$request->user()->sendEmailVerificationNotification();

	return back()->with('message', 'Verification link sent!');
})->middleware(['auth', 'throttle:6,1'])->name('verification.resend');

Route::get('/user/logout', [App\Http\Controllers\UserController::class, 'logout'])->name('user.logout');
