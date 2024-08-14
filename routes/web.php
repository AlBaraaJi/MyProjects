<?php

use App\Http\Controllers\ProjectController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::resource('/projects',ProjectController::class,)->middleware('auth');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Route::post('/projects/{{$project->id}}/tasks', [TaskController::class,'store']);

// Route definition
Route::post('/projects/{project}/tasks', [TaskController::class, 'store']);
Route::patch('/projects/{project}/tasks/{task}',   [TaskController::class , 'update']);
Route::delete('/projects/{project}/tasks/{task}',   [TaskController::class , 'destroy']);
Route::get('/profile', [ProfileController::class , 'index'])->middleware('auth');
Route::patch('/profile' , [ProfileController::class ,'update']);
Route::get('/admin', [AdminController::class , 'showDashboard'])->middleware('auth');
Route::get('/home', [AdminController::class, 'showDashboard'])->name('dashboard');
// Route::get('/admin', function () {
//     return view('admin'); // This should correspond to the admin.blade.php view
// })->middleware('auth'); // Ensure only authenticated users can access this route
// Route::get('/home', [AdminController::class, 'index']);



