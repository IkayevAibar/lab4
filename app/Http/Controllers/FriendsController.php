<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Friends;
use User;

class FriendsController extends Controller
{
    public function friends()
    {
        $friends = Friends::myFriends();
        return view('friends.friends', [
            'friends' => $friends,
        ]);
    }
    public function addFriend(Request $request)
    { 
        $friends = new Friends;
        $friends->user_id=Auth::user()->id;
        $friends->friend_id=$request->get('friend_id');
        return back();
    }
}
