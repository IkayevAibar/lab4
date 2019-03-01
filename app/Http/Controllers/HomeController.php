<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }
    public function posts()
    {
        $posts=App\Post::all();
        return view('home',compact('posts'));
    }
    public function show($id)
    {
        $post=App\Post::find($id);
        return view('posts.show',compact('post'));
    }
    
}
