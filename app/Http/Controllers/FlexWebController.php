<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FlexWebController extends Controller
{
    public function post01()
    {
        return view('flexweb.post01');
    }

    public function index()
    {
        return view('flexweb.index');
    }

    public function about()
    {
        return view('flexweb.about');
    }

    public function contact()
    {
        return view('flexweb.contact');
    }
}
