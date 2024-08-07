<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\dashboard\Analytics;
use App\Http\Controllers\daduk\Daduk;
use App\Http\Controllers\daduk\DadukDetail;
use App\Http\Controllers\pages\AccountSettingsAccount;
use App\Http\Controllers\pages\AccountSettingsNotifications;
use App\Http\Controllers\pages\AccountSettingsConnections;
use App\Http\Controllers\pages\MiscError;
use App\Http\Controllers\pages\MiscUnderMaintenance;
use App\Http\Controllers\authentications\LoginBasic;
use App\Http\Controllers\authentications\RegisterBasic;
use App\Http\Controllers\authentications\ForgotPasswordBasic;

use App\Http\Controllers\tables\Basic as TablesBasic;

// authentication
Route::get('/auth/login', [LoginBasic::class, 'index'])->name('auth-login-basic');
Route::get('/auth/logout', [LoginBasic::class, 'logout'])->name('auth-logout-basic');
Route::get('/auth/register', [RegisterBasic::class, 'index'])->name('auth-register-basic');
Route::get('/auth/forgot-password', [ForgotPasswordBasic::class, 'index'])->name('auth-reset-password-basic');

// Main Page Route
Route::get('/', [Analytics::class, 'index'])->name('dashboard');

// daduk
Route::get('/daduk', [Daduk::class, 'index'])->name('upload-daduk');
Route::get('/daduk/detail', [DadukDetail::class, 'index'])->name('detail-daduk');

// pages
Route::get('/pages/account-settings', [AccountSettingsAccount::class, 'index'])->name('pages-account-settings');
Route::get('/pages/misc-error', [MiscError::class, 'index'])->name('pages-misc-error');
Route::get('/pages/misc-under-maintenance', [MiscUnderMaintenance::class, 'index'])->name('pages-misc-under-maintenance');