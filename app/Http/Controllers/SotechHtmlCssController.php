<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SotechHtmlCssController extends Controller
{
    public function index()
    {
        return view('sotech.index');
    }

    public function menu()
    {
        return view('sotech.menu');
    }

    public function access()
    {
        return view('sotech.access');
    }

    public function contact()
    {
        return view('sotech.contact');
    }
}
