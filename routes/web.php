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


Route::get('/dashboard-page', function () {
    return view('admin.beranda');
});
Route::get('/school-page', function () {
    return view('admin.school');
});
Route::get('/industri-page', function () {
    return view('admin.industri');
});
Route::get('/teacher-page', function () {
    return view('admin.teacher');
});
Route::get('/advisor-page', function () {
    return view('admin.advisor');
});
Route::get('/student-page', function () {
    return view('admin.student');
});
//add
Route::get('/add-school', function () {
    return view('admin.add.add-school');
});
Route::get('/add-industry', function () {
    return view('admin.add.add-industry');
});
Route::get('/add-teacher', function () {
    return view('admin.add.add-teacher');
});
Route::get('/add-advisor', function () {
    return view('admin.add.add-advisor');
});
Route::get('/add-student', function () {
    return view('admin.add.add-student');
});

//edit
Route::get('/edit-school', function () {
    return view('admin.edit.edit-school');
});
Route::get('/edit-industri', function () {
    return view('admin.edit.edit-industry');
});
Route::get('/edit-teacher', function () {
    return view('admin.edit.edit-teacher');
});
Route::get('/edit-advisor', function () {
    return view('admin.edit.edit-advisor');
});
Route::get('/edit-student', function () {
    return view('admin.edit.edit-student');
});

