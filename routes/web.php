<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainPanel;
use App\Http\Controllers\GridController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\PrintController;

Route::get('/', [HomeController::class, 'home'])->name('home-page');
Route::get('templates/contact', [ContactController::class, 'contact'])->name('contact-page');
Route::get('templates/about', [AboutController::class, 'about'])->name('about-page');
//login and register routes
Route::get('templates/register', [AdminController::class, 'register'])->name('register');
Route::get('templates/login', [AdminController::class, 'login'])->name('login');
Route::post('templates/login.post', [AdminController::class, 'login_post'])->name('login.post');
Route::post('templates/register.post', [AdminController::class, 'register_post'])->name('register.post');
//......................................................................................................
Route::get('/logout', [AdminController::class, 'logout'])->name('logout');
// admin pages
Route::get('templates/dashboard', [AdminController::class, 'stat_view'])->name('admin-stat');
Route::get('templates/master_view', [AdminController::class, 'master_view'])->name('master_view');
Route::get('templates/admins', [AdminController::class, 'admins'])->name('admin-admins');
Route::get('templates/categories', [AdminController::class, 'categories'])->name('admin-categories');
Route::post('templates/postCategories', [AdminController::class, 'postCategories'])->name('postCategories');
Route::get('templates/departments', [AdminController::class, 'departments'])->name('admin-departments');
Route::post('templates/setDepartments', [AdminController::class, 'setDepartments'])->name('setDepartments');
Route::get('templates/item_master', [AdminController::class, 'item_master'])->name('admin-item_master');
Route::post('templates/post_item_master', [AdminController::class, 'post_item_master'])->name('post_item_master');
Route::get('templates/item_types', [AdminController::class, 'item_types'])->name('admin-item_types');
Route::post('templates/post_item_types', [AdminController::class, 'post_item_types'])->name('post_item_types');
Route::get('templates/measurements', [AdminController::class, 'measurements'])->name('admin-measurements');
Route::post('templates/post_measurements', [AdminController::class, 'post_measurements'])->name('post_measurements');
// grid routes
//......................................................................................................
Route::get('templates/category_grid', [GridController::class, 'category_grid'])->name('admin-category-grid');
Route::get('templates/department_grid', [GridController::class, 'department_grid'])->name('admin-department-grid');
Route::get('templates/item_type_grid', [GridController::class, 'item_type_grid'])->name('admin-item_type-grid');
Route::get('templates/main_master_grid', [GridController::class, 'main_master_grid'])->name('admin-main_master-grid');
Route::get('templates/measurement_grid', [GridController::class, 'measurement_grid'])->name('admin-measurement-grid');
// edit routes
//......................................................................................................

Route::get('templates/edit_category/{cat_id}', [GridController::class, 'edit_category'])->name('edit_category');
Route::put('templates/update_category/{cat_id}', [GridController::class, 'update_category'])->name('update_category');

Route::get('templates/edit_department/{dep_id}', [GridController::class, 'edit_department'])->name('edit_department');
Route::put('templates/update_department/{dep_id}', [GridController::class, 'update_department'])->name('update_department');

Route::get('templates/edit_item/{item_id}', [GridController::class, 'edit_item'])->name('edit_item');
Route::put('templates/update_item/{item_id}', [GridController::class, 'update_item'])->name('update_item');

Route::get('templates/edit_item_types/{type_id}', [GridController::class, 'edit_item_types'])->name('edit_types');
Route::put('templates/update_item_types/{type_id}', [GridController::class, 'update_item_types'])->name('update_item_types');

Route::get('templates/edit_measurement/{type_id}', [GridController::class, 'edit_measurement'])->name('edit_measurement');
Route::put('templates/update_measurement/{measure_id}', [GridController::class, 'update_measurement'])->name('update_measurement');

//delete routes
//......................................................................................................

Route::get('templates/delete_category/{cat_id}', [GridController::class, 'delete_category'])->name('delete_category');
Route::get('templates/delete_department/{cat_id}', [GridController::class, 'delete_department'])->name('delete_department');
Route::get('templates/delete_item/{item_id}', [GridController::class, 'delete_item'])->name('delete_item');
Route::get('templates/delete_type/{type_id}',[GridController::class,'delete_item_type'])->name('delete_type');
Route::get('templates/delete_measurement/{measure_id}',[GridController::class,'delete_measurement'])->name('delete_measurement');


// Route::get('templates/reports', [ReportController::class, 'reportsView'])->name('reports-view');
// Route::get('templates/print', [PrintController::class, 'print'])->name('print');

Route::get('/generate-report', [ReportController::class, 'generateReport'])->name('generate_report');
// Route::get('/export_report/{format}', [ReportController::class, 'exportReport'])->name('export_report');
