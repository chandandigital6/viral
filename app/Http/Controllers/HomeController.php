<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\choze;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Job;
use App\Models\join;
use App\Models\Menu;
use App\Models\Plan;
use App\Models\Service;
use App\Models\Team;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $banner=Banner::all();
        $about=About::all();
        $services=Service::all();
        $plans=Plan::all();
        $testimonials=Testimonial::all();
        $teams=Team::all();
        $categories = Category::with('menus')->get();
        $counters=Counter::all();
        $blogs=Blog::all();
        $faqs=Faq::all();
        return view('front.index',compact('banner','categories','faqs','counters','blogs','about','services','plans','testimonials','teams'));
      }
      public function about(){
          $teams=Team::all();
          $about=About::all();
          $counters=Counter::all();
          $choose=choze::all();
          return view('front.about',compact('about','teams' ,'choose'));
      }
      public function services(){
          $services=Service::all();
          $testimonials=Testimonial::all();
          return view('front.service',compact('services','testimonials'));
      }
      public function contact(){
          return view('front.contact');
      }
      public function price(){
          $teams=Team::all();
          $plans=Plan::all();
          return view('front.price',compact('plans','teams'));
      }
      public function team(){
          $teams=Team::all();
          return view('front.team',compact('teams'));
      }
      public function testimonial(){
          $testimonials=Testimonial::all();
          return view('front.testimonial',compact('testimonials'));
      }
      public function appointment(){
          return view('front.appointment');
      }

    public function blog(){
        $blogs=Blog::all();
        return view('front.blogCard',compact('blogs'));
    }
    public function blogDetails(Blog $blog){
//        dd($blog);
        $categories = Blog::all();
        $recentPosts = Blog::orderBy('created_at', 'desc')->take(5)->get();
//
        // Pass the data to the view
        return view('front.blogDetails', compact('blog', 'categories', 'recentPosts'));
    }

    public function menu(){
        $categories = Category::with('menus')->get();
        return view('front.menu',compact('categories'));
    }
    public function joinUs(){
        $joins=join::all();
        $benefits=Plan::all();
        return view('front.joinUs',compact('joins','benefits'));
    }

    public function jobs(){
        $jobs=Job::all();
        return view('front.jobs',compact('jobs'));
    }
}
