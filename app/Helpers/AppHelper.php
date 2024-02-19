<?php
namespace App\Helpers;

use Illuminate\Support\Facades\Cookie;

class AppHelper{

    public static function Check($view){
        $id = Cookie::get('user_id');
        if(!empty($id)){
            return view($view);
        }else{
            return redirect('/')->withErrors(['msg'=>'error']);
        }

    }





}
