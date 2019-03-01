<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;
use Auth;
use Redirect;
class MessageController extends Controller
{
    public function showMessenger(Request $request){
        $user=User::where('id',$request->post('user_id'))->first();
        // dd($user);
        $messages=Message::where('user_id',$user->id)->where('friend_id',Auth::user()->id)->orwhere('friend_id',$user->id)->where('user_id',Auth::user()->id)->get();
        // dd($messages);  
        return view("friends.sendMessage",['user'=>$user,'messages'=>$messages]);
    }
    public function sendMessage(Request $request)
    {
        $data = $request->all();
        $message = new Message;
        // dd($data);
        $message->user_id = $data["user_id"];
        $message->friend_id = $data["friend_id"];
        $message->content = $data["body"];
        $message->save();
        
        // $LastPosts = DB::table('posts')->select('id','user_id', 'title','body','src','created_at')->orderBy('id','DESC')->get();
        
        return Redirect::back()->withInput($request->all());
        }
}
