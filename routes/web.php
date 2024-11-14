<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\Admin\AdminCertificateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
// use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\SkillController;
use App\Http\Controllers\TblDinamisController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminSkillController;
use App\Http\Controllers\CertificatesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/home', [TblDinamisController::class, 'index'])
->name('home');

Route::get('/about', [AboutController::class, 'about'])
->name('about');

Route::get('/skill', [SkillController::class, 'skill'])
->name('skill');

Route::get('/project', [ProjectController::class, 'project'])
->name('project');

Route::get('/certificates', [CertificatesController::class, 'certificates'])
->name('certificates');

Route::get('/contact', [ContactController::class, 'contact'])
->name('contact');


// Admin
Route::get('/admin/dashboard', [AdminController::class, 'index'])
    ->middleware(['auth', 'admin'])
    ->name('admin.dashboard');

Route::get('/admin/tables', [AdminController::class, 'tables'])
    ->name('admin.tables');

Route::get('/admin/edit/{id}', [AdminController::class, 'edit'])
    ->name('admin.edit');

Route::put('/admin/update/{id}', [AdminController::class, 'update'])
    ->name('admin.update');

Route::delete('/admin/delete/{id}', [AdminController::class, 'delete'])
    ->name('admin.delete');

Route::get('/admin/add', [AdminController::class, 'add'])
    ->name('admin.add');

Route::post('/admin/add-user', [AdminController::class, 'store'])
->name('admin.store-user');

Route::get('/admin/report', [AdminController::class, 'report'])
    ->name('admin.report');

Route::get('/admin/notifications', [AdminController::class, 'notifications'])
->name('admin.notifications');

Route::get('/admin/data', [AdminController::class, 'data'])
    ->name('admin.data');

Route::get('/admin/help', [AdminController::class, 'help'])
->name('admin.help');

Route::get('/admin/create', [TblDinamisController::class, 'create'])
->name('admin.create');

Route::post('/admin', [TblDinamisController::class, 'store'])
->name('admin.store');

Route::get('/admin/tabelkonten', [TblDinamisController::class, 'showTable'])
->name('admin.tabelkonten');

Route::get('/admin/editkonten/{id}', [TblDinamisController::class, 'edit'])
->name('admin.editkonten');

Route::put('/admin/updatekonten/{id}', [TblDinamisController::class, 'update'])
->name('admin.updatekonten');

Route::delete('/admin/deletekonten/{id}', [TblDinamisController::class, 'destroy'])
->name('admin.deletekonten');

Route::resource('/admin/dashboard/skill', AdminSkillController::class);

Route::resource('admin/dashboard/certificate', AdminCertificateController::class);

require __DIR__.'/auth.php';
