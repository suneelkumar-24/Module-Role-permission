<?php

use App\Http\Controllers\AssignModuleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('login');
// });

Route::get('/login', function () {
    // session()->flush();
    return view('login');
});

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/user/index', [UserController::class, 'index'])->name('user-index');
Route::get('/user/create', [UserController::class, 'create'])->name('user-create');
Route::post('/user/store', [UserController::class, 'store'])->name('user-store');
Route::post('/user/sign-in', [UserController::class, 'sign_in'])->name('sign-in');
Route::get('/user/edit/{id}', [UserController::class, 'edit']);
Route::put('/user/update', [UserController::class, 'update'])->name('user-update');
Route::get('/user/delete/{id}', [UserController::class, 'delete']);


Route::get('/role/index', [RoleController::class, 'index'])->name('role-index');
Route::get('/role/create', [RoleController::class, 'create'])->name('role-create');
Route::post('/role/store', [RoleController::class, 'store'])->name('role-store');
Route::get('/role/edit/{id}', [RoleController::class, 'edit']);
Route::put('/role/update', [RoleController::class, 'update'])->name('role-update');
Route::get('/role/delete/{id}', [RoleController::class, 'delete']);

Route::get('/module/index', [ModuleController::class, 'index'])->name('module-index');
Route::get('/module/create', [ModuleController::class, 'create'])->name('module-create');
Route::post('/module/store', [ModuleController::class, 'store'])->name('module-store');
Route::get('/module/edit/{id}', [ModuleController::class, 'edit']);
Route::put('/module/update', [ModuleController::class, 'update'])->name('module-update');
Route::get('/module/delete/{id}', [ModuleController::class, 'delete']);

Route::get('/assign-module/index', [AssignModuleController::class, 'index'])->name('assign-module-index');
Route::get('/assign-module/create', [AssignModuleController::class, 'create'])->name('assign-module-create');
Route::post('/assign-module/store', [AssignModuleController::class, 'store'])->name('assign-module-store');
Route::get('/assign-module/edit/{id}', [AssignModuleController::class, 'edit']);
Route::put('/assign-module/update', [AssignModuleController::class, 'update'])->name('assign-module-update');
Route::get('/assign-module/delete/{id}', [AssignModuleController::class, 'delete']);


Route::view('/layout','layout');
// Route::get('/layout', function () {
//     $user = session()->get('username');
//     $model_and_permissoin = ModulesAndPermission($user->role_id);
//             session()->put('model_and_permissoin',$model_and_permissoin);
//             // return $model_and_permissoin;
//             return view('layout',compact('model_and_permissoin'));
//     return view('layout');
// });