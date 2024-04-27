<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\CommentController;
use App\Http\Controllers\Admin\JobController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\frontend\FrontendController;
use App\Http\Controllers\UserController;

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

Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/job/details/{id}' , [FrontendController::class, 'job_details'])->name('job.details');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    Route::post('/add/comment' , [CommentController::class, 'add_comment'])->name('add.comment');
    Route::get('/comment/delete/{id}' , [CommentController::class, 'delete_comment']);
    Route::get('/user/logout' , [ProfileController::class, 'logout']);

});

Route::prefix('/admin')->group(function(){
    Route::get('/dashboard',[DashboardController::class,'index']);
    Route::get('/jobs' , [JobController::class , 'index']);
    Route::get('/comments', [CommentController::class , 'index']);
})->middleware('auth');


Route::prefix('/vacancies')->name('user.vacancies.')->group(function(){
    Route::get('/',[UserController::class,'index'])->name('index');
    Route::get('/add',[UserController::class,'create'])->name('create');
    Route::post('/store',[UserController::class,'store'])->name('store');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit');
    Route::post('/update/{id}',[UserController::class,'update'])->name('update');
    Route::get('/destory/{id}',[UserController::class,'destory'])->name('destory');
});


require __DIR__.'/auth.php';
