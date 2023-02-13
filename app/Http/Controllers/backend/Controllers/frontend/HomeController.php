<?php

namespace App\Http\Controllers\backend\Controllers\frontend;

use App\Http\Controllers\backend\Controllers\Controller;

class HomeController extends Controller
{
    public function index(){
        return view('frontend.pages.home');
    }
}
