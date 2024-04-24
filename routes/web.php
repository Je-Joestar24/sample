<?php

use App\Http\Controllers\CrimeGuardM\incidentModule;
use App\Http\Controllers\crimeguardm\incidentNamesModule;
use App\Http\Controllers\CrimeGuardM\suspectsManipulation;
use App\Http\Controllers\CrimeGuardM\victimsModule;
use App\Http\Controllers\crimeguardm\witnessModule;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\testers\joinTest;
use App\Http\Controllers\testers\tester;
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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('api/test/some', [tester::class, 'testing'])->name('json');
Route::get('api/join/test', [joinTest::class, 'test']);
/* Table display */
Route::get('api/suspect/table/Display', [suspectsManipulation::class, 'tableDisplay'])->name('json');
Route::get('api/incidents/table/Display', [incidentModule::class, 'displayIncidents'])->name('json');
Route::get('api/victims/table/Display', [victimsModule::class, 'tableDisplay'])->name('json');
Route::get('api/witness/table/Display', [witnessModule::class, 'tableDisplay'])->name('json');
Route::get('api/incidentNames/table/Display', [incidentNamesModule::class, 'tableDisplay'])->name('json');


/* Clickable displays */
Route::get('api/suspect/Display', [suspectsManipulation::class, ''])->name('json');



require __DIR__.'/auth.php';