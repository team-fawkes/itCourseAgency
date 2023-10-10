<?php

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


Route::get('/',[\App\Http\Controllers\Website\HomeController::class,'home'])->name('home');
Route::get('/page/{slug}',[\App\Http\Controllers\Website\HomeController::class,'page'])->name('page');
Route::get('/free-seminar',[\App\Http\Controllers\Website\HomeController::class,'free_seminar'])->name('free_seminar');
Route::get('/about',[\App\Http\Controllers\Website\AboutController::class,'about'])->name('about');
Route::get('/success-story',[\App\Http\Controllers\Website\SuccessStoryController::class,'success_story'])->name('success_story');
Route::get('/freelancing',[\App\Http\Controllers\Website\FreelancingController::class,'freelancing'])->name('freelancing');
Route::get('/contact',[\App\Http\Controllers\Website\ContactController::class,'contact'])->name('contact');
Route::get('/our-courses',[\App\Http\Controllers\Website\CourseController::class,'our_courses'])->name('our_courses');
Route::get('/department/{slug}',[\App\Http\Controllers\Website\DepartmentController::class,'department'])->name('department');
Route::get('/course/{slug}',[\App\Http\Controllers\Website\CourseController::class,'courses'])->name('course');


require __DIR__.'/command.php';



Route::group(['prefix' => 'dashboard'], function () {
    Voyager::routes();
});
