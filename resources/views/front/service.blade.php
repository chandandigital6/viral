@extends('frontLayouts.main', ['seos' => $seos])
@section('title', 'Services')
@section('content')

    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>Our Services</h1> </div>
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


@endsection
