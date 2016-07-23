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
            <h2 class="title">Production and Processing Partnerships</h2>
            <span class="line"></span>
           
          </div>
        </div>
       <div class="col-md-12" id="service">
            <div class="clearfix">
  			<img width="300" height="250" style="margin-left: 5px" src="{{asset('public/frontAsset/assets/images/techn.png')}}" alt="..." class="pull-right">
			  <p> Empowered with a team of competent interior designers and bringing better optimization of the available facilities, we are capable in undertaking interior decoration projects for small establishment as well as commercial complexes, residential buildings and farm houses. Consultants have command over entire aspects of interior design and its delivery module. We work closely with client to work out cost, time, ambience expected and make sure it is delivered.
			</p>
		</div>
			<img  style="margin-left: 5px" src="{{asset('public/frontAsset/assets/images/techn.png')}}" alt="..." >
		
          
        </div>
      
      </div>
    </div>
  </section>
  <!-- End Service -->
@stop