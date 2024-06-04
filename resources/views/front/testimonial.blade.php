@extends('frontLayouts.main', ['seos' => $seos])
@section('title', 'Testimonial')
@section('content')



    <!-- Start Page Title Area -->
    <section class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h1>Client Reviews</h1> </div>
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
    <section class="row service-about5">
        <div class="container">

            <div class="row">
    @foreach($testimonials as $testimonial)


                <div class="col-md-4 col-lg-4">
                    <div class="item">

                        <div class="review-photo"> <img src="{{asset('storage/'.$testimonial->image)}}"> </div>

                        <div class="single-testimonial white-bg whiteheight shadow-sm rounded p-5 pgreview">
                            <div class="ratting-content"> <img src="{{asset('asset/img/inverted-commas.png')}}">
                                <p>
                                {{$testimonial->msg}}
                                </p>
                            </div>
                            <div class="ratting-author mt-3">
                                <h6>{{$testimonial->name}}</h6> </div>
                            <ul class="list-inline ratting-list mb-2">
                                <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                                <li class="list-inline-item"><i class="fa fa-star" aria-hidden="true"></i></li>
                            </ul>
                        </div>
                    </div>
                </div>

                @endforeach

            </div>
        </div>
    </section>
    <!-- Start Services Area -->
    <div class="clear"></div>
    <!-- End FAQ Area -->


@endsection
