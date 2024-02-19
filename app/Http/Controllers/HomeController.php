<?php

namespace App\Http\Controllers;

use App\Helpers\AppHelper;
use App\Models\Login_model;
use Illuminate\Support\Facades\Cookie;

class HomeController extends Controller
{

    // public  $id;
    // public  function Check(){
    //     $id = Cookie::get('user_id');
    //     $this->id = $id;
    // }

//    function __construct(){
//     $id = Cookie::get('user_id');
//     if(empty($id)){
//         response()->redirectTo('/')->withErrors(['msg'=>'error']);
//          //exit();
//     }

// }

   public function dashboard(){
    return view('dashboard');

   }
   public function userPosts(){
    return  view('user_posts');

   }
   public function profile(){
    return view('profile');
   }
//    public static function notUser(){
//     return redirect('/')->withErrors(['msg'=>'regester now or login please']);
//    }


}
