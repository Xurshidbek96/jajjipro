<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }

    public function groups(){
        return view('front.groups');
    }

    public function teachers(){
        return view('front.teachers');
    }

    public function wins(){
        return view('front.wins');
    }

    public function gallery(){
        return view('front.gallery');
    }

    public function blogs(){
        return view('front.blogs');
    }

    public function contact(){
        return view('front.contact');
    }
}
