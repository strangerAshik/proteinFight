<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Http\Requests;
use App\Http\Controllers\Controller;

class frontController extends Controller
{
	//provide the last provided contact infos
 protected  function sliderImage(){
      return DB::table('contents')
            ->JOIN('documents','contents.id','=','documents.mother_id')
            ->where('contents.category_id','8')
            ->get();
    }
 protected function getContentbByIdAndUniqueKeyFirstMethod($catId,$uniqueKey){
  return DB::table('contents')
          ->where('category_id',$catId)
          ->where('unique_key',$uniqueKey)
          ->orderBy('id','desc')
          ->first();
 }
    public  function home(){
    	
    	$page='home';
      
     $sliderImages=$this->sliderImage();
     $homeContents=$this->getContentbByIdAndUniqueKeyFirstMethod('5','welcome_message');
     $ingredientsHome=$this->getContentbByIdAndUniqueKeyFirstMethod('18','ingredients_home');
     $technologyHome=$this->getContentbByIdAndUniqueKeyFirstMethod('19','technology_home');
     $partnertProjectHome=$this->getContentbByIdAndUniqueKeyFirstMethod('20','partner_project_home');

     $lastProtineFightNews=DB::table('contents')->where('category_id','27')->orderBy('id','desc')->first();
     $lastInternationalNews=DB::table('contents')->where('category_id','28')->orderBy('id','desc')->first();

    	return view('front.welcome',compact('page','sliderImages','homeContents','ingredientsHome','technologyHome','partnertProjectHome','lastProtineFightNews','lastInternationalNews'))
    			
    	;
    }
    
 
    public function about(){
      $page='about';
      return view('front.about',compact('page'));
    }
    public function blog(){
      $page='Blog';
      $blog=DB::table('contents')->where('category_id','27')->orWhere('category_id','28')->orderBy('id','desc')->paginate(10);
      return view('front.blog',compact('page','blog'));
    }
    public function singleArticle($id){
        $page='Blog';
      $blog=DB::table('contents')->where('id',$id)->get();
      return view('front.blogSingle',compact('page','blog'));
    }
    public function allProteinFightNews(){
        $page='Blog';
      $blog=DB::table('contents')->where('category_id','27')->orderBy('id','desc')->paginate(10);
      return view('front.blog',compact('page','blog'));
    }
    public function allInternationalNews(){
        $page='Blog';
      $blog=DB::table('contents')->where('category_id','28')->orderBy('id','desc')->paginate(10);
      return view('front.blog',compact('page','blog'));
    }
    public function career(){
      $page='Career';
      $career=DB::table('contents')->where('category_id','15')->orderBy('id','desc')->first();
      return view('front.career',compact('page','career'));
    }
    public function investroRelations(){
    	$page='Investor Relations';
      $investroRelations=DB::table('contents')->where('category_id','26')->orderBy('id','desc')->first();
    	return view('front.investroRelations',compact('page','investroRelations'));
    }
    Public function ingredient(){
       $ingredientsDetails=$this->getContentbByIdAndUniqueKeyFirstMethod('18','ingredients_details');
       $poweredBys=DB::table('contents')
                  ->JOIN('documents','contents.id','=','documents.mother_id')
                  ->where('contents.category_id','=','22')
                  ->select('contents.*','documents.calling_id')
                  ->orderBy('contents.order')
                  ->get();
      $page='Ingredient';
      return view('front.ingredient',compact('page','ingredientsDetails','poweredBys'));
    }
    Public function technology(){
      $page='Technology';
      $technologyDetails=$this->getContentbByIdAndUniqueKeyFirstMethod('19','technology_details');
      return view('front.technology',compact('page','technologyDetails'));
    }
    Public function partnerProject(){
      //return 'Hello';
      $page='Partner Projects';
      $partnertProjectDetails=$this->getContentbByIdAndUniqueKeyFirstMethod('20','partner_project_details');
      return view('front.partnerProject',compact('page','partnertProjectDetails'));
    }
    Public function events(){
      $page='Events';
      $blog=DB::table('contents')->where('category_id','29')->orderBy('id','desc')->paginate(10);
      return view('front.blog',compact('page','blog'));
    }
    Public function team(){
      $page='Team';
      $team=DB::table('contents')
            ->JOIN('documents','contents.id','=','documents.mother_id')
            ->where('contents.category_id','23')
            ->select('contents.*','documents.calling_id')
            ->get();
      $description=$this->getContentbByIdAndUniqueKeyFirstMethod('23','top_title_content');
      return view('front.team',compact('page','team','description'));
    }
    Public function faq(){
      $page='FAQ';
      $faqs=DB::table('contents')->where('category_id','21')->orderBy('order')->get();
      return view('front.faq',compact('page','faqs'));
    }
    public function contact(){
    	$page='contact';
      $contact=DB::table('contacts')->orderBy('id','desc')->first();
      $contactDescription=DB::table('contents')->where('category_id','25')->orderBy('id','desc')->first();
    	return view('front.contact',compact('page','contact','contactDescription'));
    }
 
  //contact email
  public function sendEmail(Request $request){
    //return 'hello';
    $name=$request->input('name');
    $email=$request->input('email');
    $phone=$request->input('phone');
    $emailMessage=$request->input('message');

    //get contact email
    //$contactEmail=DB::table('contacts')->orderBy('id','desc')->first();
    //mail 

  //$to = $contactEmail->email;
    $toEmail=DB::table('contacts')->orderBy('id','desc')->first();
  $to = $toEmail->email;
  $subject ='Email Form Protein Fight';

  $message = "
  <html>
  <head>
  <title></title>
  </head>
  <h2>$subject</h2>
  <body>
    $emailMessage
    <p>Name: $name</p>
    <p>Phone: $phone</p>
    <p>Email: $email</p>
  </body>
  </html>
  ";

  // Always set content-type when sending HTML email
  $headers = "MIME-Version: 1.0" . "\r\n";
  $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

  // More headers
  $headers .= 'From: <contacts@proteinfight.com>' . "\r\n";
  //$headers .= 'Cc: myboss@example.com' . "\r\n";

  mail($to,$subject,$message,$headers);
  return back()->with('message','Message Send!');
  }
  public function saveNewsLetterSubscriber(Request $request){
    DB::table('contents')->insert(array(
         'title'=>$request->input('email'),
         'unique_key'=>'news_letter',
         'category_id'=>'32',
      ));
     return back()->with('newsletter','Thanks for News Letter Subscribing');
  }
//subscribe
  public function subscribe(Request $request){
    //return 'hello';
  
  	$email=$request->input('email');
  
  	//get contact email
  	//$contactEmail=DB::table('contacts')->orderBy('id','desc')->first();
  	//mail 

  //$to = $contactEmail->email;
	$to = 'md.ashikuzzaman.ashik@gmail.com';
	$subject ='Subscriber Email Address Form Interior Valley';

	$message = "
	<html>
	<head>
	<title>HTML email</title>
	</head>
	<h2>$subject</h2>
	<body>
		
   
    <p>Email: $email</p>
	</body>
	</html>
	";

	// Always set content-type when sending HTML email
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

	// More headers
	$headers .= 'From: <subscribe@interiorvalley.com>' . "\r\n";
	//$headers .= 'Cc: myboss@example.com' . "\r\n";

	mail($to,$subject,$message,$headers);
	return back()->with('message','You are Successfully Subscribed');
  }
  
}
