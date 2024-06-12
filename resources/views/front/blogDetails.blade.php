@extends('frontLayouts.main', ['seos' => $seos])
@section('title', 'BlogCard')
@section('content')



    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>{{$serviceDetail->service->category}}</h1> </div>
        </div>
        <div class="shape2"><img src="{{asset('asset/img/shape/shape2.png')}}" alt="shape2"></div>
        <div class="shape3"><img src="{{asset('asset/img/shape/shape3.png')}}" alt="shape3"></div>
        <div class="shape5"><img src="{{asset('asset/img/shape/shape5.png')}}" alt="shape5"></div>
        <div class="shape6"><img src="{{asset('asset/img/shape/shape6.png')}}" alt="shape6"></div>
        <div class="shape7"><img src="{{asset('asset/img/shape/shape7.png')}}" alt="shape7"></div>
        <div class="shape8"><img src="{{asset('asset/img/shape/shape8.png')}}" alt="shape8"></div>
        <div class="lines">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </section>
    <!-- End Page Title Area -->

    <!-- Start SEO Analysis Area -->
    <section class="row service-about5 bottomspace">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-6 img-holder"> <img src="{{asset('storage/'.$serviceDetail->image)}}" alt="SEO"> </div>
                <div class="col-md-6 col-md-pull-6 text-holder">
                    <div class="row sectionTitle text-left">
                        <h2 class="this-title">{{$serviceDetail->title}}</h2>
                        <p></p>
                    </div>
                    <p class="this-p">{{$serviceDetail->description}}</p>

                        <ul class="this-features list-unstyled">
                            @if($serviceDetail->f1_msg)
                                <li><span class="icon-holder"><img src="{{asset('storage/'.$serviceDetail->f1_image)}}" alt="Perfect Design"></span>{{$serviceDetail->f1_msg}}</li>
                            @endif
                            @if($serviceDetail->f2_msg)
                                <li><span class="icon-holder"><img src="{{asset('storage/'.$serviceDetail->f2_image)}}" alt="Perfect Design"></span>{{$serviceDetail->f2_msg}}</li>
                            @endif
                            @if($serviceDetail->f3_msg)
                                <li><span class="icon-holder"><img src="{{asset('storage/'.$serviceDetail->f3_image)}}" alt="Perfect Design"></span>{{$serviceDetail->f3_msg}}</li>
                            @endif
                            @if($serviceDetail->f4_msg)
                                <li><span class="icon-holder"><img src="{{asset('storage/'.$serviceDetail->f4_image)}}" alt="Perfect Design"></span>{{$serviceDetail->f4_msg}}</li>
                            @endif
                            @if($serviceDetail->f5_msg)
                                <li><span class="icon-holder"><img src="{{asset('storage/'.$serviceDetail->f5_image)}}" alt="Perfect Design"></span>{{$serviceDetail->f5_msg}}</li>
                            @endif
                        </ul>



                </div>
            </div>
        </div>
    </section>
    <!-- Start Services Area -->
    <section class="services-area bg-f9f9f9 topspace pb-70">
        <div class="container">
            <div class="section-title"> <span class="sub-title">{{$serviceDetail->title_1}}</span>
                <h2>{{$serviceDetail->heading}}</h2>
                <p>{{$serviceDetail->short_description}}</p>
            </div>
            <div class="row">
                @foreach($serviceBenefits as $serviceBenefit)
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="{{asset('asset/img/004.png')}}" alt="Traffic"> </div>
                        <h3>More Traffic</h3>
                        <p>As you gain more visibility, you will start to see an increase in the number of website visitors.</p>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>
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
    <section id="video-Part" class="ptb-100">
        <div class="container">
            @foreach($serviceVideo as $serviceVideos)

            <div class="row">
                <div class="col-sm-6">
                    <div class="video-image">
                        <a href="{{$serviceVideos->url}}"><img src="{{asset('storage/'.$serviceVideos->image)}}" alt="viral video"></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="video-TXT">
                        <h2 class="this-title">{{$serviceVideos->title}}</h2>
                        <p>{!! $serviceVideos->sort_msg !!}</p>
                        <ul>
                            <li><i class="{{$serviceVideos->f1_icon}}" aria-hidden="true"></i>{{$serviceVideos->f1_msg}}</li>
                            <li><i class="{{$serviceVideos->f2_icon}}" aria-hidden="true"></i>{{$serviceVideos->f2_msg}}</li>
                            <li><i class="{{$serviceVideos->f3_icon}}" aria-hidden="true"></i>{{$serviceVideos->f3_msg}}</li>
                        </ul> <a href="{{$serviceVideos->url}}" target="_blank" class="default-btn">Click Now</a> </div>
                </div>
            </div>

            @endforeach
        </div>
    </section>
    <!-- End Services Area -->
    <section class="fun-fact style2">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-md-8 fun-fact style2">
                    <div class="fact">
                        <h3>Ready to speak with a marketing expert?</h3>
                        <p>Give us a ring at- +91 98766-66605</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 fun-fact style2">
                    <div class="fact txtbTTn"> <a href="{{route('contact')}}" class="default-btn2 bttn-D">Contact Us</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start FAQ Area -->
    <section class="faq-area pt-100 pb-70 bott-paDD">
        @foreach($serviceContent as $serviceData)
        <div class="container">


            <div class="section-title"> <span class="sub-title">{{$serviceData->title}}</span>
                <h2>{{$serviceData->heading}}</h2>
                <p>{!! $serviceData->sort_msg !!} </p>
            </div>

{{--            @endforeach--}}
{{--                @foreach($serviceContent as $serviceCont)--}}
            <div class="row">
                <div class="col-lg-6 col-md-6">



                    <div class="service-content">
                        {!! $serviceData->content_1 !!}
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-content">
                        {!! $serviceData->content_2 !!}
                    </div>
                </div>
            </div>

        </div>
        @endforeach
    </section>


    <section id="FAQ" class="spacer">
        <div class="container">
            <h2 class="faqTitle">Frequently Asked Questions</h2>
            <div id="faq" class="faq-body">
                <div class="faq-header">
                    <div class="faq-list">
                        @foreach($serviceFaqs as $faq)
                            <div>
                                <details open>
                                    <summary title="{{$faq->question}}">{{$faq->question}}</summary>
                                    <p class="faq-content">{!! $faq->answer !!}</p>
                                </details>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clear">

    </div>
    <!-- End FAQ Area -->




@endsection
