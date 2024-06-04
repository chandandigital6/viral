
@extends('frontLayouts.main', ['seos' => $seos])
@section('title', 'Team ')
@section('content')



    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>Our Team</h1> </div>
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


    <section class="team-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-box"> <img src="{{asset('asset/img/team-img003.jpg')}}" alt="Taylor Sopia">
                        <div class="content">
                            <h3>Taylor Sopia</h3> <span>Web Designer</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-box"> <img src="{{asset('asset/img/team-img004.jpg')}}" alt="Harry Steve">
                        <div class="content">
                            <h3>Harry Steve</h3> <span>Web Developer</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-box"> <img src="{{asset('asset/img/team-img001.jpg')}}" alt="James Anderson">
                        <div class="content">
                            <h3>James Anderson</h3> <span>CEO</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-box"> <img src="{{asset('asset/img/team-img002.jpg')}}" alt="Sarah Taylor">
                        <div class="content">
                            <h3>Sarah Taylor</h3> <span>Marketing Lead</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-box"> <img src="{{asset('asset/img/team-img007.jpg')}}" alt="Pam York">
                        <div class="content">
                            <h3>Pam York</h3> <span>Web Designer</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-box"> <img src="{{asset('asset/img/team-img008.jpg')}}" alt="Joy Anthm">
                        <div class="content">
                            <h3>Joy Anthm</h3> <span>Web Developer</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-box"> <img src="{{asset('asset/img/team-img005.jpg')}}" alt="Alina Smith">
                        <div class="content">
                            <h3>Alina Smith</h3> <span>Advisor</span> </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-team-box"> <img src="{{asset('asset/img/team-img006.jpg')}}" alt="David Warner">
                        <div class="content">
                            <h3>David Warner</h3> <span>Support</span> </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="cta-area cta-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-9">
                    <div class="fact">
                        <h3>Do you need SEO & Digital Marketing Services</h3> </div>
                </div>
                <div class="col-lg-3">
                    <div class="fact txtbTTn"> <a href="contact-us" class="default-btn2 bttn-D">Contact Us</a> </div>
                </div>
            </div>
        </div>
    </div>



@endsection
