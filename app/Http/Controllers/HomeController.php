<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\Banner;
use App\Models\Blog;
use App\Models\Category;
use App\Models\choze;
use App\Models\ClientLogo;
use App\Models\Counter;
use App\Models\Faq;
use App\Models\HomeProject;
use App\Models\HomeSection;
use App\Models\Job;
use App\Models\join;
use App\Models\Menu;
use App\Models\Plan;
use App\Models\SEO;
use App\Models\Service;
use App\Models\ServiceBenefit;
use App\Models\ServiceContent;
use App\Models\ServiceDetail;
use App\Models\ServiceVideo;
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
        $logos=ClientLogo::all();
//        dd($faqs);
        $homeContents=HomeSection::all();
        $homeProjects=HomeProject::all();
        $seos = SEO::where('page', 'index')->get();
        return view('front.index',compact('homeProjects','homeContents','logos','seos','banner','categories','faqs','counters','blogs','about','services','plans','testimonials','teams'));
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
    public function blogDetails($service) {
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'blogDetail')->get();
        $serviceDetail = ServiceDetail::with('service')->findOrFail($service);

        $serviceBenefits = ServiceBenefit::with('service')->where('service_id', $service)->get();
        $serviceFaqs = Faq::with('service')->where('service_id', $service)->get();
        $serviceContent = ServiceContent::with('service')->where('service_id', $service)->get();
        $serviceVideo = ServiceVideo::with('service')->where('service_id', $service)->get();

        return view('front.blogDetails', compact('categories', 'serviceDetail', 'seos', 'serviceBenefits', 'serviceFaqs','serviceContent','serviceVideo'));
    }


    public function menu(){
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'menu')->get();
        return view('front.menu',compact('categories', 'seos'));
    }
//    public function joinUs(){
//
//        $seos = SEO::where('page', 'join-us')->get();
//        return view('front.joinUs', compact('seos'));
//    }

//    public function jobs(){
//        $seos = SEO::where('page', 'jobs')->get();
//        return view('front.jobs', compact('seos'));
//
//
//    }

    public function joinUs(){
        $joins=join::all();
        $benefits=Plan::all();
        $seos = SEO::where('page', 'join-us')->get();
        return view('front.joinUs', compact( 'benefits', 'seos','joins'));
    }

    public function jobs(){
        $jobs=Job::all();
        $seos = SEO::where('page', 'jobs')->get();
        return view('front.jobs',compact('jobs', 'seos'));

    }

    public function search_engine_optimization(){
        $seos = SEO::where('page', 'search-engine-optimization')->get();
        return view('front.search-engine-optimization',compact('seos'));
    }

    public function local_seo(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.local-seo',compact('seos'));

    }
    public function ppc(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.ppc',compact('seos'));

    }

    public function Conversion_Rate_Optimization(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.conversion_rate',compact('seos'));

    }

    public function social_media_marketing(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.social_media_marketing',compact('seos'));

    }

    public function social_brand_marketing(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.social_brand_marketing',compact('seos'));

    }

    public function online_reputation_management(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.online_reputation_management',compact('seos'));

    }


    public function Social_Media_Paid_Advertising(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.Social_Media_Paid_Advertising',compact('seos'));

    }


    public function custom_website(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.custom_website',compact('seos'));

    }

    public function content_writing(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.content_writing',compact('seos'));

    }

    public function content_marketing(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.content_marketing',compact('seos'));

    }

    public function email_marketing(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.email_marketing',compact('seos'));

    }

    public function youTube_marketing(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.youTube_marketing',compact('seos'));

    }


    public function youTube_Monetization(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.youTube_Monetization',compact('seos'));

    }

    public function video_production(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.video_production',compact('seos'));

    }
}
