@extends('front/layout')
@section('content')
<style type="text/css">
	#ingredient{padding-top: 50px;}


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
  
  <!-- Start Service -->
  <section id="service">
    <div class="container">
      <div class="row">
       <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">{{$ingredientsDetails->title}}</h2>
            <span class="line"></span>
           
          </div>
        </div>
       <div class="col-md-12 marginTopOfContent">
         @if(Auth::check())                 
          <a   style="padding:10px" href="{{url('admin/contentEdit/'.$ingredientsDetails->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>                 
         @endif
            <div class="clearfix content">
  		        <?php echo $ingredientsDetails->content;?>
		        </div>
		
          
        </div>
        </div>
        </div>
        </section>
         <section id="service">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">Applications powered by Protein Fight</h2>
            <span class="line"></span>
           
          </div>
        </div>
        <div class="col-md-12">
          <div class="marginTopOfContent">
            <div class="row">
            @foreach($poweredBys as $info)
            	 <div class="col-md-4 col-sm-6">
                        @if(Auth::check())                 
                        <a   style="padding:10px" href="{{url('admin/contentEdit/'.$info->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>                 
                        @endif
                <div class="single-feature">
                <div class="text-center">
                 <img width="350" height="100" alt="Ingredients Image" class="text-center" src="{{asset('public/uploads/'.$info->calling_id)}}">
                </div>
                  <h4 class="feat-title text-center">{{$info->title}}</h4>
                  <?php echo $info->content;?>
                </div>
              </div>
            @endforeach
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Service -->
@stop