@extends('frontLayouts.main')
@section('title', 'BlogCard')
@section('content')



    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>Blogs</h1> </div>
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
                                <a href="blog.html" class="d-block"> <img src="{{asset('storage/'.$blog->image)}}" alt="image"> </a>
                            </div>
                            <div class="content">
                                <h3><a href="blog.html">{{$blog->title}}</a></h3>
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



@endsection
