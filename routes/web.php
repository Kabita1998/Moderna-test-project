<?php

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

Route::get('/', [\App\Http\Controllers\Front\IndexController::class, 'index'])->name('index');

Route::prefix('/admin')->group(function () {
	// Admin Login
	Route::get('/login', [\App\Http\Controllers\Admin\AdminLoginController::class, 'adminLogin'])->name('adminLogin');
	Route::post('/login', [\App\Http\Controllers\Admin\AdminLoginController::class, 'loginAdmin'])->name('loginAdmin');

	Route::group(['middleware' => 'admin'], function () {
		// Admin Dashboard
		Route::get('/dashboard', [\App\Http\Controllers\Admin\AdminLoginController::class, 'adminDashboard'])->name('adminDashboard');
		// Admin Profile
		Route::get('/profile', [\App\Http\Controllers\Admin\AdminProfileController::class, 'adminProfile'])->name('adminProfile');
		// Admin Profile Update
		Route::post('/profile/update/{id}', [\App\Http\Controllers\Admin\AdminProfileController::class, 'adminProfileUpdate'])->name('adminProfileUpdate');
		// Delete Image
		Route::get('/delete-image/{id}', [\App\Http\Controllers\Admin\AdminProfileController::class, 'deleteImage'])->name('deleteImage');
		// Change Password
		Route::get('/change-password', [\App\Http\Controllers\Admin\AdminProfileController::class, 'changePassword'])->name('changePassword');
		// Check Current Password
		Route::post('/check-password', [\App\Http\Controllers\Admin\AdminProfileController::class, 'chkUserPassword'])->name('chkUserPassword');

		//Theme Setting
		Route::get('/theme', [\App\Http\controllers\Admin\ThemeController::class, 'theme'])->name('theme');
		Route::post('/theme/{id}', [\App\Http\controllers\Admin\ThemeController::class, 'themeUpdate'])->name('themeUpdate');

		//site Setting
		Route::get('/settings', [\App\Http\controllers\Admin\SettingController::class, 'settings'])->name('settings');
		Route::post('/settings/{id}', [\App\Http\controllers\Admin\SettingController::class, 'settingsUpdate'])->name('settingsUpdate');
	});

	//Test Route
	Route::get('/tests', [\App\Http\controllers\Admin\TestController::class, 'index'])->name('test.index');
	Route::get('/test/add', [\App\Http\controllers\Admin\TestController::class, 'add'])->name('test.add');
	Route::post('/test/store', [\App\Http\controllers\Admin\TestController::class, 'store'])->name('test.store');
	Route::get('/table/test', [\App\Http\controllers\Admin\TestController::class, 'dataTable'])->name('table.test');
	Route::get('/test/show/{id}', [\App\Http\controllers\Admin\TestController::class, 'show'])->name('test.show');
	Route::get('/test/edit/{id}', [\App\Http\controllers\Admin\TestController::class, 'edit'])->name('test.edit');
	Route::post('/test/update/{id}', [\App\Http\controllers\Admin\TestController::class, 'update'])->name('test.update');
	Route::get('/delete-test/{id}', [\App\Http\controllers\Admin\TestController::class, 'delete'])->name('test.delete');

	//Gender route
	Route::get('/genders', [\App\Http\controllers\Admin\GenderController::class, 'index'])->name('gender.index');
	Route::get('/gender/add', [\App\Http\controllers\Admin\GenderController::class, 'add'])->name('gender.add');
	Route::post('/gender/store', [\App\Http\controllers\Admin\GenderController::class, 'store'])->name('gender.store');
	Route::get('/gender/show/{id}', [\App\Http\controllers\Admin\GenderController::class, 'show'])->name('gender.show');

	Route::get('logout', [\App\Http\Controllers\Admin\AdminLoginController::class, 'adminLogout'])->name('adminLogout');
});
