<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function faq(){
        return view('pages.about.faq');
    }

    public function ourmission(){
        return view('pages.about.ourmission');
    }
    public function ourvalues(){
        return view('pages.about.ourvalues');
    }

    public function whoweare(){
        return view('pages.about.whoweare');
    }
    public function whychooseus(){
        return view('pages.about.whychooseus');
    }
    public function about_all(){
        return view('pages.about.about_all');
    }
    
    public function areaswecover(){
        return view('pages.about.areaswecover');
    }
}
