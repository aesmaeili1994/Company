<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\About;
use App\Models\Contact;
use App\Models\Information;
use App\Models\Link;
use App\Models\Post;
use App\Models\Product;
use App\Models\Seo;
use App\Models\Slider;
use App\Models\Social;
use App\Models\Team;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
//        get last row of seos table.
        $seo=Seo::orderby('id','desc')->take(1)->skip(0)->first();
//        get images from sliders table
        $slider=Slider::all();
//        get last row of a abouts table.
        $about=About::orderby('id','desc')->take(1)->skip(0)->first();
//        get 6 row of product table.
        $product=Product::paginate(6);
//        get rows of team table
        $team=Team::all();
//        get 3 row of post table
        $post=Post::all();
//        get last row of information table
        $information=Information::orderby('id','desc')->take(1)->skip(0)->first();
//        get last row of social table
        $social=Social::orderby('id','desc')->take(1)->skip(0)->first();
//        get last 3 row of table link
        $link=Link::orderby('id','desc')->take(3)->skip(0)->get();

        return view('front.index',compact('seo','slider','about','product','team','post',
        'information','social','link'));
    }

    public function product($id)
    {
        $recentProduct=Product::orderby('id','desc')->take(5)->skip(0)->get();
        $singleProduct=Product::findOrFail($id);

        //        get last row of information table
        $information=Information::orderby('id','desc')->take(1)->skip(0)->first();
        //        get last row of social table
        $social=Social::orderby('id','desc')->take(1)->skip(0)->first();
        //        get last 3 row of table link
        $link=Link::orderby('id','desc')->take(3)->skip(0)->get();

        return view('front.product',compact('recentProduct','singleProduct','information',
        'social','link'));
    }

    public function post($id)
    {
        $recentPost=Post::orderby('id','desc')->take(5)->skip(0)->get();
        $singlePost=Post::findOrFail($id);

        //        get last row of information table
        $information=Information::orderby('id','desc')->take(1)->skip(0)->first();
        //        get last row of social table
        $social=Social::orderby('id','desc')->take(1)->skip(0)->first();
        //        get last 3 row of table link
        $link=Link::orderby('id','desc')->take(3)->skip(0)->get();

        return view('front.post',compact('recentPost','singlePost','information','social','link'));
    }

    public function contact(Request $request)
    {
        Contact::create([
            'fullname'=>$request->fullName,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'message'=>$request->message
        ]);
        return 1;
    }
}
