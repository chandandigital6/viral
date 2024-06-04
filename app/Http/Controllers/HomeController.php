<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\choze;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\Menu;
use App\Models\Plan;
use App\Models\SEO;
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
        $seos = SEO::where('page', 'index')->get();
        return view('front.index',compact('seos','banner','categories','faqs','counters','blogs','about','services','plans','testimonials','teams'));
      }
      public function about(){
          $teams=Team::all();
          $about=About::all();
          $counters=Counter::all();
          $choose=choze::all();
          $seos = SEO::where('page', 'about-us')->get();
          return view('front.about',compact('seos','about','teams' ,'choose'));
      }
      public function services(){
          $services=Service::all();
          $testimonials=Testimonial::all();
          $seos = SEO::where('page', 'services')->get();
          return view('front.service',compact('seos','services','testimonials'));
      }
      public function contact(){
          $seos = SEO::where('page', 'contact-us')->get();
          return view('front.contact', compact('seos'));
      }

      public function team(){
          $teams=Team::all();
          $seos = SEO::where('page', 'team')->get();
          return view('front.team',compact('seos', 'teams'));
      }
      public function testimonial(){
          $testimonials=Testimonial::all();
          $seos = SEO::where('page', 'testimonial')->get();

          return view('front.testimonial',compact('seos','testimonials'));
      }
      public function appointment(){
          $seos = SEO::where('page', 'appointment')->get();
          return view('front.appointment', compact('seos'));
      }

    public function blog(){
        $blogs=Blog::all();
        $seos = SEO::where('page', 'blog')->get();
        return view('front.blogCard',compact('blogs', 'seos'));
    }
    public function blogDetails(Blog $blog){
//        dd($blog);
        $categories = Blog::all();
        $seos = SEO::where('page', 'blog-details')->get();
        $recentPosts = Blog::orderBy('created_at', 'desc')->take(5)->get();
//
        // Pass the data to the view
        return view('front.blogDetails', compact('blog', 'categories', 'recentPosts', 'seos'));
    }

    public function menu(){
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'menu')->get();
        return view('front.menu',compact('categories', 'seos'));
    }
    public function joinUs(){
        $seos = SEO::where('page', 'join-us')->get();
        return view('front.joinUs', compact('seos'));
    }

    public function jobs(){
        $seos = SEO::where('page', 'jobs')->get();
        return view('front.jobs', compact('seos'));
    }
}
