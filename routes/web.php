<?php

use App\Http\Controllers\FrontendController;
use Illuminate\Support\Facades\Route;



Route::get ('/',[FrontendController::class, 'index'] );
Route::get('/product-details', [FrontendController::class, 'productDetails']);
Route::get ('/shop', [FrontendController::class,'shop']);
Route::get ('/Return-Process', [FrontendController::class,'ReturnProcess']);
Route::get('/category-Page', [FrontendController::class, 'categoryPage']);
Route::get('/subcategory-Page', [FrontendController::class, 'subcategoryPage']);
Route::get('checkout', [FrontendController::class, 'checkOut']);
Route::get('/view-cart', [FrontendController::class, 'viewCart']);
// policy page
Route::get('/privacy-policy', [FrontendController::class, 'privacyPolicy']);
Route::get('/terms-conditions', [FrontendController::class, 'termsConditions']);
Route::get('/refund-policy', [FrontendController::class, 'refundPolicy']);
Route::get('/payment-policy', [FrontendController::class, 'paymentPolicy']);
Route::get('/about-us', [FrontendController::class, 'aboutUs']);
Route::get('/contact-us', [FrontendController::class, 'contactUs']);










