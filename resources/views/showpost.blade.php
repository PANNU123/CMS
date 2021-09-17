<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>Jack Blogger</title>
      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="{{asset('frontend')}}/css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="{{asset('frontend')}}/css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="{{asset('frontend')}}/css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="{{asset('frontend')}}/images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="{{asset('frontend')}}/css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout">
      <!-- loader  -->
      <!-- section --> 
     
          
      
      <div class="section layout_padding">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="heading">
                     <a href="{{route('home')}}"><h3>Blog <span class="orange_color">Post</span></h3></a>
                  </div>
               </div>
            </div>
            @foreach ($post as $item)
            <div class="row">
               <div class="col-md-6">
                  <img src="{{asset('frontend')}}/images/blog1.png" alt="#" />
               </div>
               <div class="col-md-6">
                  <div class="full blog_cont">
                     <h4>{{$item->title}}</h4>
                     <h5>{{$item->created_at}}</h5>
                     <p>{{$item->description}}</p>
                  </div>
               </div>
            </div>
            <div class="row margin_top_30">
               <div class="col-md-12">
                  <div class="button_section full center margin_top_30">
                     <a style="margin:0;" href="{{url('edit/post/'.$item->id)}}">Edit Post</a>
                     <a style="margin:0;" href="{{url('delete/post/'.$item->id)}}">Delete Post</a>
                  </div>
                  
               </div>
            </div>

         </div>
      </div>
      @endforeach
      <!-- end section -->
      <!-- section --> 
      <!-- Javascript files-->
      <script src="{{asset('frontend')}}/js/jquery.min.js"></script>
      <script src="{{asset('frontend')}}/js/popper.min.js"></script>
      <script src="{{asset('frontend')}}/js/bootstrap.bundle.min.js"></script>
      <script src="{{asset('frontend')}}/js/jquery-3.0.0.min.js"></script>
      <script src="{{asset('frontend')}}/js/plugin.js"></script>
      <!-- Scrollbar Js Files -->
      <script src="{{asset('frontend')}}/js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="{{asset('frontend')}}/js/custom.js"></script>
   </body>
</html>