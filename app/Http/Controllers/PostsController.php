<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use app\User;
use app\Post;
use Illuminate\Support\Facades\Input;
use DB;
class PostsController extends Controller
{
    public function index (){
        $LastPosts = DB::table('posts')->select('id', 'title','body','src','created_at')->orderBy('id','DESC')->get();
        return view('posts.index',compact('LastPosts'));
    }
    public function show (){
        return view('posts.show');
    }
    public function write(){
        return view('posts.write');
    }
    public function writed( ){
        $input = Input::all();
        // dd($input);
        $post = new \stdClass();
        $post->user_id = $input["userid"];
        $post->title = $input["title"];
        $post->body = $input["body"];
        $post->src = $input["src"];
        DB::table('posts')->insert([
            ['user_id'=>$input["userid"],
            'to_id'=>0,
            'title'=>$input["title"],
            'body'=>$input["body"],
            'src'=>$input["src"],
            ] 
        ]);
        // $post->moredata = $moredata;
        return view('posts.index');
    }
}
