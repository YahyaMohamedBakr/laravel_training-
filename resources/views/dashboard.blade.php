@extends('master_layout')

@section('content')
            @foreach ($posts as $post)


            <div class="braber_taital_main">
               <div class="row">
                  <div class="col-lg-6">
                     <div class="barber_bg_main">
                        <h1 class="barber_taital"><a href="posts/{{$post->post_slug}}">{{$post->post_name}}</a></h1>
                        <p class="barber_text">{{$post->post_content}}</p>
                        <div class="blogr_main">
                           <div class="blogr_left">
                              <p class="post_text">Post By :  {{$post->user->user_name}}</p>
                           </div>
                           <div class="blogr_right">
                              <div class="comment_text">
                                 <ul>
                                    <li><a href="#">Like<span class="padding_10"><i class="fa fa-thumbs-up"></i></span></a></li>
                                    <li><a href="#">Comment<span class="padding_10"><i class="fa fa-comment"></i></span></a></li>
                                    <li><a href="#">Share<span class="padding_10"><i class="fa fa-share-alt" aria-hidden="true"></i></span></a></li>
                                 </ul>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <div class="fashion_img">
                        <img src="images/img-1.png" class="fashion_img">
                        <div class="read_bt"><a href="#">04<br>FEB</a></div>
                     </div>
                  </div>
               </div>
            </div>
            @endforeach

@endsection
