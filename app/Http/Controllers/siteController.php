<?php

namespace App\Http\Controllers;

use App\Models\member;
use App\Models\Project;
use App\Models\slider;
use App\Models\Partner;
use Illuminate\Http\Request;

class siteController extends Controller
{
    public function index(){
        $projects=Project::all();

        $members=member::all();
        $partners=Partner::all();
        $sliders=slider::all();

        return view('index',compact('members','sliders','projects','partners'));
    }

    public function contact(){
        return view('contact');
    }

    public function error(){
        return view('error');
    }

    public function about(){
        return view('about');
    }

    public function convert(){
        return view('convert');
    }

    public function project(){
        return view('project');
    }

    public function portfolio(){
        return view('portfolio');
    }

    public function blog(){
        return view('blogs');
    }

    public function history(){
        return view('history');
    }

    public function career(){
        return view('career');
    }

    public function partnership(){
        return view('partnership');
    }

    public function leadership(){
        return view('leadership');
    }

    public function faq(){
        return view('faq');
    }

    public function register()
    {
        // Only authenticated users may enter...
        return view('register');
    }

}
