<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LayananController;
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

Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index');
    Route::get('/about', 'about')->name('about');
    Route::get('/project', 'project')->name('project');
    Route::get('/team', 'team')->name('team');
    Route::get('/contact', 'contact')->name('contact');
});

Route::controller(LayananController::class)->group(function () {
    Route::get('/semua-layanan', 'index')->name('semua.layanan');
    Route::get('/jasa-web', 'jasaWebsite')->name('jasa-website');
    Route::get('/jasa-seo', 'jasaSeo')->name('jasa.seo');
    Route::get('/jasa-skripsi', 'jasaSkripsi')->name('jasa.skripsi');
    Route::get('/jasa-ui', 'jasaUI')->name('jasa.ui');
    Route::get('/jasa-design', 'jasaDesignGrafis')->name('jasa.design');
    Route::get('/jasa-maintenance', 'jasaMaintanance')->name('jasa.maintenance');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/login', 'authenticate')->name('post.login');
    Route::get('/logout', 'logout');
});

Route::middleware('auth')->group(function () {
    Route::get('/loading', function () {
        return view('auth.loading');
    })->name('loading');
    Route::controller(DashboardController::class)->group(function () {
        Route::get('/dashboard', 'index')->name('dashboard');
    });
});
