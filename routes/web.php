<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\Dashboard2Controller;
use App\Http\Controllers\Admin\Dashboard3Controller;
use App\Http\Controllers\Admin\Dashboard4Controller;
use App\Http\Controllers\FrontendController;

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

Route::get('/' ,[FrontendController::class, 'frontimg'])->name('frontImage');

Route::get('/admin/dashboard',[DashboardController::class, 'dashboard'])->name('admin.dashboard');

Route::get('/admin/FrontImage',[DashboardController::class, 'show'])->name('admin.frontImage');
Route::get('/admin/FrontImage/add',[DashboardController::class, 'add'])->name('admin.addfrontImage');
Route::post('/admin/FrontImage/store',[DashboardController::class, 'store'])->name('admin.storefrontImage');
Route::get('/admin/FrontImage/edit/{id}',[DashboardController::class, 'edit'])->name('admin.editfrontImage');
Route::put('/admin/FrontImage/update/{id}',[DashboardController::class, 'update'])->name('admin.updatefrontImage');
Route::delete('/admin/FrontImage/destroy/{id}',[DashboardController::class, 'destroy'])->name('admin.deletefrontImage');


Route::get('/admin/article',[Dashboard2Controller::class, 'show'])->name('admin.article');
Route::get('/admin/article/add',[Dashboard2Controller::class, 'add'])->name('admin.addarticle');
Route::post('/admin/article/store',[Dashboard2Controller::class, 'store'])->name('admin.storearticle');
Route::get('/admin/article/edit/{id}',[Dashboard2Controller::class, 'edit'])->name('admin.editarticle');
Route::put('/admin/article/update/{id}',[Dashboard2Controller::class, 'update'])->name('admin.updatearticle');
Route::delete('/admin/article/destroy/{id}',[Dashboard2Controller::class, 'destroy'])->name('admin.deletearticle');

Route::get('/admin/section',[Dashboard3Controller::class, 'show'])->name('admin.section');
Route::get('/admin/section/add',[Dashboard3Controller::class, 'add'])->name('admin.addsection');
Route::post('/admin/section/store',[Dashboard3Controller::class, 'store'])->name('admin.storesection');
Route::get('/admin/section/edit/{id}',[Dashboard3Controller::class, 'edit'])->name('admin.editsection');
Route::put('/admin/section/update/{id}',[Dashboard3Controller::class, 'update'])->name('admin.updatesection');
Route::delete('/admin/section/destroy/{id}',[Dashboard3Controller::class, 'destroy'])->name('admin.deletesection');


Route::get('/admin/section3',[Dashboard4Controller::class, 'show'])->name('admin.section3');
Route::get('/admin/section3/add',[Dashboard4Controller::class, 'add'])->name('admin.addsection3');
Route::post('/admin/section3/store',[Dashboard4Controller::class, 'store'])->name('admin.storesection3');
Route::get('/admin/section3/edit/{id}',[Dashboard4Controller::class, 'edit'])->name('admin.editsection3');
Route::put('/admin/section3/update/{id}',[Dashboard4Controller::class, 'update'])->name('admin.updatesection3');
Route::delete('/admin/section3/destroy/{id}',[Dashboard4Controller::class, 'destroy'])->name('admin.deletesection3');
   
