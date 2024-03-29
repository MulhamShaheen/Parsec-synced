<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

use App\Http\Controllers\Controller;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CustomAuthController;
use App\Http\Controllers\AccountController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\DataSferaController;
use App\Http\Controllers\ReplyController;
use App\Http\Controllers\AuthorController;

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
Route::get('test', function(){
  return Inertia::render('Test');
})->name('test');

Route::get('/', function () {
    return Inertia::render('Landing', [
        'title' => 'Homepage'
    ]);
})->name('homepage');
Route::get('/dashboard/projects',[DashboardController::class, 'projects'])->name('dashboard.projects');

Route::get('/main', [Controller::class, 'index'])->middleware('auth')->name('main');
Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::post('/login', [CustomAuthController::class, 'loginSubmit']);

Route::get('/register', [CustomAuthController::class, 'register'])->name('register');
Route::post('/register', [CustomAuthController::class, 'registerSubmit']);

Route::get('/logout', [CustomAuthController::class, 'signOut'])->name('logout');


Route::get('/account/info/{role?}', [CustomAuthController::class, 'fillInfo'])->name('account.info');


//Route::get('/account/info/{}', [CustomAuthController::class, 'fillInfo'])->name('account.info.employer');


Route::post('/account/info', [CustomAuthController::class, 'infoSubmit']);
Route::post('/account/info/personal', [CustomAuthController::class, 'infoPersonalSubmit']);
Route::post('/account/info/employer', [CustomAuthController::class, 'infoEmployerSubmit']);

Route::post('/updateProfPicture', [CustomAuthController::class, 'updateProfPicture'])->name('update.picture');


Route::get('/account', [AccountController::class, 'accountManager'])->name('account');
Route::get('/account/edit', [AccountController::class, 'accountEdit'])->name('account.edit'); //handleEditRequest
// Route::post('/account/edit', [AccountController::class, 'accountEdit'])->name('account.edit');
Route::post('/account/update', [AccountController::class, 'handleEditRequest'])->name('account.update');
Route::get('/account/gallery', [AccountController::class, 'viewGallery'])->name('account.gallery');
Route::post('/account/gallery', [AccountController::class, 'updateGallery'])->name('gallery.update');



Route::get('/account/project', [AccountController::class, 'viewProjects'])->name('account.projects');
Route::get('/account/replies', [AccountController::class, 'viewReplies'])->name('account.replies');

Route::get('/project/create', [ProjectController::class, 'createProject'])->name('project.create');
Route::post('/project/create', [ProjectController::class, 'submitProject'])->name('project.submit');

Route::get('/projects/list', [ProjectController::class, 'listProjects'])->name('projects.list');
Route::get('/project/view/{id}', [ProjectController::class, 'viewProject'])->name('project.view');
Route::get('/project/edit/{id}', [AuthorController::class, 'editProject'])->middleware('project.author')->name('project.edit');
Route::post('/project/edit/{id}', [AuthorController::class, 'updateProject'])->name('project.update');

Route::post('/project/reply/{id}', [ReplyController::class, 'sendReply'])->name('project.reply');

Route::get('/reply/view/{id}', [ReplyController::class, 'viewReply'])->name('reply.view');
