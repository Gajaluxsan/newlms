<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\TeacherController;
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
    return view('welcome');
});
Route::prefix('school')->group(function(){

    Route::get('student',[StudentController::class,'index']);
    Route::get('studentadd',[StudentController::class,'adding']);
    Route::post('studentadd',[StudentController::class,'store'])->name('studentstore');
    Route::post('student',[StudentController::class,'index'])->name('index');
    Route::get('studentedit/{id}',[StudentController::class,'show'])->name('stuedt');
    Route::post('studentedit',[StudentController::class,'update'])->name('Studentupdater');



    Route::get('teacher',[TeacherController::class,'index'])->name('techer');
    Route::get('teacheradd', function () {return view('teacheradd');});
    Route::post('teacheradd',[TeacherController::class,'store'])->name('teacherstore');

});





















// Auth login Not for edit

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
