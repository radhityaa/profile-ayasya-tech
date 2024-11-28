<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('home.index');
    }

    public function portofolio()
    {
        return view('home.portofolio');
    }

    public function detailPortofolio()
    {
        return view('home.portofolio');
    }
}
