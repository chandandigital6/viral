
@extends('frontLayouts.main')
@section('title', 'jobs ')
@section('content')



    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>Job</h1> </div>
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


    <section id="jobTXT" class="ptb-100">
        <div class="container">
            <div class="contentPART">
                <h2 class="job-look">Opportunities You are Looking For</h2>
                <p>Having an expert team in the company is necessary because they are the heart & soul of any organization. Without a great team, the office is like a Recipe without spices. Having a great team in an organization enhances the company’s profile, profits as well as success. At Viral Business, you’ll witness one of the amazing & experienced teams that upgrade the success of an organization.</p>
                <p>If you’re seeking a job or want to build a career in website designing-development & software development, then need to contact Viral Business. We offer top-rated services such as website development, SEO, software developer, and Content writing. We offer jobs for both freshers and experienced individuals. Those individuals who want to establish or pursue their career in technical writing or SEO writing, then they need to check out & apply for jobs for content writers as well as academic writer profiles at Viral Business.</p>
                <p>No bars for deserving candidates & extensive Salary Hike.</p>
            </div>
        </div>
    </section>

    <section id="fAq2">
        <div class="select-job">
            <h2>Apply Now & Shape your career with new skills &training sessions.</h2>
            <div class="container">
                <div class="alldata-Job">
                    @foreach($jobs as $job)


                    <div class="row">
                        <div class="col-1">
                            <div class="jobData">
                                <img src="{{asset('storage/'.$job->image)}}">
                            </div>
                        </div>
                        <div class="col-11">
                            <div class="contentJob faq-list">
                                <details open>
                                    <summary title="Academic Writer">
                                        <h3>{{$job->title}}</h3></summary>
                                    <p class="faq-content"> {!! $job->qualification !!}
                                        <br> {!! $job->skill !!}
                                        <br><span><i class="fa fa-map-marker" aria-hidden="true">{{$job->location}}</i></span> <span><i class="fa fa-envelope" aria-hidden="true"></i></i> {{$job->info}}</span></p>
                                </details>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section id="job-ending" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="jobPhoto"> <img src="{{asset('asset/img/study-job.jpg')}}" alt="study job"> </div>
                </div>
                <div class="col-8">
                    <div class="job-explan">
                        <h3>We Are Looking For</h3>
                        <p>Being an emerging brand in the IT industry we offer budget-friendly digital marketing solutions within the estimated time. We give more importance to our customers because customers are god. Our prime objective is to provide the best possible services to our esteemed clients at a reasonable price list. We follow professional strategies to deliver high-quality results. Our 24x7 availability & better customer dealing make us the perfect choice for our trustworthy clients.</p>
                        <p>To enhance our team.</p>
                        <p>We are looking for professional candidates that are suitable for the designations of Content writer, SEO, PHP developer, Web designer, Social media executive, Marketing executive & Android developer. Don't hesitate to join our team & boost your knowledge and profile.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>


@endsection
