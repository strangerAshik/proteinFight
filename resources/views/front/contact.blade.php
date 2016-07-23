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
    <!-- Start contact section  -->
  <section id="contact">
     <div class="container">

       <div class="row">
         <div class="col-md-12">
          @if (session('message'))
                        <div class="alert alert-success ">
                            {{ session('message') }}
                        </div>
          @endif
           <div class="title-area">
              <h2 class="title">{{$contactDescription->title}}</h2>
              <span class="line"></span>
              <p></p>
              <?php echo $contactDescription->content;?>
            </div>
         </div>
         <div class="col-md-12">
           <div class="cotact-area">
             <div class="row">
               <div class="col-md-4">
                 <div class="contact-area-left">
                   <h4>Contact Info</h4>
                   <address class="single-address">
                     <?php echo $contact->mailling_address; ?>
                     <p>{{$contact->email}}</p>
                     <p>{{$contact->phone}}</p>
                   </address> 
                   <div class="footer-right contact-social">

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
               <div class="col-md-8">
                 <div class="contact-area-right">
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
       </div>
     </div>
  </section>
  <!-- End contact section  -->

  <!-- Start google map -->
  <section id="google-map">
   <?php echo $contact->gps_latitude;?>
  </section>
  

@stop