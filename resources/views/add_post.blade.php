@extends('master_layout')

@section('content')


<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="{{url('')}}/style.css" rel="stylesheet">
        <!-- Styles -->





    </head>
    <body class="antialiased">

        <form action="submit_new_post" method="post">
          @csrf
            <div class="imgcontainer">
              <img src="img_avatar2.png" alt="Avatar" class="avatar">
            </div>

            <div class="container">
              <label for="post_name"><b>Post Name</b></label>
              <input type="text" placeholder="Enter Post Name" name="post_name"  required>
              <label for="post_slug"><b>Post Slug</b></label>
              <input type="text" placeholder="Enter Post Slug" name="post_slug"  required>

              <label for="post_type"><b>Post Type</b></label>
              <input type="text" placeholder="Enter Post Type" name="post_type"  >

              <label for="post_content"><b>Post Content</b></label>
              <textarea type="text" placeholder="Enter Post Content" name="post_content" rows="5" cols="130" ></textarea>
              <button type="submit" >Add Post</button>

            </div>
            @if($errors->any())
            <h4 style="color:red">{{$errors->first()}}</h4>
            @endif
            <div class="container" style="background-color:#f1f1f1">

            </div>
          </form>
    </body>
</html>


@endsection
