<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/dashboard', 'dashboard');

// Auth
Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');

// Vendor Portal
Route::view('/dashboard/vendor/registration', 'vendor-portal.registration');
Route::view('/dashboard/vendor/profile', 'vendor-portal.profile-management');
Route::view('/dashboard/vendor/invoice', 'vendor-portal.invoice');

// Audit Management
Route::view('/dashboard/audit/checklist', 'audit.checklist');
Route::view('/dashboard/audit/scheduling', 'audit.scheduling');
Route::view('/dashboard/audit/reporting', 'audit.reporting');

// Fleet Management
Route::view('/dashboard/fleet/vehicle-tracking', 'fleet.vehicle-tracking');
Route::view('/dashboard/fleet/maintenance', 'fleet.maintenance');
Route::view('/dashboard/fleet/fuel', 'fleet.fuel');
