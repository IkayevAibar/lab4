<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use DB;
class MessageController extends Controller
{
    public function showMessenger(Request $request){
        $user=User::where('id',$request->post('friend_id'))->first();
        
        return view("friends.sendMessage",['friend'=>$user]);
    }
    public function sendMessage(Request $request)
    {
        $data = $request->all();
        $message = new Message;
        // dd($data);
        $message->user_id = $data["userid"];
        $message->friend_id = $data["friend_id"];
        $message->content = $data["body"];
        $message->save();
        
        $LastPosts = DB::table('posts')->select('id','user_id', 'title','body','src','created_at')->orderBy('id','DESC')->get();
        
        return view("posts.index",compact("LastPosts"));
    }
}
