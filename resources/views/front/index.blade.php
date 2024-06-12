@extends('frontLayouts.main', ['seos' => $seos])
@section('title', 'Home ')
@section('content')
    <section id="heropart">
        <div class="herobg">
            <svg class="h-triangle" width="1111px" height="354px" viewBox="0 0 1111 354">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(0.000000, -345.000000)" opacity="0.05">
                    <g transform="translate(0.000000, -120.000000)">
                        <path stroke="#979797" stroke-width="1" fill="#fff" d="M0.5,465.670355 L0.5,818.5 L1110.5,818.5 L1110.5,817.34497 L0.5,465.670355 Z"></path>
                    </g>
                </g>
            </svg>
            <svg class="v-quadrilateral" width="283px" height="701px" viewBox="0 0 283 701">
                <defs>
                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="v-gradient">
                        <stop stop-color="#18234C" offset="0%" stop-opacity="0.05"></stop>
                        <stop stop-color="#fff" offset="100%" stop-opacity="0.05"></stop>
                    </linearGradient>
                </defs>
                <g stroke="none" stroke-width="1" fill="url(#v-gradient)" fill-rule="evenodd" transform="translate(-1157.000000, 0.000000)">
                    <g transform="translate(0.000000, -1.000000)">
                        <path d="M1156.99482,702 L1356.76184,1 L1440,1 L1440,702 L1156.99482,702 Z"></path>
                    </g>
                </g>
            </svg>
            <div class="container">
                <div class="alltxt-hero">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 set-padd">
                            <div class="banner-content">
                                <span class="sub-title">Top-notch Digital Marketing Agency</span>
                                <h1>We Help Our Clients
                                    <br>Get More <span class="txt-rotate" data-period="1500" data-rotate='["Traffic", "Leads","Revenue","Customers"]'></span>
                                </h1>
                                <p>We’re a Digital Marketing Agency, known for our no-nonsense approach. Just straight talking and smart thinking, delivered by people who care about your business.</p>
                            </div>
                            <div class="btn-box">
                                <a href="contact-us.html" target="_blank" class="default-btn bttn-G">Contact Us</a>
                                <a href="tel:+91-98766-66605" class="default-btn2 bttn-D">Request a Call</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Banner Area -->
    <section id="branding-media" class="bg-Branding">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="brand-stars">
                        <a href="https://www.trustpilot.com/review/viralbusinessgroup.com">
                            <img src="{{ asset('asset/img/trust.png') }}" alt="Trustpilot">
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="brand-stars">
                        <a href="https://www.sitejabber.com/reviews/viralbusinessgroup.com">
                            <img src="{{ asset('asset/img/sitejabber.png') }}" alt="Sitejabber">
                        </a>
                    </div>
                </div>
                <div class="col-4">
                    <div class="brand-stars">
                        <a href="https://g.page/viralbusinessgroup?gm">
                            <img src="{{ asset('asset/img/googleshop.png') }}" alt="Google Shop">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section class="about-area pb-100 pb-1001">
        <div class="container-fluid">
            @foreach($about as $aboutUs)
                <div class="row align-items-center">
                    <div class="col-lg-6 col-md-12">
                        <div class="about-img">
                            <img src="{{ asset('storage/' . $aboutUs->image) }}" alt="Digital Marketing Growth">
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-12">
                        <div class="about-content">
                            <div class="text">
                                <span class="sub-title">{{ $aboutUs->title }}</span>
                                <h2>{{ $aboutUs->heading }}</h2>
                                <p>{!! $aboutUs->description !!}</p>
                                <a href="{{ route('about') }}" class="default-btn">More About Us</a>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="shape15">
            <img src="{{ asset('asset/img/shape/shape15.png') }}" alt="shape15">
        </div>
    </section>
    <!-- End About Area -->
    <!-- Start Services Area -->
    <section class="services-area bg-f9f9f9 pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Services</span>
                <h2>What We Offer?</h2>
                <p>These are the categories that we have expertise in. We constantly add more services to our arsenal.</p>
            </div>
            <div class="row service-wrapper">
                @foreach($services as $service)
                    <div class="col-md-4 text-center">
                        <div class="tw-service-box">
                            <div class="service-icon service-icon-bg d-table">
                                <div class="service-icon-inner d-table-cell">
                                    <img width="100" height="103" src="{{ asset('storage/' . $service->image) }}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="{{ $service->title }}">
                                </div>
                            </div>
                            <div class="service-content">
                                <h3>{{ $service->title }}</h3>
                                <p>{!! $service->short_description !!}</p>
                                <div class="hovereffect">
                                    <span>
                                        <a href="{{ route('serviceDetails', $service->id) }}" class="tw-readmore">Read More <i class="fa fa-angle-right"></i></a>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- End Services Area -->
    <!-- Start What We Do Area -->
    <section class="what-we-do-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="what-we-do-content">
                        <h2>Guaranteed Success When You Choose Viral Business</h2>
                        <p>Viral Business is a result-oriented company with the primary focus of delivering exceptional services at competitive prices. We value money and make sure that no client leaves with less than satisfactory results. We go the extra mile to keep our clients happy.</p>
                        <div class="skills-item">
                            <div class="skills-header">
                                <h4 class="skills-title">Digital Marketing</h4>
                                <div class="skills-percentage">
                                    <div class="count-box">95%</div>
                                </div>
                            </div>
                            <div class="skills-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="95"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skills-item">
                            <div class="skills-header">
                                <h4 class="skills-title">Social Media Marketing</h4>
                                <div class="skills-percentage">
                                    <div class="count-box">85%</div>
                                </div>
                            </div>
                            <div class="skills-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="85"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skills-item">
                            <div class="skills-header">
                                <h4 class="skills-title">Website Design</h4>
                                <div class="skills-percentage">
                                    <div class="count-box">80%</div>
                                </div>
                            </div>
                            <div class="skills-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skills-item">
                            <div class="skills-header">
                                <h4 class="skills-title">Video Marketing</h4>
                                <div class="skills-percentage">
                                    <div class="count-box">90%</div>
                                </div>
                            </div>
                            <div class="skills-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="90"></div>
                                </div>
                            </div>
                        </div>
                        <a href="{{ route('contact') }}" class="default-btn">Contact Us</a>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="what-we-do-image">
                        <img src="{{ asset('asset/img/what-we-do.jpg') }}" alt="what-we-do-image">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What We Do Area -->
{{--@endsection--}}

<!-- Start Feedback Area -->
{{--    <section class="feedback-area ptb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-6 col-md-12">--}}
{{--                    <div class="feedback-content">--}}
{{--                        <span class="sub-title">Feedback</span>--}}
{{--                        <h2>What Our Clients Are Saying?</h2>--}}
{{--                        <p>We let our clients speak about us</p>--}}
{{--                        <p>It's very easy to describe how emerging & wonderful we are, but we think it's better to let our esteemed clients do the talking. After all, they probably judge us from our services & working style. Don't take our word & hear some of the key things our trustworthy clients say after working with us.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12">--}}
{{--                    <div class="feedback-slides owl-carousel owl-theme">--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user1.jpg')}}" alt="John Smith">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>John Smith</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>Viral Business consistently exceeds our expectations. Not only are they extremely knowledgeable but you can't beat the passion that these folks have for the work they do. They will always be our first choice when it comes to our digital needs.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user2.jpg')}}" alt="Sarah Taylor">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Sarah Taylor</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>Likewise, the installment modes, procedure and conveyance procedure can be adjusted to coordinate with the modifying needs and arrangements of our benefactors.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user7.jpg')}}" alt="Aace">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Aace</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>Internet Marketing Services For Todays Digital Landscape We partner with brands to grow visibility, website traffic, and achieve higher search engine rankings through our mix internet marketing services.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user8.jpg')}}" alt="Shane Jacobs">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Shane Jacobs</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>Thank you, Viral Business, for designing my professional business website. Their experienced team really worked hard and produce high-quality results in terms of great UI design and well-structured coding structure.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user6.jpg')}}" alt="Michelle">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Michelle</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>I’m pleased with the overall services of Viral Business; they build a cost-effective marketing strategy for my small business. The marketing team of Viral Business is very supportive & solve every query efficiently.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user4.jpg')}}" alt="Drew">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Drew</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>Working with Viral Business is amazing for our company, they set up a high-quality social media marketing strategy that effectively improves my sales, revenue, customer reach, and more importantly my brand awareness on social media platforms.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user5.jpg')}}" alt="Laecy">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Laecy</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>These guys are trusted and highly talented. They provide budget-friendly local SEO services for my business. Their expertise always thinks creatively & out of the box. No doubt, their work is appreciated. Strongly recommended.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user9.jpg')}}" alt="Kevin">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Kevin</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>As a startup, you need a reliant digital marketing agency that delivers 100% genuine results. Viral Business is one of them, a brand of trust & success. Business tracking becomes easy with their great marketing tactics.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="shape16">--}}
{{--            <img src="{{asset('asset/img/shape/shape16.png')}}" alt="shape16">--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Feedback Area -->
<!-- End Team Area -->
<div class="viral-content">
    @foreach($homeContents as $homeSection)
        <div class="container">
            <div class="contentPART">
                <h2>{{$homeSection->title}}</h2>
                <p>{{$homeSection->sort_msg}}</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-content">
                        {!! $homeSection->content_1 !!}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-content">
                        {!! $homeSection->content_2 !!}
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>

<!-- Start Project Start Area -->
<section class="project-start-area ptb-100">
    @foreach($homeProjects as $homeProject)
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="project-start-image">
                        <img src="{{asset('storage/'.$homeProject->image)}}" alt="Digital Marketing Agency">
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="project-start-content">
                        <span class="sub-title">{{$homeProject->title}}</span>
                        <h2>{{$homeProject->heading}}</h2>
                        <p>{!! $homeProject->msg !!}</p>
                        <a href="{{route('contact')}}" class="default-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
    <div class="shape2"><img src="{{asset('asset/img/shape/shape2.png')}}" alt="shape2"></div>
    <div class="shape3"><img src="{{asset('asset/img/shape/shape3.png')}}" alt="shape3"></div>
    <div class="shape5"><img src="{{asset('asset/img/shape/shape5.png')}}" alt="shape5"></div>
    <div class="shape6"><img src="{{asset('asset/img/shape/shape6.png')}}" alt="shape6"></div>
    <div class="shape7"><img src="{{asset('asset/img/shape/shape7.png')}}" alt="shape7"></div>
    <div class="shape13"><img src="{{asset('asset/img/shape/shape13.png')}}" alt="shape13"></div>
</section>
<!-- End Project Start Area -->

<!-- Start Blog Area -->
<section class="blog-area bg-f9f9f9 pt-100 pb-70">
    <div class="container">
        <div class="section-title">
            <span class="sub-title">Our Blog</span>
            <h2>Our Latest Media</h2>
            <p>Our campaigns get your business in front of the right people at the right time to increase organic traffic and boost engagement.</p>
        </div>
        <div class="row">
            @foreach($blogs as $blog)
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="image">
                            <a href="blog.html" class="d-block"><img src="{{asset('storage/'.$blog->image)}}" alt="image"></a>
                        </div>
                        <div class="content">
                            <h3><a href="{{route('blogCard')}}">{{$blog->title}}</a></h3>
                            <p>{{$blog->short_description}}</p>
                            <div class="d-flex align-items-center">
                                <img src="{{asset('storage/'.$blog->user_image)}}" alt="image">
                                <div class="info">
                                    <h5>{{$blog->author_name}}</h5>
                                    <span>{{$blog->post_date}}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
<!-- End Blog Area -->

<section class="tabbed-set">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="tile" id="tile-1">
                    <ul class="nav nav-tabs nav-justified" role="tablist">
                        @foreach($categories as $index => $category)
                            <li class="nav-item">
                                <a class="nav-link @if($index === 0) active @endif" id="tab-{{ $category->id }}" data-toggle="tab" href="#content-{{ $category->id }}" role="tab" aria-controls="content-{{ $category->id }}" aria-selected="@if($index === 0) true @endif">{{ $category->name }}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="col-lg-9">
                <div class="navList-TXT">
                    <div class="tab-content">
                        @foreach($categories as $index => $category)
                            <div class="tab-pane fade @if($index === 0) show active @endif" id="content-{{ $category->id }}" role="tabpanel" aria-labelledby="tab-{{ $category->id }}">
                                @if($category->menus->count())
                                    <ul>
                                        @foreach($category->menus as $menu)
                                            <li>{!! $menu->heading !!}</li>
                                        @endforeach
                                    </ul>
                                @else
                                    <p>No menus available for this category.</p>
                                @endif
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Start FAQ Area -->
<section id="FAQ" class="spacer">
    <div class="container">
        <h2 class="faqTitle"><span>Frequently Asked Questions</span></h2>
        <div id="faq" class="faq-body">
            <div class="faq-header">
                <div class="faq-list">
                    @foreach($faqs as $faq)
                        <div>
                            <details open>
                                <summary title="{{$faq->question}}">{{$faq->question}}</summary>
                                <p class="faq-content">{{$faq->answer}}</p>
                            </details>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</section>
<!-- End FAQ Area -->

<section class="ourClients ptb-100">
    @foreach($logos as $logo)
        <div class="container">
            <div class="benifitsTitle clientSET">
                <h2>{{$logo->title}}</h2>
                <p class="pragrahTXT">{!! $logo->msg !!}</p>
            </div>
            <div class="row">
                @if (is_string($logo->image) && !empty($logo->image))
                    @php
                        $imagePaths = explode(',', $logo->image);
                    @endphp
                    @foreach($imagePaths as $imagePath)
                        <div class="col-lg-2">
                            <div class="clientPhotos">
                                <a href="javascript:void(0)"><img src="{{ asset('storage/'.$imagePath) }}" alt="lo1"></a>
                            </div>
                        </div>
                    @endforeach
                @endif
            </div>
        </div>
    @endforeach
</section>
<div class="clear"></div>


@endsection
