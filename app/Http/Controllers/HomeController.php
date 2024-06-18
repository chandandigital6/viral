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
          $seos = SEO::where('page', 'meet-talent')->get();
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
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'search-engine-optimization')->get();
//        dd($seos);
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
//        dd($services);
        return view('front.search-engine-optimization',compact('seos','services','categories'));
    }

    public function local_seo(){
        $services=Service::where('category','local_seo')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.local-seo',compact('seos','services','categories'));

    }
    public function ppc(){
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'search-engine-optimization')->get();
//        dd($seos);
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
//        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.ppc',compact('seos','services','categories'));

    }

    public function Conversion_Rate_Optimization(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();

        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.conversion_rate',compact('seos'));

    }

    public function social_media_marketing(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.social_media_marketing',compact('seos'));

    }

    public function social_brand_marketing(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.social_brand_marketing',compact('seos'));

    }

    public function online_reputation_management(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.online_reputation_management',compact('seos'));

    }


    public function Social_Media_Paid_Advertising(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.Social_Media_Paid_Advertising',compact('seos'));

    }


    public function custom_website(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.custom_website',compact('seos'));

    }

    public function content_writing(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.content_writing',compact('seos'));

    }

    public function content_marketing(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.content_marketing',compact('seos'));

    }

    public function email_marketing(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.email_marketing',compact('seos'));

    }

    public function youTube_marketing(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.youTube_marketing',compact('seos'));

    }


    public function youTube_Monetization(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.youTube_Monetization',compact('seos'));

    }

    public function video_production(){
        $services=Service::where('category','marketing')->with('details','benefits','faqs','content','video')->firstOrFail();
        $categories = Category::with('menus')->get();
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.video_production',compact('seos'));

    }


    public function portfolio(){
        $seos = SEO::where('page', 'local-seo')->get();
        return view('front.portfolio',compact('seos'));
    }

}
