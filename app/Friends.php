<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Auth;
use App\User;
class Friends extends Model
{
    public $table = "friends";
    public static function myFriends()
    {
        $friends = Friends::where('friend_id', Auth::user()->id)->orWhere('user_id', Auth::user()->id)->get();
        $users = [];
        foreach ($friends as $friend) {
            if ($friend->whoSend != Auth::user()->id) {
                $users[] = User::where('id', $friend->friend_id)->first();
            } else {
                $users[] = User::where('id', $friend->user_id)->first();
            }
        }
        return $users;
    }
}
