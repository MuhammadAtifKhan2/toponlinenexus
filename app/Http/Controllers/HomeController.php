<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    function index()
    {
        return view('index');
    }

    function aboutUs()
    {
        return view('about-us');
    }

    function services()
    {
        return view('services');
    }

    function blog()
    {
        return view('blog');
    }

    function blogDetail()
    {
        return view('blog_detail');
    }

    function pricingPlan()
    {
        return view('pricing-plan');
    }

    function feature()
    {
        return view('feature');
    }

    function teamMembers()
    {
        return view('team-members');
    }

    function testimonials()
    {
        return view('testimonials');
    }

    function quote()
    {
        return view('quote');
    }

    function contact()
    {
        return view('contact');
    }
}
