<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Blog</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" type="text/css" href="{{url('')}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" type="text/css" href="{{url('')}}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{url('')}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{url('')}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{url('')}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <!-- fonts -->
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
      <!-- owl stylesheets -->
      <link rel="stylesheet" href="{{url('')}}/css/owl.carousel.min.css">
      <link rel="stylesheet" href="{{url('')}}/css/owl.theme.default.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
      <link href="{{url('')}}/style.css" rel="stylesheet">
   </head>
   <body>
      <!--header section start -->
      <div class="header_section">
         <div class="container-fluid">
            <div class="row">
               <div class="col-sm-12">
                  <div class="logo"><a href="index.html"><img src="{{url('')}}/images/logo.png"></a></div>
                  <div class="menu_text">
                     <ul>
                        <div class="togle_3">
                           <div class="shoping_bag"><a href="#"><img src="{{url('')}}/images/user-icon.png"></a>
                              <span class="padding_left_40"><a href="#"><img src="{{url('')}}/images/search-icon.png"></a></span>
                           </div>
                           <div id="myNav" class="overlay">
                              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
                              <div class="overlay-content">
                                 <a href="index.html">Home</a>
                                 <a href="about.html">About</a>
                                 <a href="blog.html">Blog</a>
                                 <a href="contact.html">Testimonial</a>
                                 <a href="contact.html">Contact</a>
                              </div>
                           </div>
                           <span class="navbar-toggler-icon"></span>
                           <span onclick="openNav()"><img src="{{url('')}}/images/toogle-icon.png" class="toggle_menu"></span>
                        </div>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section start -->
         <div class="banner_section">
            <div class="container">
               <div class="row">
                  <div class="col-md-6">
                     <div class="banner_taital_section">
                        <h1 class="design_taital">We Do Design Blog For Business</h1>
                        <div class="contact_bt"><a href="#">Contact Us</a></div>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div id="main_slider" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                           <div class="carousel-item active">
                              <div class="banner_img"><img src="{{url('')}}/images/banner-img.png"></div>
                           </div>
                           <div class="carousel-item">
                              <div class="banner_img"><img src="{{url('')}}/images/banner-img.png"></div>
                           </div>
                           <div class="carousel-item">
                              <div class="banner_img"><img src="{{url('')}}/images/banner-img.png"></div>
                           </div>
                        </div>
                        <a class="carousel-control-prev" href="#main_slider" role="button" data-slide="prev">
                        <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="carousel-control-next" href="#main_slider" role="button" data-slide="next">
                        <i class="fa fa-angle-right"></i>
                        </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- banner section end -->
      </div>
      <!-- header section end -->
      <!-- barber section start -->
      <div class="barber_section layout_padding">
         <div class="container">


@yield('content','')

         </div>
        </div>
        <!-- barber section end -->
        <!-- footer section start -->
        <div class="footer_section layout_padding">
           <div class="container">
              <div class="footer_main">
                 <div class="footer_logo"><a href="index.html"><img src="{{url('')}}/images/footer-logo.png"></a></div>
                 <div class="footer_menu">
                    <ul>
                       <li><a href="index.html">Home</a></li>
                       <li><a href="about.html">About</a></li>
                       <li><a href="blogs.html">Blog</a></li>
                       <li><a href="contact.html">Testimonial</a></li>
                       <li><a href="contact.html">Contact</a></li>
                    </ul>
                 </div>
                 <div class="social_icon">
                    <ul>
                       <li><a href="#"><img src="{{url('')}}/images/fb-icon.png"></a></li>
                       <li><a href="#"><img src="{{url('')}}/images/twitter-icon.png"></a></li>
                       <li><a href="#"><img src="{{url('')}}/images/linkedin-icon.png"></a></li>
                       <li><a href="#"><img src="{{url('')}}/images/instagram-icon.png"></a></li>
                    </ul>
                 </div>
              </div>
              <h1 class="subscribe_text">Subscribe Now</h1>
              <div class="input_bt">
                 <div class="input-group mb-3">
                    <input type="text" class="form-control" placeholder="Enter Your Email" aria-label="Enter Your Email" aria-describedby="basic-addon2">
                    <div class="input-group-append">
                       <button class="btn btn-outline-secondary" type="button"><i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    </div>
                 </div>
              </div>
              <div class="location_text">
                 <ul>
                    <li>
                       <a href="#"><img src="{{url('')}}/images/call-icon.png">
                       <span class="padding_15">Call +01 1234567890</span></a>
                    </li>
                    <li>
                       <a href="#"><img src="{{url('')}}/images/mail-icon.png">
                       <span class="padding_15">demo@gmail.com</span></a>
                    </li>
                 </ul>
              </div>
           </div>
        </div>
        <!-- footer section end -->
        <!-- copyright section start -->
        <div class="copyright_section">
           <div class="container">
              <div class="row">
                 <div class="col-sm-12">
                    <p class="copyright_text">© 2020 All Rights Reserved.<a href="https://html.design"> Free  html Templates</a></p>
                 </div>
              </div>
           </div>
        </div>
        <!-- copyright section end -->
        <!-- Javascript files-->
        <script src="{{url('')}}/js/jquery.min.js"></script>
        <script src="{{url('')}}/js/popper.min.js"></script>
        <script src="{{url('')}}/js/bootstrap.bundle.min.js"></script>
        <script src="{{url('')}}/js/jquery-3.0.0.min.js"></script>
        <script src="{{url('')}}/js/plugin.js"></script>
        <!-- sidebar -->
        <script src="{{url('')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
        <script src="{{url('')}}/js/custom.js"></script>
        <!-- javascript -->
        <script src="{{url('')}}/js/owl.carousel.js"></script>
        <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
        <script>
           $(document).ready(function(){
           $(".fancybox").fancybox({
           openEffect: "none",
           closeEffect: "none"
           });

           $(".zoom").hover(function(){

           $(this).addClass('transition');
           }, function(){

           $(this).removeClass('transition');
           });
           });
        </script>
        <script>
           function openNav() {
           document.getElementById("myNav").style.width = "100%";
           }
           function closeNav() {
           document.getElementById("myNav").style.width = "0%";
           }
        </script>
     </body>
  </html>
