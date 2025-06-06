<?php

use App\Http\Controllers\Backend\AdminController;
use App\Http\Controllers\Backend\CategoryController;
use App\Http\Controllers\Backend\DashbordController;
use App\Http\Controllers\Backend\SubCategoryController;
use App\Http\Controllers\FrontendController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get ('/',[FrontendController::class, 'index'] );
Route::get ('/shop', [FrontendController::class,'shop']);
Route::get ('/Return-Process', [FrontendController::class,'ReturnProcess']);
Route::get('/category-Page', [FrontendController::class, 'categoryPage']);
Route::get('/subcategory-Page', [FrontendController::class, 'subcategoryPage']);
Route::get('checkout', [FrontendController::class, 'checkOut']);
Route::get('/view-cart', [FrontendController::class, 'viewCart']);
Route::get('/product-details', [FrontendController::class, 'productDetails']);
// policy page
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy']);
Route::get('/terms-conditions', [FrontendController::class, 'termsConditions']);
Route::get('/refund-policy', [FrontendController::class, 'refundPolicy']);
Route::get('/payment-policy', [FrontendController::class, 'paymentPolicy']);
Route::get('/about-us', [FrontendController::class, 'aboutUs']);
Route::get('/contact-us', [FrontendController::class, 'contactUs']);

Route::get('/view-all', [FrontendController::class, 'viewAll']);

route::get('/admin/login',[AdminController::class, 'adminLogin']);



Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

route::get('admin/dashbord', [DashbordController::class, 'adminDashbord']);
route::get('admin/logout', [AdminController::class, 'adminLogout']);
//Category

route::get('admin/category/list', [CategoryController::class, 'categoryList']);

route::get('admin/category/create', [CategoryController::class, 'categoryCreate']);
route::Post('admin/category/store', [CategoryController::class, 'categoryStore']);
route::get('admin/category/delete/{id}', [CategoryController::class, 'categoryDelete']);
route::get('admin/category/edit/{id}', [CategoryController::class, 'categoryEdit']);
route::post('admin/category/update/{id}', [CategoryController::class, 'categoryUpdate']);

//SubCategory
route::get('admin/sub-category/list', [SubCategoryController::class, 'subCategoryList']);
route::get('admin/sub-category/create', [SubCategoryController::class, 'subCategoryCreate']);
route::Post('admin/sub-category/store', [SubCategoryController::class, 'subCategoryStore']);
route::get('admin/sub-category/edit/{id}', [SubCategoryController::class, 'subCategoryEdit']);
route::Post('admin/sub-category/update/{id}', [SubCategoryController::class, 'subCategoryUpdate']);
route::get('admin/sub-category/delete/{id}', [SubCategoryController::class, 'subCategoryDelete']);





