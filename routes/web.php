<?php
use App\Http\Controllers\StudentController;
use App\Http\Controllers\CoeController;
use App\Http\Controllers\CocController;
use App\Http\Controllers\GcoeController;
use App\Http\Controllers\GcocController;
use App\Http\Controllers\IdController;
use App\Http\Controllers\QpController;
use App\Http\Controllers\RadController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;


// Home route
// In routes/web.php

Route::get('/', function () {
    return view('index');
})->middleware('auth'); // Ensure this is protected by 'auth' middleware

Route::get('/login', function () {
    return view('auth.login');
})->name('login'); // Ensure you have a route to the login page


Route::post('/logout', function () {
    Auth::logout();
    return redirect('/login'); // Redirect to the login page
})->name('logout');



// ID card routes
Route::get('/ID/{id}/id-card', [IdController::class, 'show'])->name('student.id_card');
Route::get('/qplus/{id}/id-card', [QpController::class, 'show'])->name('qplus.id_card');
Route::get('/radial/{id}/id-card', [RadController::class, 'show'])->name('radial.id_card');

// Student routes
Route::get('/students', [StudentController::class, 'index'])->name('students.index'); // List of students
Route::get('/students/create', [StudentController::class, 'create'])->name('students.create'); // Create student form
Route::post('/students', [StudentController::class, 'store'])->name('students.store'); // Store new student
Route::get('/students/{id}', [StudentController::class, 'show'])->name('students.show'); // Show student details
Route::get('/students/{id}/edit', [StudentController::class, 'edit'])->name('students.edit'); // Edit student form
Route::patch('/students/{id}', [StudentController::class, 'update'])->name('students.update'); // Update student

// Archive routes
Route::patch('/students/archive/{id}', [StudentController::class, 'archive'])->name('students.archive');
Route::patch('/students/unarchive/{id}', [StudentController::class, 'unarchive'])->name('students.unarchive');

// Archive list route
//Route::get('/students/archive', [StudentController::class, 'archiveList'])->name('students.archive.list');
// web.php
// Archive list route
//Route::get('/students/archive-list', [StudentController::class, 'archiveList'])->name('students.archive-list');
///Route::get('/archive-list', [StudentController::class, 'archiveList'])->name('students.archive-list') ->middleware('check.archive.access');;

//Route::get('/students/archive-list', [StudentController::class, 'archiveList'])->name('students.archive.list');


// Home index route
Route::get('/index', [HomeController::class, 'show'])->name('index');


// web.php
Route::middleware('auth')->group(function () {
    Route::get('/students/archive-list', [StudentController::class, 'archiveList'])->name('students.archive.list');
});



// Route for the form to enter the password
Route::get('/archive-form', [StudentController::class, 'showArchiveForm'])->name('students.archiveForm');

// Route to handle password submission
Route::post('/archive-access', [StudentController::class, 'checkArchivePassword'])->name('students.archiveAccess');

// Route for the archive list, protected by middleware
Route::get('/archive-list', [StudentController::class, 'archiveList'])->name('students.archiveList')->middleware('checkArchiveAccess');


// Protected route
//Route::get('/students/archive-list', [StudentController::class, 'archiveList'])
  //  ->name('students.archive.list')
   // ->middleware('check.archive.access');

// coe routes
Route::get('/coe', [CoeController::class, 'index'])->name('coe.index'); // List of coe
Route::get('/coe/create', [CoeController::class, 'create'])->name('coe.create'); // Create coe form
Route::post('/coe', [CoeController::class, 'store'])->name('coe.store'); // Store new coe
Route::get('/coe/{id}', [CoeController::class, 'show'])->name('coe.show'); // Show coe details
Route::get('/coe/{id}/edit', [CoeController::class, 'edit'])->name('coe.edit'); // Edit coe form
Route::patch('/coe/{id}', [CoeController::class, 'update'])->name('coe.update'); // Update coe
Route::delete('/coe/{id}', [CoeController::class, 'destroy'])->name('coe.destroy');

Route::get('/Coed/{id}/gcoe', [GcoeController::class, 'show'])->name('coe.generate');

Route::get('/coc', [CocController::class, 'index'])->name('coc.index'); // List of coc
Route::get('/coc/create', [CocController::class, 'create'])->name('coc.create'); // Create coc form
Route::post('/coc', [CocController::class, 'store'])->name('coc.store'); // Store new coc
Route::get('/coc/{id}', [CocController::class, 'show'])->name('coc.show'); // Show coc details
Route::get('/coc/{id}/edit', [CocController::class, 'edit'])->name('coc.edit'); // Edit coc form
Route::patch('/coc/{id}', [CocController::class, 'update'])->name('coc.update'); // Update coc
Route::delete('/coc/{id}', [CocController::class, 'destroy'])->name('coc.destroy');

Route::get('/Cocd/{id}/gcoc', [GcocController::class, 'show'])->name('coc.generate');

Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);


