<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Program;

class PageController extends Controller
{
    public function index()
    {
        $data['blogpost'] = Blog::where('status', '=', 1)->limit(3)->get();
        return view('frontend.index', $data);
    }

    public function about()
    {
        return view('frontend.about');
    }

    public function service()
    {
        return view('frontend.service');
    }

    public function cprogram()
    {
        $data['program'] = Program::where('status', 1)->where('category_id', 1)->simplePaginate(12);
        return view('frontend.corporate_program', $data);
    }

    public function eprogram()
    {
        $data['eprogram'] = Program::where('status', 1)->where('category_id', 2)->simplePaginate(12);
        return view('frontend.entreprenuer_program', $data);
    }

    public function blog()
    {
        $data['blogpost'] = Blog::where('status', '=', 1)->inRandomOrder()->simplePaginate(9);
        return view('frontend.blog', $data);
    }

    public function material()
    {
        return view('frontend.material');
    }

    public function crsp()
    {
        return view('frontend.crsp');
    }

    public function contact()
    {
        return view('frontend.contact');
    }

    public function register()
    {
        return view('frontend.register');
    }

    public function login()
    {
        return view('frontend.login');
    }

}
