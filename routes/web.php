<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'welcome');
Route::view('/dashboard', 'dashboard');

// Admin Portal
Route::view('/admin/module', 'admin.module');


// Auth
Route::view('/login', 'auth.login');
Route::view('/register', 'auth.register');

// Vendor Portal
Route::view('/dashboard/vendor/registration', 'modules.vendor-portal.registration');
Route::view('/dashboard/vendor/profile', 'modules.vendor-portal.profile-management');
Route::view('/dashboard/vendor/invoice', 'modules.vendor-portal.invoice');

// Audit Management
Route::view('/dashboard/audit/checklist', 'modules.audit.checklist');
Route::view('/dashboard/audit/scheduling', 'modules.audit.scheduling');
Route::view('/dashboard/audit/reporting', 'modules.audit.reporting');

// Fleet Management
Route::view('/dashboard/fleet/vehicle-tracking', 'modules.fleet.vehicle-tracking');
Route::view('/dashboard/fleet/maintenance', 'modules.fleet.maintenance');
Route::view('/dashboard/fleet/fuel', 'modules.fleet.fuel');
