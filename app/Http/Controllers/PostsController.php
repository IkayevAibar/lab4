<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Post;
use Illuminate\Support\Facades\Input;
use DB;
class PostsController extends Controller
{
    public function index (){
        $LastPosts = DB::table('posts')->select('id', 'title','body','src','created_at')->orderBy('id','DESC')->get();
        return view('posts.index',compact('LastPosts'));
    }
    public function show ($id){
        $post=DB::table('posts')->select('id', 'title','body','src','created_at')->where('id',$id)->get();
        $toPost=$post[0];
        // dd($toPost);
        return view('posts.show',compact('toPost'));
    }
    public function write(){
        return view('posts.write');
    }
    public function writed( ){
        $input = Input::all();
        $post = new Post();
        $post->user_id = $input["userid"];
        $post->title = $input["title"];
        $post->body = $input["body"];
        $post->to_id = $input["body"];
        $post->src = $input["src"];
        $post->save();
        return back();
    }
}
