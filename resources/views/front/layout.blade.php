<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Protein Fight : {{$page}}</title>
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/icon" href="{{asset('public/frontAsset/assets/images/favicon.ico')}}"/>
    <!-- Font Awesome -->
    <link href="{{asset('public/frontAsset/assets/css/font-awesome.css')}}" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="{{asset('public/frontAsset/assets/css/bootstrap.css')}}" rel="stylesheet">    
    <!-- Slick slider -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontAsset/assets/css/slick.css')}}"/> 
    <!-- Fancybox slider -->
    <link rel="stylesheet" href="{{asset('public/frontAsset/assets/css/jquery.fancybox.css')}}" type="text/css" media="screen" /> 
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontAsset/assets/css/animate.css')}}"/> 
    <!-- Progress bar  -->
    <link rel="stylesheet" type="text/css" href="{{asset('public/frontAsset/assets/css/bootstrap-progressbar-3.3.4.css')}}"/> 
     <!-- Theme color -->
    <link id="switcher" href="{{asset('public/frontAsset/assets/css/theme-color/default-theme.css')}}" rel="stylesheet">

    <!-- Main Style -->
    <link href="{{asset('public/frontAsset/style.css')}}" rel="stylesheet">

    <!-- Fonts -->

    <!-- Open Sans for body font -->
    <link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
    <!-- Lato for Title -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>    
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style type="text/css">
       .content img{margin: 15px 0 15px 15px;}
    </style>
  </head>
  <body>
  
  <!-- BEGAIN PRELOADER -->
  <div id="preloader">
    <div id="status">&nbsp;</div>
  </div>
  <!-- END PRELOADER -->

  <!-- SCROLL TOP BUTTON -->
  <a class="scrollToTop" href="#"><i class="fa fa-angle-up"></i></a>
  <!-- END SCROLL TOP BUTTON -->

  <!-- Start header -->
  <header id="header">
  
  </header>
  <!-- End header -->
  
 

  <!-- BEGIN MENU -->
  <section id="menu-area">      
    <nav class="navbar navbar-default navbar-fixed-top" role="navigation">  
      <div class="container">
        <div class="navbar-header">
          <!-- FOR MOBILE VIEW COLLAPSED BUTTON -->
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <!-- LOGO -->              
          <!-- TEXT BASED LOGO -->
         <!--  <a class="navbar-brand" href="index.html">Protine Fight</a> -->              
          <!-- IMG BASED LOGO  -->
           <a class="navbar-brand" href="{{url('/')}}">
           <img width="100" height="100" alt="logo" src="{{asset('public/frontAsset/assets/images/logo.jpg')}}">
           </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul id="top-menu" class="nav navbar-nav navbar-right main-nav">
            <li @if($page=='home')class="active"@endif><a href="{{url('/')}}">Home</a></li>
            <li @if($page=='Ingredient')class="active"@endif><a href="{{url('ingredient')}}">Ingredients</a></li>
            <li @if($page=='Technology')class="active" @endif ><a href="{{url('technology')}}">Technology</a></li>
            <li @if($page=='Partner Projects')class="active"@endif ><a href="{{url('partnerProject')}}">Partner Projects</a></li>
            <li @if($page=='about'||$page=='Investor Relations'||$page=='Team' || $page=='Career'|| $page=='Events')class="active"@endif class="dropdown">
              <a href="{{url('about')}}" class="dropdown-toggle" data-toggle="dropdown">About <span class="fa fa-angle-down"></span></a>
              <ul class="dropdown-menu" role="menu">
                <li><a href="{{url('investroRelations')}}">Investor relations</a></li>                
                <li><a href="{{url('team')}}">Team</a></li>
                <li><a href="{{url('events')}}">Events</a></li>
                <li><a href="{{url('career')}}">Career</a></li>
               
                         
              </ul>
            </li>
           
            <li @if($page=='contact')class="active"@endif><a href="{{url('contact')}}">Contact</a></li>
            <li @if($page=='FAQ')class="active"@endif><a href="{{url('faq')}}">FAQ</a></li>
            <li @if($page=='Blog')class="active"@endif><a href="{{url('blog')}}">Blog</a></li>
          </ul>                     
        </div><!--/.nav-collapse -->
      
      </div>     
    </nav>
  </section>
  <!-- END MENU --> 

                       
 
              @yield('content')
        


  <!-- Start subscribe us -->
  <section id="subscribe"  style="margin-top: 25px;">
  @if (session('newsletter'))
                        <div class="alert alert-success ">
                            {{ session('newsletter') }}
                        </div>
@endif
    <div class="subscribe-overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subscribe-area">
              <h2 class="wow fadeInUp">Subscribe Newsletter</h2>
              <form action="{{url('saveNewsLetterSubscriber')}}" method="POST" class="subscrib-form wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
              <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <input required="" type="email" name="email" placeholder="Enter Your E-mail..">
                <button class="subscribe-btn" type="submit">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End subscribe us -->
 
 <!-- Start footer -->
  <footer id="footer">
    <div class="container">
      <div class="row">
        <div class="col-md-6 col-sm-6">
          <div class="footer-left">
            <p>Copyright © 2016. Protein Fight, All Rights Reserved. Powered by <a href="http://binaryfall.com">BinaryFall</a> </p>
          </div>
        </div>
        <div class="col-md-6 col-sm-6">
          <div class="footer-right" >
          <?php $fb=App\contentModel::socialMediaLink('facebook');?>                   
                   <?php $tw=App\contentModel::socialMediaLink('twitter');?>                   
                   <?php $gp=App\contentModel::socialMediaLink('google_plus');?>                   
                   <?php $lin=App\contentModel::socialMediaLink('linked_in');?>   

                      @if($fb)       
                      <a target="_blink" href="{{$fb->hyper_link}}"><i class="fa fa-facebook"></i></a>
                      @endif
                      @if($tw)       
                      <a target="_blink" href="{{$tw->hyper_link}}"><i class="fa fa-twitter"></i></a>
                      @endif
                      @if($gp)       
                      <a target="_blink" href="{{$gp->hyper_link}}"><i class="fa fa-google-plus"></i></a>
                      @endif
                      @if($lin)       
                      <a target="_blink" href="{{$lin->hyper_link}}"><i class="fa fa-linkedin"></i></a>
                      @endif
           
          </div>
        </div>
      </div>
    </div>
  </footer>
  <!-- End footer -->

  <!-- jQuery library -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>    
  <!-- Include all compiled plugins (below), or include individual files as needed -->
  <!-- Bootstrap -->
  <script src="{{asset('public/frontAsset/assets/js/bootstrap.js')}}"></script>
  <!-- Slick Slider -->
  <script type="text/javascript" src="{{asset('public/frontAsset/assets/js/slick.js')}}"></script>    
  <!-- mixit slider -->
  <script type="text/javascript" src="{{asset('public/frontAsset/assets/js/jquery.mixitup.js')}}"></script>
  <!-- Add fancyBox -->        
  <script type="text/javascript" src="{{asset('public/frontAsset/assets/js/jquery.fancybox.pack.js')}}"></script>
 <!-- counter -->
  <script src="{{asset('public/frontAsset/assets/js/waypoints.js')}}"></script>
  <script src="{{asset('public/frontAsset/assets/js/jquery.counterup.js')}}"></script>
  <!-- Wow animation -->
  <script type="text/javascript" src="{{asset('public/frontAsset/assets/js/wow.js')}}"></script> 
  <!-- progress bar   -->
  <script type="text/javascript" src="{{asset('public/frontAsset/assets/js/bootstrap-progressbar.js')}}"></script>  
  
 
  <!-- Custom js -->
  <script type="text/javascript" src="{{asset('public/frontAsset/assets/js/custom.js')}}"></script>
  
  </body>
</html>