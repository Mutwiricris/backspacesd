<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('blog.index');
    }

    public function grid()
    {
        return view('blog.grid');
    }

    public function list()
    {
        return view('blog.list');
    }

    public function details($slug = 'blog-post-1')
    {
        return view('blog.details', compact('slug'));
    }
}
