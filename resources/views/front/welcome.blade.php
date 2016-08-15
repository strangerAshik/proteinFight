@extends('front/layout')

@section('content')

  <!-- Start slider -->
  <section id="slider">
    <div class="main-slider">
 @foreach($sliderImages as $image)
      <div class="single-slide">
      
        <img src="{{asset('public/uploads/'.$image->calling_id)}}" alt="img">
        <div class="slide-content">
          <div class="container">
            <div class="row">
              <div class="col-md-6 col-sm-6">
               @if(Auth::check())               
                <a style="padding:10px; color: red; font-weight: bold;" href="{{url('admin/singleContent/'.$image->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>               
               @endif 
           <!--      <div class="slide-article">
                  <h1 class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">Creative Design & Best Feature</h1>
                  <p class="wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.75s">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since</p>
                  <a class="read-more-btn wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s" href="#">Read More</a>
                </div> -->
              </div>
             <!--  <div class="col-md-6 col-sm-6">
                <div class="slider-img wow fadeInUp">
                  <img src="assets/images/s2.jog" alt="business man">
                </div>
              </div> -->
            </div>
          </div>
        </div>
      </div>
 @endforeach

    </div>
  </section>
  <!-- End slider -->

  <!-- Start Feature -->
  <section id="feature">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="title-area">
            <h2 class="title">{{$homeContents->title}}</h2>
            <span class="line"></span>

          </div>
          </div>
            
            <div class="col-md-12">
            <div class="text-justify marginTopOfContent">
              @if(Auth::check())               
                <a style="padding:10px" href="{{url('admin/contentEdit/'.$homeContents->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>               
              @endif
              
             <?php echo $homeContents->content;?>
            </div>
            </div>
        </div>
        <div class="col-md-12">
          <div class="feature-content">
            <div class="row">
              <div class="col-md-4 col-sm-6" onclick="document.location ='{{url('ingredient')}}'">

              @if(Auth::check())               
                <a style="padding:10px" href="{{url('admin/contentEdit/'.$ingredientsHome->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>               
              @endif

                <div class="single-feature"><!--wow zoomIn-->
                <div class="text-center">
                <?php $ingredientImage=App\contentModel::getFirstImageForGallery($ingredientsHome->id);?>
                 <img width="350" height="100" alt="Ingredients Image" class="text-center" src="{{asset('public/uploads/'.$ingredientImage->calling_id)}}">
                </div>
                  <h4 class="feat-title text-center">{{$ingredientsHome->title}}</h4>
                  <?php echo $ingredientsHome->content ?>
                </div>
              </div>
              <div class="col-md-4 col-sm-6" onclick="document.location ='{{url('technology')}}'">

               @if(Auth::check())               
                <a style="padding:10px" href="{{url('admin/contentEdit/'.$technologyHome->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>               
               @endif

                <div class="single-feature ">
                  <div class="text-center">
                  <?php $technologyImage=App\contentModel::getFirstImageForGallery($technologyHome->id);?>
                 <img width="350" height="100" alt="Ingredients Image" class="text-center" src="{{asset('public/uploads/'.$technologyImage->calling_id)}}">
                </div>
                  <h4 class="feat-title text-center">{{$technologyHome->title}}</h4>
                  <?php echo $technologyHome->content;?>
                </div>
              </div>
              <div class="col-md-4 col-sm-6" onclick="document.location ='{{url('partnerProject')}}'">
                @if(Auth::check())               
                <a style="padding:10px" href="{{url('admin/contentEdit/'.$partnertProjectHome->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>               
                @endif
                <div class="single-feature ">
                  <div class="text-center">
                  <?php $partnerProjectImage=App\contentModel::getFirstImageForGallery($partnertProjectHome->id);?>
                 <img width="350" height="100" alt="Ingredients Image" class="text-center" src="{{asset('public/uploads/'.$partnerProjectImage->calling_id)}}">
                </div>
                  <h4 class="feat-title text-center">{{$partnertProjectHome->title}}</h4>
                 <?php echo $partnertProjectHome->content;?>
                </div>
              </div>
              
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- End Feature -->

 <!-- Start latest news -->
  <section id="latest-news" style="background: #FFF;padding-top: 30px">
    <div class="container">
      <div class="row">
        <div class="col-md-6" style="background: #FFF;border-right:2px dotted #DDD;">
          <div class="title-area">
            <h2 class="fotter-title">Protein Fight News</h2>
            <span class="line"></span>
          </div>
          <div class="latest-news-content">
            <div class="row">
              <!-- start single latest news -->
              <div class="col-md-12">
                <article class="blog-news-single">
                 
                  <div class="blog-news-title">
                    <h2><a href="{{url('singleArticle/'.$lastProtineFightNews->id)}}">{{$lastProtineFightNews->title}}</a></h2>
                     @if(Auth::check())               
                      <a style="padding:10px" href="{{url('admin/contentEdit/'.$lastProtineFightNews->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>               
                      @endif
                    <p>By <a class="blog-author" href="#">{{$lastProtineFightNews->creator}}</a> <span class="blog-date">|{{date("d F Y", strtotime($lastProtineFightNews->created_at))}}</span></p>
                  </div>
                  <div class="blog-news-details">
                    <?php echo substr($lastProtineFightNews->content,0,150);?>...
                    <a class="blog-more-btn" href="{{url('singleArticle/'.$lastProtineFightNews->id)}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                  </div>
                </article>
              </div>
             
             
             
            </div>
          </div>
        </div>
        <div class="col-md-6" style="background: #FFF">
          <div class="title-area">
            <h2 class="fotter-title">International News</h2>
            <span class="line"></span>
          </div>
          <div class="latest-news-content">
            <div class="row">
              
              <!-- start single latest news -->
              <div class="col-md-12">
                <article class="blog-news-single">
               
                  <div class="blog-news-title">
                    <h2><a href="{{url('singleArticle/'.$lastInternationalNews->id)}}">{{$lastInternationalNews->title}}</a></h2>
                     @if(Auth::check())               
                      <a style="padding:10px" href="{{url('admin/contentEdit/'.$lastInternationalNews->id)}}"><span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>               
                      @endif
                    <p>By <a class="blog-author" href="#">{{$lastInternationalNews->creator}}</a> <span class="blog-date">|{{date('d F Y',strtotime($lastInternationalNews->created_at))}}</span></p>
                  </div>
                  <div class="blog-news-details">
                   <?php echo substr($lastInternationalNews->content,0,150);?>
                    <a class="blog-more-btn" href="{{url('singleArticle/'.$lastInternationalNews->id)}}">Read More <i class="fa fa-long-arrow-right"></i></a>
                  </div>
                </article>
              </div>
             
            </div>
          </div>
        </div>
        
       
      </div>
    </div>
  </section>
  <!-- End latest news -->
@stop


 