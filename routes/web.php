<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\Student\StudentController;
use App\Http\Controllers\Student\PostStudentController;
use App\Http\Controllers\Auth\UserController;
use App\Http\Controllers\Admin\AdminPageController;
use App\Http\Controllers\Admin\AdminPostController;
use App\Http\Controllers\Admin\BlogController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', [PageController::class, 'index']);

Route::get('who-we-are', [PageController::class, 'about']);

Route::get('our-offerings', [PageController::class, 'service']);

Route::get('corporate-program', [PageController::class, 'cprogram']);

Route::get('entrepreneur-program', [PageController::class, 'eprogram']);

Route::get('blog-post', [PageController::class, 'blog']);

Route::get('material', [PageController::class, 'material']);

Route::get('crsp', [PageController::class, 'crsp']);

Route::get('contact-us', [PageController::class, 'contact']);

Route::post('sigin', [UserController::class, 'signin']);

Route::get('register', [PageController::class, 'register']);

Route::get('login', [PageController::class, 'login'])->name('login');

Route::post('savelogin', [UserController::class, 'savelogin']);

Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::group(['middleware' => 'auth', 'prefix' => 'user', 'before' => 'user'], function () {

    Route::get('dashboard', [StudentController::class, 'dashboard'])->name('userdashboard');

    Route::get('schedule', [StudentController::class, 'schedule']);

    Route::get('setting', [StudentController::class, 'setting']);

    Route::get('review', [StudentController::class, 'review']);

    Route::post('savereview', [PostStudentController::class, 'savereview']);

    Route::post('savecomplain', [PostStudentController::class, 'savecomplain']);

    Route::get('delete-complain/{id}', [PostStudentController::class, 'deletecomplain'])->name('deletecomplain');

    Route::get('delete-review/{id}', [PostStudentController::class, 'deletereview'])->name('deletereview');

    Route::post('update-profile/{id}', [UserController::class, 'updateprofile'])->name('updateprofile');

    Route::get('class-module', [StudentController::class, 'module']);

    Route::get('module-lesson/{id}', [StudentController::class, 'lesson'])->name('viewlesson');

    Route::get('module-lesson-video/{id}', [StudentController::class, 'lessonvideo'])->name('viewlessonvideo');

    Route::get('lesson-video/{id}', [StudentController::class, 'video'])->name('viewvideo');

    Route::post('save-lesson-task', [PostStudentController::class, 'savelessontask']);
});

Route::group(['middleware' => 'web', 'prefix' => 'admin', 'before' => 'admin'], function () {

    Route::get('dashboard', [AdminPageController::class, 'dashboard'])->name('admindashboard');

    Route::get('category', [AdminPageController::class, 'category']);

    Route::post('save-category', [BlogController::class, 'savecategory']);

    Route::get('delete-category/{id}', [BlogController::class, 'deletecategory'])->name('deletecategory');

    Route::get('post', [AdminPageController::class, 'blogpost']);

    Route::get('create-post', [AdminPageController::class, 'createpost']);

    Route::get('blog/edit/{id}', [AdminPageController::class, 'blogById']);

    Route::post('update-blog', [BlogController::class, 'updateBlog']);

    Route::get('blog/delete/{id}', [AdminPageController::class, 'deleteBlog']);

    Route::get('add-blog', [AdminPagegController::class, 'add']);

    Route::post('add-blog', [BlogController::class, 'store']);

    Route::get('blog/{slug}', [AdminPageController::class, 'blogBySlug']);

    Route::get('users', [AdminPageController::class, 'users']);

    Route::get('/activate-user/{id}', [UserController::class, 'activateuser'])->name('activateuser');

    Route::get('/deactivate-user/{id}', [UserController::class, 'deactivateuser'])->name('deactivateuser');

    Route::get('reviews', [AdminPageController::class, 'reviews']);

    Route::get('complain', [AdminPageController::class, 'complain']);

    Route::get('module', [AdminPageController::class, 'module']);

    Route::post('save-module', [AdminPostController::class, 'savemodule']);

    Route::post('update-module/{id}', [AdminPostController::class, 'updatemodule'])->name('updatemodule');

    Route::get('delete-module/{id}', [AdminPostController::class, 'deletemodule'])->name('deletemodule');

    Route::get('lesson', [AdminPageController::class, 'lesson']);

    Route::get('create-lesson', [AdminPageController::class, 'createlesson']);

    Route::post('save-lesson', [AdminPostController::class, 'savelesson']);

    Route::post('update-lesson/{id}', [AdminPostController::class, 'updatelesson'])->name('updatelesson');

    Route::get('delete-lesson/{id}', [AdminPostController::class, 'deletelesson'])->name('deletelesson');

    Route::get('lesson-video', [AdminPageController::class, 'lessonvideo']);

    Route::post('save-lesson-video', [AdminPostController::class, 'savelessonvideo']);

    Route::post('update-lesson-video/{id}', [AdminPostController::class, 'updatelessonvideo'])->name('updatelessonvideo');

    Route::get('delete-lesson-video/{id}', [AdminPostController::class, 'deletelessonvideo'])->name('deletelessonvideo');

    Route::get('task', [AdminPageController::class, 'lessontask']);

    Route::post('save-lesson-task', [AdminPostController::class, 'savelessontask']);

    Route::get('submitted-task/{id}', [AdminPageController::class, 'submittedlessontask'])->name('submittedtask');

    Route::get('delete-lesson-task/{id}', [AdminPostController::class, 'deletelessontask'])->name('deletelessontask');

    Route::get('program-category', [AdminPageController::class, 'programcategory']);

    Route::post('save-program-category', [AdminPostController::class, 'saveprogramcategory']);

    Route::get('delete-program-category/{id}', [AdminPostController::class, 'deleteprogramcategory'])->name('deleteprogramcategory');

    Route::get('program', [AdminPageController::class, 'program']);

    Route::get('add-program', [AdminPageController::class, 'addprogram']);

    Route::post('save-program', [AdminPostController::class, 'saveprogram']);

    Route::get('edit-program', [AdminPageController::class, 'editprogram'])->name('editprogram');

    Route::post('update-program/{id}', [AdminPostController::class, 'updateprogram'])->name('updateprogram');

    Route::get('delete-program/{id}', [AdminPostController::class, 'deleteprogram'])->name('deleteprogram');

    Route::get('resource-category', [AdminPageController::class, 'resourcecategory']);

    Route::post('save-resource-category', [AdminPostController::class, 'saveresourcecategory']);

    Route::get('delete-resource-category/{id}', [AdminPostController::class, 'deleteresourcecategory'])->name('deleteresourcecategory');

    Route::get('resource', [AdminPageController::class, 'resource']);

    Route::post('save-resource', [AdminPostController::class, 'saveresource']);

    Route::get('edit-resource', [AdminPageController::class, 'editresource'])->name('editresource');

    Route::post('update-resource/{id}', [AdminPostController::class, 'updateresource'])->name('updateresource');

    Route::get('delete-resource/{id}', [AdminPostController::class, 'deleteresource'])->name('deleteresource');
});
