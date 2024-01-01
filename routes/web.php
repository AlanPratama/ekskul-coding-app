<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\UserController;
use App\Models\Role;
use App\Models\User;
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

Route::get('/', [AuthController::class, 'signIn'])->name('signIn-index');
Route::post('/', [AuthController::class, 'signInProcess'])->name('signIn-process');

Route::get('/sign-up', [AuthController::class, 'signUp']);
Route::post('/sign-up', [AuthController::class, 'signUpProcess'])->name('signUp-process');


Route::middleware('auth')->group(function () {
    Route::get('/logout', [AuthController::class, 'logout']);

    Route::get('/dashboard', [DashboardController::class, 'index']);

    Route::get('/profile', [UserController::class, 'profile']);

    Route::get('/profile/setting', [UserController::class, 'setting']);
    // Route::get('/setting', [UserController::class, 'setting']);

    Route::put('/profile/setting/{slug}', [UserController::class, 'profileEdit'])->name('profile-edit');

    Route::get('/profile/absen', [UserController::class, 'indexAbsen']);
    // Route::get('/absen', [UserController::class, 'indexAbsen']);

    Route::post('/qrAbsenHadir', [UserController::class, 'qrHadir'])->name('qrAbsenHadir');
    Route::post('/fotoAbsenHadir', [UserController::class, 'fotoHadir'])->name('fotoAbsenHadir');

    Route::post('/izinHadir', [UserController::class, 'izinHadir'])->name('izinHadir');


    Route::get('/kumpulan-group', [GroupController::class, 'kumpulanGroup']);





    Route::middleware('only_pengurus')->group(function () {
        Route::get('/side-part', [UserController::class, 'sidePart']);
        // SKILLS || SKILLS || SKILLS || SKILLS || SKILLS || SKILLS || SKILLS || SKILLS || SKILLS || SKILLS || SKILLS
        Route::post('/add-skill', [UserController::class, 'addSkill'])->name('addSkill');
        Route::post('/edit-skill/{id}', [UserController::class, 'editSkill'])->name('editSkill');
        Route::get('hapus-skill/{name}', [UserController::class, 'hapusSkill'])->name('hapusSkill');

        // KELAS || KELAS || KELAS || KELAS || KELAS || KELAS || KELAS || KELAS || KELAS || KELAS || KELAS || KELAS
        Route::post('/add-class', [UserController::class, 'addClass'])->name('addClass');
        Route::post('/edit-class/{id}', [UserController::class, 'editClass'])->name('editClass');
        Route::get('/hapus-class/{id}', [UserController::class, 'hapusClass'])->name('hapusClass');

        Route::get('/group', [GroupController::class, 'index']);
        Route::post('/create.Group', [GroupController::class, 'createGroup'])->name('create.Group');

        Route::prefix('group')->group(function () {
            Route::get('/detail/{slug}', [GroupController::class, 'detailGroup']);
            Route::delete('/delete/{slug}', [GroupController::class, 'deleteGroup'])->name('delete.group');
            Route::put('/edit/{slug}', [GroupController::class, 'editGroup'])->name('edit.group');
        });
    });
});
