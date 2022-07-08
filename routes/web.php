<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AddpostController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\AdminpostdisplayController;
use App\Http\Controllers\UserpostdisplayController;
use App\Http\Controllers\DeleteController;
use App\Http\Controllers\ContentdisplayController;
use App\Http\Controllers\CommentController;
use App\Http\Middleware\LoginValidation;
use App\Http\Middleware\RegistrationValidation;
use App\Http\Middleware\PostValidation;
use App\Http\Middleware\CommentValidation;
use App\Http\Controllers\PostController;

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
Route::get('/posts', [PostController::class,'index']); 
Route::post('/posts', [PostController::class,'store']); 
Route::put('/posts/{id}', [PostController::class,'update']); 
Route::get('/posts/{id}', [PostController::class,'show']);
Route::delete('/posts/{id}', [PostController::class,'destroy']);





// Route::post('/login', [LoginController::class,'login'])->middleware('loginvalidation'); 
// Route::post('/register', [RegisterController::class,'register'])->middleware('registervalidation'); 
// Route::post('/addcomment', [CommentController::class,'comment'])->middleware('commentvalidation');
// Route::post('/useraddpost', [AddpostController::class,'addpost'])->middleware('postvalidation');
// Route::post('/adminaddpost', [AddpostController::class,'addpost'])->middleware('postvalidation');
// Route::get('/', [LoginController::class,'loginform']);
// Route::get('/usercontent', [ContentdisplayController::class,'usercontentdisplay']);
// Route::get('/admincontent', [ContentdisplayController::class,'admincontentdisplay']);
// Route::delete('/deletepost', [DeleteController::class,'postdelete']);
// Route::get('/adminhome', [AdminpostdisplayController::class,'postdisplay']);
// Route::get('/userhome', [UserpostdisplayController::class,'postdisplay']);
// Route::get('/userpostform', [AddpostController::class,'userpost']);
// Route::get('/adminpostform', [AddpostController::class,'adminpost']);
// Route::get('/signup', [RegisterController::class,'signup']); 
// Route::get('/logout', [LogoutController::class,'logout']);





