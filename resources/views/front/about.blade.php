
@extends('frontLayouts.main', ['seos' => $seos])
@section('title', 'About')
@section('content')



    <!-- Start Page Title Area -->

    <section class="page-title-area page-title-style-two">

        <div class="container">

            <div class="page-title-content">

                <h1>About Us</h1>

            </div>

        </div>



        <div class="shape2"><img src="{{asset('asset/img/shape/shape2.png')}}" alt="image"></div>

        <div class="shape3"><img src="{{asset('asset/img/shape/shape3.png')}}" alt="image"></div>

        <div class="shape5"><img src="{{asset('asset/img/shape/shape5.png')}}" alt="image"></div>

        <div class="shape6"><img src="{{asset('asset/img/shape/shape6.png')}}" alt="image"></div>

        <div class="shape7"><img src="{{asset('asset/img/shape/shape7.png')}}" alt="image"></div>

        <div class="shape8"><img src="{{asset('asset/img/shape/shape8.png')}}" alt="image"></div>

        <div class="lines">

            <div class="line"></div>

            <div class="line"></div>

            <div class="line"></div>

        </div>

    </section>

    <!-- End Page Title Area -->



    <!-- Start About Area -->

    <section class="about-area ptb-100">

        <div class="container-fluid">

            @foreach($about as $aboutUs)

            <div class="row align-items-center">

                <div class="col-lg-6 col-md-12">

                    <div class="about-img">

                        <img src="{{asset('storage/'.$aboutUs->image)}}" alt="image">

                    </div>

                </div>



                <div class="col-lg-6 col-md-12">

                    <div class="about-content">

                        <div class="text">

                            <span class="sub-title">{{$aboutUs->title}}</span>

                            <h2>{{$aboutUs->heading}}</h2>

                            <p>{!! $aboutUs->description !!}</p>
                            <ul class="features-list">
                                <li><i class="flaticon-speed"></i>{{$aboutUs->fe_1}}</li>

                                <li><i class="flaticon-speed"></i>{{$aboutUs->fe_2}}</li>

                                <li><i class="flaticon-speed"></i>{{$aboutUs->fe_3}}</li>

                            </ul>

                        </div>

                    </div>

                </div>

            </div>


            @endforeach
        </div>

    </section>

    <!-- End About Area -->



    <!-- Start History Area -->

    <section class="history-area ptb-100 bg-f9f9f9">

        <div class="container">

            <div class="section-title">

                <span class="sub-title">Our History</span>

                <h2>History Begins In 2010</h2>

            </div>


          @foreach($about as $boutHistory)


            <ol class="timeline history-timeline">

                <li class="timeline-block">

                    <div class="timeline-date">

                        <span>2010</span>

                        February 20

                        <sup>th</sup>

                    </div>



                    <div class="timeline-icon">

                        <span class="dot-badge"></span>

                    </div>



                    <div class="timeline-content">

                        <div class="row align-items-center">

                            <div class="col-lg-7 col-md-12">

                                <div class="content">

                                    <h3>Founded</h3>

                                    <p>{!! $boutHistory->founded !!} </p>

                                </div>

                            </div>



                            <div class="col-lg-5 col-md-12">

                                <div class="image">

                                    <img src="{{asset('storage/'.$boutHistory->founded_image)}}" alt="Viral Business Ludhiana ">

                                </div>

                            </div>

                        </div>

                    </div>

                </li>



                <li class="timeline-block">

                    <div class="timeline-date">

                        <span>2013</span>

                        January 14

                        <sup>th</sup>

                    </div>



                    <div class="timeline-icon">

                        <span class="dot-badge"></span>

                    </div>



                    <div class="timeline-content">

                        <div class="row align-items-center">

                            <div class="col-lg-7 col-md-12">

                                <div class="content">

                                    <h3>Global Success</h3>

                                    <p>
                                        {!! $boutHistory->g_success !!}

                                    </p>

                                </div>

                            </div>



                            <div class="col-lg-5 col-md-12">

                                <div class="image">

                                    <img src="{{asset('storage/'.$boutHistory->g_success_image)}}" alt="Viral Business Ludhiana (2)">

                                </div>

                            </div>

                        </div>

                    </div>

                </li>



                <li class="timeline-block">

                    <div class="timeline-date">

                        <span>2016</span>

                        March 25

                        <sup>th</sup>

                    </div>



                    <div class="timeline-icon">

                        <span class="dot-badge"></span>

                    </div>



                    <div class="timeline-content">

                        <div class="row align-items-center">

                            <div class="col-lg-7 col-md-12">

                                <div class="content">

                                    <h3>Founded Data Office</h3>

                                    <p>{!! $boutHistory->founded_data_office !!}</p>

                                </div>

                            </div>



                            <div class="col-lg-5 col-md-12">

                                <div class="image">

                                    <img src="{{asset('storage/'.$boutHistory->founded_data_office_image)}}" alt="image">

                                </div>

                            </div>

                        </div>

                    </div>

                </li>



                <li class="timeline-block">

                    <div class="timeline-date">

                        <span>2020</span>

                        December 10

                        <sup>th</sup>

                    </div>



                    <div class="timeline-icon">

                        <span class="dot-badge"></span>

                    </div>



                    <div class="timeline-content">

                        <div class="row align-items-center">

                            <div class="col-lg-7 col-md-12">

                                <div class="content">

                                    <h3>International Award</h3>

                                    <p>{!! $boutHistory->international_award !!}</p>

                                </div>

                            </div>



                            <div class="col-lg-5 col-md-12">

                                <div class="image">

                                    <img src="{{asset('storage/'.$boutHistory->international_award_image)}}" alt="Viral Business Ludhiana">

                                </div>

                            </div>

                        </div>

                    </div>

                </li>

            </ol>
            @endforeach
        </div>

    </section>

    <!-- End History Area -->



    <!-- Start Team Area -->

    <section id="about" class="ptb-100">
        <div class="container">
            @foreach($choose as $chooses)


            <div class="contentPART">
                <h2>{{$chooses->title}}</h2>
            </div>
            @endforeach

                @foreach($choose as $chooseData)
                    <div class="row">
                        <div class="col-lg-6 col-sm-6">
                            <ul class="about-list">
                                <li>
                                    <div class="about-icon">
                                        <i class="icofont icofont-tick-mark"></i>
                                    </div>
                                    <p>{!! $chooseData->msg !!}</p>
                                </li>
                            </ul>
                        </div>
                        <div class="col-lg-6 col-sm-6">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="about-img">
                                        <img src="{{ asset('storage/' . $chooseData->image) }}" alt="" class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

        </div>
    </section>

    <div class="cta-area cta-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="fact">
                        <h3>You have browsed our website and want to take our service but don’t know where to begin from?</h3>
                        <p>Do not worry, because we are available 24x7 to clear all your doubts.</p>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="fact txtbTTn">
                        <a href="{{route('contact')}}" class="default-btn2 bttn-D">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- End Feedback Area -->

    <section class="team-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                @foreach($teams->take(2) as $team)
                <div class="col-lg-3 col-md-6 col-sm-6">



                    <div class="single-team-box">
                        <img src="{{asset('storage/'.$team->image)}}" alt="team-image">

                        <div class="content">
                            <h3>{{$team->name}}</h3>
                            <span>{{$team->title}}</span>
                        </div>
                    </div>

                </div>
                @endforeach


                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="section-title">
                        <span class="sub-title">Our Team</span>
                        <h2>We Help to Acheive Your Business Goal</h2>
                        <a href="{{route('team')}}" class="learn-more-btn"><i class="left-icon flaticon-next-button"></i> View All <i class="right-icon flaticon-next-button"></i></a>
                    </div>
                </div>
                    @foreach($teams->slice(2) as $team)
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-box">
                        <img src="{{asset('storage/'.$team->image)}}" alt="team-image">

                        <div class="content">
                            <h3>{{$team->name}}</h3>
                            <span>{{$team->title}}</span>
                        </div>
                    </div>
                </div>
                    @endforeach




            </div>
        </div>
    </section>


@endsection
