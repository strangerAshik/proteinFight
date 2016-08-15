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
            <h2 class="title">FAQ</h2>
            <span class="line"></span>
           
          </div>
        </div>
       <div class="col-md-12 ">
          
       
                <div class="why-choose-us">
                 
                  <div class="panel-group why-choose-group" id="accordion">
                  <?php $num=0;?>
                  @foreach($faqs as $info)
                  <?php $num++;?>
                    <div class="panel panel-default">
                      <div class="panel-heading">
                        <h4 class="panel-title">
                          <a data-toggle="collapse" data-parent="#accordion" href="#{{$info->id}}">
                            {{$info->title}} <span class="fa fa-minus-square"></span>
                          </a>
                        
                      

                        </h4>
                      </div>
                      <div id="{{$info->id}}" class="panel-collapse collapse @if($num==1) in @endif ">
                        @if(Auth::check())                 
                        <a   style="padding:10px" href="{{url('admin/contentEdit/'.$info->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>                 
                        @endif
                        <div class="panel-body">
                        <?php echo $info->content;?>
                        </div>
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