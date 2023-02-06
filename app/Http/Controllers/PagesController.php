<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $groups = \App\Models\Group::orderBy('id', 'DESC')->take(3)->get();
        $teachers = \App\Models\Teacher::where('status', 0)->take(4)->get();
        $posts = \App\Models\Post::orderBy('id', 'DESC')->take(3)->get();
        $comments = \App\Models\Comment::orderBy('id', 'DESC')->get();

        return view('welcome', compact('groups','teachers', 'posts', 'comments'));
    }

    public function groups(){

        $groups = \App\Models\Group::orderBy('id', 'DESC')->paginate(6);
        $comments = \App\Models\Comment::orderBy('id', 'DESC')->get();

        return view('front.groups', compact('groups', 'comments'));
    }

    public function teachers(){
        $teachers1 = \App\Models\Teacher::where('status', 1)->take(4)->get();
        $teachers2 = \App\Models\Teacher::where('status', 0)->paginate(8);

        return view('front.teachers', compact('teachers1', 'teachers2'));
    }

    public function wins(){

        $wins = \App\Models\Win::orderBy('id', 'DESC')->paginate(6);

        return view('front.wins', compact('wins'));
    }

    public function gallery(){
        return view('front.gallery');
    }

    public function blogs(){

        $posts = \App\Models\Post::orderBy('id', 'DESC')->paginate(6);

        return view('front.blogs', compact('posts'));
    }

    public function contact(){
        return view('front.contact');
    }
}
