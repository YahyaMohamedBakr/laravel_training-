<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Http\Controllers\Login_controller;
use Illuminate\Support\Facades\DB;


class Login_model extends Model{



  public static function getUserByUserAndPass($name, $pass){
       // $login = new Login_controller;
        $user = DB::table('user')
        ->where('user_name', $name)
        ->where('password', $pass)->first();

        return $user;

    }

    public static function getUserById($id){
        $user = DB::table('user')
        ->where('user_id', $id)->first();
        return $user;
    }
}

