<?php



namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cookie;
use App\Models\Login_model;
use App\Models\Users;

class Login_controller extends Controller
{
    /**
     * Show a list of all of the application's users.
     */
    public function index(){
        return view('login');
    }


    public function login(){

       $userData = Users::where('user_name',$_POST['uname'])->where('password', $_POST['psw']   )->first();
        if ($userData) {
            $cookie = cookie('user_id', $userData->user_id, 60);
            $cookie2 = cookie('user_name', $userData->user_name, 60);
            return redirect('/welcome')->withCookie($cookie)->withCookie($cookie2);
        } else {
            return redirect('/')->withErrors(['msg'=>'user name or password is wrong']);

        }


    }


    public function welcome(){


        $id = Cookie::get('user_id');

        // if(!empty($id)){
         //   $userData = Login_model::getUserById($id);
         $userData = Users::where('user_id', $id )->first();

            return view('welcome',[
                'user'=>$userData->user_name
            ]);
        // }else{
        //     return redirect('/')->withErrors(['msg'=>'user name or password is wrong']);
        // }

    }




}




