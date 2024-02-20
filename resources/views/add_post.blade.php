@extends('master_layout')

@section('content')




        <form action="<?php echo isset ($post->post_slug)? $post->post_slug.'/':'';?>save_post" method="post">
          @csrf
            <div class="imgcontainer">
              <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
                <label for="post_name"><b>Post Name</b></label>
                <input type="text" placeholder="Enter Post Name" name="post_name" value="<?= $post->post_name??''?>" required>
                <label for="post_slug"><b>Post Slug</b></label>
                <input type="text" placeholder="Enter Post Slug" name="post_slug" value="<?= $post->post_slug??''?>" required>

                <label for="post_type"><b>Post Type</b></label>
                <input type="text" placeholder="Enter Post Type" name="post_type" value="<?=$post->post_type??''?>" >

                <label for="post_content"><b>Post Content</b></label>
                <textarea type="text" placeholder="Enter Post Content" name="post_content" rows="5" cols="130" ><?=$post->post_content??''?></textarea>
              <button type="submit" >Add Post</button>

            </div>
            @if($errors->any())
            <h4 style="color:red">{{$errors->first()}}</h4>
            @endif
            <div class="container" style="background-color:#f1f1f1">

            </div>
          </form>



@endsection
