<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    
public function index(){

    return view('welcome');

}
public function contuc(){
    return view ("contuc");
}
}
