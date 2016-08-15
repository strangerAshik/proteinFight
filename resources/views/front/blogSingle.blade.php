@extends('front/layout')
@section('content')
<style type="text/css">
	#ingredient{padding-top: 50px;}
  .pagination > .active > a, .pagination > .active > span, .pagination > .active > a:hover, .pagination > .active > span:hover, .pagination > .active > a:focus, .pagination > .active > span:focus {
  background-color: #4CAF50!important;
  border-color: #4CAF50;
  
}
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
  
 <section id="blog-archive">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="blog-archive-area">
           @foreach($blog as $info)
           <?php $pageId=$info->category_id;?>
           @endforeach
            <div class="row">
              <div class="@if($pageId=='29') col-md-12 @else col-md-8 @endif">
                <div class="blog-archive-left">
                  <!-- Start blog news single -->
                  @foreach($blog as $info)
                  <article class="blog-news-single">
                  
                    <div class="blog-news-title">
                      <h2><a href="#">{{$info->title}}</a></h2>
                      
                       @if(Auth::check())                 
                        <a href="{{url('admin/contentEdit/'.$info->id)}}"<span class="glyphicon glyphicon-edit  pull-right" style="color:green"> </span></a>                 
                       @endif

                        @if($info->category_id!='29')
                      <p>By <a href="#" class="blog-author">{{$info->creator}}</a> <span class="blog-date">|{{date('d F Y',strtotime($info->created_at))}}</span></p>
                      @endif
                    </div>
                    <div class="blog-news-details content">
                     <?php echo $info->content;?>....
                     
                    </div>
                  </article>
                  @endforeach

                
                
                </div>
              </div>
                  @if($pageId!='29')
              <div class="col-md-4">
                <aside class="blog-side-bar">
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                  
                  <!-- Start sidebar widget -->
                  <div class="sidebar-widget">
                    <h4 class="widget-title">Categories</h4>
                    <ul class="widget-catg">                      
                      <li><a href="{{url('all-protein-fight-news')}}">Protein Fight News</a></li>
                      <li><a href="{{url('all-international-news')}}">International News</a></li>              
                    </ul>
                  </div>
                 
              
                </aside>
              </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
@stop