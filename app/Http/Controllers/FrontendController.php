<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        return view('index');
    }
public function productDetails()
{
    return view('product-details');
}

public function shop()
{
    return view('shop');
}

public function returnprocess ()
    {
        return view ('returnProcess');
    }

public function categoryPage()
{
    return view ('category-page');
}
public function subcategoryPage()
{
    return view ('subcategory-page');
}
public function checkout()
{
    return view ('checkOut');
}
public function viewCart()
{
    return view ('view-cart');
}
public function privacyPolicy()
{
    return view ('privacy-policy');
}

public function termsConditions()
{
    return view('terms-conditions');
}
public function refundPolicy()
{
return view('refund-policy');
}
public function paymentPolicy()
{
    return view('payment-policy');
}
public function aboutUs()
{
    return view('about-us');
}
public function contactUs()
{
    return view('contact-us');
}



}
