<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortfolioController extends Controller
{
    public function caseStudies()
    {
        return view('portfolio.case-studies');
    }

    public function caseStudiesGrid()
    {
        return view('portfolio.case-studies-grid');
    }

    public function caseStudyDetails($slug = 'project-1')
    {
        return view('portfolio.case-study-details', compact('slug'));
    }

    public function team()
    {
        return view('portfolio.team');
    }

    public function testimonials()
    {
        return view('portfolio.testimonials');
    }
}
