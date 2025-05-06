<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use function PHPUnit\Framework\returnSelf;

class DashbordController extends Controller
{
    public function adminDashbord()
    {
        return view('backend.dashbord');
    }
}
