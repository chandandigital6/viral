
@extends('frontLayouts.main')
@section('title', 'Team ')
@section('content')



    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>We are looking for Talent</h1> </div>
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


    <section id="secondPart" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="careersTXT"> <img src="{{asset('asset/img/Our culture.png')}}" alt="Our culture"> </div>
                </div>
                <div class="col-lg-6">
                    <div class="careersTXT benifitsTitle">
                        <h2 class="sameTXT">Our Culture</h2>
                        <p class="pragrahTXT">"People and teamwork are the driving forces behind every successful business." <b>Richard Branson</b></p>
                        <p class="pragrahTXT">Viral Business is an outstanding digital marketing agency. We are practical; we transform our clients and ourselves with each project we carry out. We offer a unique consulting service model in digital marketing, web design and development.</p> <a href="about-us.html" class="default-btn">Read More</a> </div>
                </div>
            </div>
        </div>
    </section>

    <section class="joinTeam">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="benifitsTitle">
                        <h2><span>Join</span> <br>the team!<br></h2>
                        <p>Go Brand is a firm made up of a team of communication professionals, with experience in different areas of work: strategy, digital development, advertising, design, digital marketing, mobile applications (APPs), internet and interactive media.</p>
                        <p>We search the consumers; we develop concepts and communication content to later be implemented in various types of media according to the needs and resources of our clients.</p>
                        <p>We have extensive experience in the application of the latest web technology tools in our development and marketing strategies, achieving recognition and positioning of our clients.</p>
                        <p>We offer marketing advice and develop strategies aimed at meeting objectives, managing the entire process: diagnosis, analysis, planning, conceptualization, production, execution and monitoring.</p>
                        <p>Our goal is to better understand the consumer through a methodological, systemic and psychologically based approach; to understand more clearly what they feel, how they think, what they are willing to believe and accept, in exchange for the decision to choose the product or service offered according to the needs of the businesses.</p> <a href="meet-talent.html" class="default-btn">Join Team</a> </div>
                </div>
                <div class="col-lg-6">
                    <div class="teamVector"> <img src="{{asset('asset/img/team-site.png')}}" alt="Join Our Team"></div>
                </div>
            </div>
        </div>
    </section>
    <section class="benifits">
        <div class="container">
            <div class="benifitsTitle">
                <h2>Benefits</h2>
                <p class="pragrahTXT">Excellence is rewarded at Viral Business</p>
            </div>
            <div class="row">
                <div class="col-lg-4 PADDcareer">
                    <div class="benifitsPhotos"> <img src="{{asset('asset/img/Recognization.png')}}" alt="Recognization">
                        <h3 class="sameTXT">Recognization</h3>
                        <p class="pragrahTXT">The recognization of good work and dedication of our employees is what leads to our success.</p>
                    </div>
                </div>
                <div class="col-lg-4 PADDcareer">
                    <div class="benifitsPhotos"> <img src="{{asset('asset/img/Care.png')}}" alt="Care">
                        <h3 class="sameTXT">Care</h3>
                        <p class="pragrahTXT">Our programs go further. We are driven by the health, well-being and economic prosperity of our employees around the world.</p>
                    </div>
                </div>
                <div class="col-lg-4 PADDcareer">
                    <div class="benifitsPhotos"> <img src="{{asset('asset/img/Vitality.png')}}" alt="Vitality">
                        <h3 class="sameTXT">Vitality</h3>
                        <p class="pragrahTXT">Vitality is our program designed to ensure the well-being of employees.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="benifitsPhotos"> <img src="{{asset('asset/img/Viral Business in motion.png')}}" alt="Viral Business in motion">
                        <h3 class="sameTXT">Viral Business in motion</h3>
                        <p class="pragrahTXT">We have team programs where employees from all offices perform different sporting challenges.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="benifitsPhotos"> <img src="{{asset('asset/img/Opportunities around the world.png')}}" alt="Opportunities around the world">
                        <h3 class="sameTXT">Global Opportunities</h3>
                        <p class="pragrahTXT">A career at Viral Business means you are part of something bigger.</p>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="benifitsPhotos"> <img src="{{asset('asset/img/Paid leave.png')}}" alt="Paid leave">
                        <h3 class="sameTXT">Paid leave</h3>
                        <p class="pragrahTXT">Spending time with family is important. We offer generous vacations and days off to spend with family and friends.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>



@endsection
