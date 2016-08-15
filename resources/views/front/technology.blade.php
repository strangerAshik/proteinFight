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
            <h2 class="title">{{$technologyDetails->title}}</h2>
            <span class="line"></span>
            
             @if(Auth::check())                 
               <a   style="padding:10px" href="{{url('admin/contentEdit/'.$technologyDetails->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>                 
             @endif 
           
          </div>
        </div>
       <div class="col-md-12 marginTopOfContent">
            <div class="clearfix content">
  			     <?php echo $technologyDetails->content; ?>
		
          
        </div>
      
      </div>
    </div>
    </div>
  </section>
  <!-- End Service -->
@stop