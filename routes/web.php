<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainPanel;




Route::get('templates/', [HomeController::class, 'home'])->name('home-page');
Route::get('templates/contact', [ContactController::class, 'contact'])->name('contact-page');
Route::get('templates/about', [AboutController::class, 'about'])->name('about-page');


Route::get('templates/register', [AdminController::class, 'signUpPage'])->name('signUp-page');
Route::get('templates/log', [AdminController::class, 'signInPage'])->name('signIn-page');

Route::post('templates/signUp', [AdminController::class, 'signUp'])->name('signUp');
Route::post('templates/signIn', [AdminController::class, 'signIn'])->name('signIn');


// admin pages
Route::get('templates/dashboard', [AdminController::class, 'dashboardView'])->name('admin-dashboard');
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






