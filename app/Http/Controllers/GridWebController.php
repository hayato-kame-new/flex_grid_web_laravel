<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GridWebController extends Controller
{
    public function index()
    {
        return view('gridweb.index');
    }

    public function post01()
    {
        return view('gridweb.post01');
    }

    public function post02()
    {
        return view('gridweb.post02');
    }

    public function post03()
    {
        return view('gridweb.post03');
    }

    public function post04()
    {
        return view('gridweb.post04');
    }
}
