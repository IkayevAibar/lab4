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
        $friends = Friends::where('user_id', Auth::user()->id)->get();
        foreach ($friends as $friend) {
            $users[] = User::where('id', $friend->friend_id)->first();
        }
        return $users;
    }
}
