<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services.index');
    }

    public function styleOne()
    {
        return view('services.style-one');
    }

    public function styleTwo()
    {
        return view('services.style-two');
    }

    public function details($slug = 'web-development')
    {
        return view('services.details', compact('slug'));
    }
}
