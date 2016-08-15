@extends('front/layout')
@section('content')
<style type="text/css">
</style>
  <!-- Start single page header -->
  <section id="single-page-header" style="margin-top: 50px;min-height: 200px">
    <div class="overlay">
      <div class="container">
        <div class="row">
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-left">
              <h2>{{$page}}</h2>
             <!--  <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p> -->
            </div>
          </div>
          <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="single-page-header-right">
              <ol class="breadcrumb">
                <li><a href="#">Home</a></li>
                <li class="active">{{$page}}</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End single page header -->

  <section  id="our-team service">
    <div class="container">
      <div class="row">
        <div class="col-md-12" style="margin-top:20px">
          <div class="title-area">
            <h2 class="title">{{$description->title}}</h2>

            <span class="line"></span>
            @if(Auth::check())                 
             <a   style="padding:10px" href="{{url('admin/contentEdit/'.$description->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>                 
             @endif   
             </div>
        </div>
        <div class="col-md-12 marginTopOfContent ">
            <div class="clearfix content">
               <?php echo $description->content;?>
            </div>
    
          
        </div>
          
          
        <div class="col-md-12">
          <div class="our-team-content">
            <div class="row">
              <!-- Start single team member -->
               @foreach($team as $info)
              <div class="col-md-4">
               @if(Auth::check())                 
               <a   style="padding:10px" href="{{url('admin/contentEdit/'.$info->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>                 
               @endif 
             
                <div class="single-team-member" style="margin-bottom: 50px">
                 <div class="team-member-img">
                   <img src="{{asset('public/uploads/'.$info->calling_id)}}" alt="team member img">
                 </div>
                 <div class="team-member-name">
                   <p>{{$info->title}}</p>
                   <span>{{$info->subtitle}}</span>
                 </div>
                  <?php echo $info->content;?>
                 <div class="team-member-link">
                   <!-- <a href="#"><i class="fa fa-facebook"></i></a>
                   <a href="#"><i class="fa fa-twitter"></i></a> -->
                   <a href="{{$info->hyper_link}}"><i class="fa fa-linkedin"></i></a>
                 </div>
                </div>
            
              </div>
                @endforeach
              <!-- Start single team member -->
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Pricing table -->
  
  
@stop