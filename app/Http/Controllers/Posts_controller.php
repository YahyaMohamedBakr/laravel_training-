<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Posts;
use App\Models\Users;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\DB;
use PharIo\Manifest\Author;
use Psy\Command\EditCommand;


//all posts
class Posts_controller extends Controller
{


   function index(){

    $posts= Posts::all();


    return view('dashboard', [
        'posts'=>$posts,

    ]);


   }

// single post
   function singlePost($slug){

    $posts= Posts::all();
    $post = $posts->where('post_slug', $slug)->first();

    if(!empty($post)){
        return (view('post',['post'=>$post]));
    }else{
        abort(404);
    }

 }


 //add new post
   function editePost($slug){

    if(isset ($slug) && $slug == 'add-new'){
        return view('add_post');
    }elseif(!empty($slug)){

        $post =Posts::where('post_slug', $slug)->first();
        $author =  $post->post_user?? null ;
            if(empty($author)){
                abort(404);
            }elseif($author == Cookie::get('user_id')){
                return (view('add_post',['post'=>$post]));
            }else{
                echo 'This article belongs to another user ';
            }
    }else{
        abort(404);
    }

   }

//    function saveNewPost( ){
//     $post =new Posts;
//     $post->post_user= Cookie::get('user_id');
//     $post->post_name= $_POST['post_name'];
//     $post->post_slug = $_POST['post_slug'];
//     $post->post_type = $_POST['post_type'];
//     $post->post_content = $_POST['post_content'];
//     $post->save();

//     return (view('save'));
//    }

//edit post
//  function editPost($slug){
//     $posts= Posts::all();
//     $post = $posts->where('post_slug', $slug)->first();
//     $id = Cookie::get('user_id');
//     $author = $post->post_user;

//     if($author == $id){
//         return (view('edit_post',['post'=>$post]));
//     }else{
//         echo 'This article belongs to another user ';
//     }

//  }


 function savePost($slug=null){
    if(isset($slug) && !empty($slug)){
        $post= Posts::where('post_slug', $slug)->first();
    }else{
        $post =new Posts;
        $post->post_user= Cookie::get('user_id');
    }

    $post->post_name= $_POST['post_name'];
    $post->post_slug = $_POST['post_slug'];
    $post->post_type = $_POST['post_type'];
    $post->post_content = $_POST['post_content'];
    $post->save();

    return (view('save'));


 }

}
