<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        return view('home.index');
    }

    public function contact(): View
    {
    $viewData = [];
    $viewData["title"] = "Contact";

    return view('home.contact')->with("viewData", $viewData); 
    }
}