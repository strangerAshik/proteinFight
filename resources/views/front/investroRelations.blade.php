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
 @if (session('message'))
                        <div class="alert alert-success ">
                            {{ session('message') }}
                        </div>
          @endif
        <div class="col-md-6">
          <div class="title-area">
            <h2 class="title">{{$investroRelations->title}}</h2>
            <span class="line"></span>           
          </div>
          <div class="clearfix">
             <?php echo $investroRelations->content;?>
          </div> 
        </div>
        <div class="col-md-6">
          <div class="title-area">
            <h2 class="title">Contact</h2>
            <span class="line"></span>           
          </div>
          <div class="clearfix">
            <div class="contact-area-right" style="margin-bottom: 50px;">
                   <form action="{{url('sendEmail')}}" method="POST" class="comments-form contact-form">
                   <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div class="form-group">                        
                      <input type="text" required="" class="form-control" name="name" placeholder="Your Name [Required]">
                    </div>
                    <div class="form-group">                        
                      <input type="email" required="" class="form-control" name="email" placeholder="Email [Required]">
                    </div>
                     <div class="form-group">                        
                      <input type="text" class="form-control" name="subject" placeholder="Subject">
                    </div>
                    <div class="form-group">                        
                      <textarea required="" placeholder="Message [Required]" rows="3" name="message" class="form-control"></textarea>
                    </div>
                    <button class="btn btn-primary">Send Message</button>
                  </form>
                 </div>
          </div> 
        </div>
    
      </div>
    </div>
  </section>
  <!-- End Service -->
@stop