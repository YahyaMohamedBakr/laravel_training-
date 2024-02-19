<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Users;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use Psy\Command\EditCommand;

class Posts_controller extends Controller
{


   function index(){

    $posts= Posts::all();

   // $users = Users::all();

    // foreach($posts as $post){
    //     $userName = $post->user->user_name;
    //     ddd($userName);
    //    $postDetails []= [
    //             'name'=>$post->post_name,
    //             'type'=>$post->post_type,
    //             'author'=> $userName
    //    ];
    // }

//ddd($users[0]->posts[0]);

//ddd($postDetails);
    return view('dashboard', [
        'posts'=>$posts,
        //'users'=>$users
    ]);

    // $post=Posts::where('post_type', 'Page')->first();
    // $firstPost = $post->post_name;

    //ddd(Posts::all());
   }

   function addNewPost(){
    return view('add_post');
   }

   function saveNewPost( ){
    $post =new Posts;
    $post->post_user= Cookie::get('user_id');
    $post->post_name= $_POST['post_name'];
    $post->post_slug = $_POST['post_slug'];
    $post->post_type = $_POST['post_type'];
    $post->post_content = $_POST['post_content'];
    $post->save();

    return (view('save'));
   }
 function singlePost($slug){

    $posts= Posts::all();
    $post = $posts->where('post_slug', $slug)->first();

    if(!empty($post)){
        return (view('post',['post'=>$post]));
    }else{
        abort(404);
    }

 }

 function editPost($slug){
    $posts= Posts::all();
    $post = $posts->where('post_slug', $slug)->first();
    $id = Cookie::get('user_id');
    $author = $post->post_user;

    if($author == $id){
        return (view('edit_post',['post'=>$post]));
    }else{
        echo 'This article belongs to another user ';
    }

 }


 function saveEditPost($slug){
    $post= Posts::where('post_slug', $slug)->first();
//ddd($post);
    $post->post_name= $_POST['post_name'];
    $post->post_slug = $_POST['post_slug'];
    $post->post_type = $_POST['post_type'];
    $post->post_content = $_POST['post_content'];
    $post->save();

    return (view('save'));


 }

}
