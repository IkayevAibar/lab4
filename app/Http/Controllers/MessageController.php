<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;
use App\User;

class MessageController extends Controller
{
    public function sendMessage(Request $request, User $user)
    {
        $data = $request->all();
        $message = new Message;
        $message->user_id = $data->user_id;
        $message->friend_id = $data->friend_id;
        $message->content = $data->content;
        $message->save();
    }
}
