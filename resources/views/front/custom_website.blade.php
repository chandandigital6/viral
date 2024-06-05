
@extends('frontLayouts.main' ,['seos'=>$seos])
@section('title', 'Custom Website Design')
@section('content')



    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>Custom Website Design</h1>
            </div>
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
                <div class="col-md-6 col-md-push-6 img-holder"> <img src="assets/img/custom-web-design.png" alt="Custom Website Design"> </div>
                <div class="col-md-6 col-md-pull-6 text-holder">
                    <div class="row sectionTitle text-left">
                        <h2 class="this-title">Website Design and Development that Speaks for Itself</h2> </div>
                    <p class="this-p">Websites have become an important part for any brand or business that wants to make a name in their respective industry. Everything is getting digital in today’s world, which has made it necessary to build a medium online, which helps to generate traffic.</p>
                    <ul class="this-features list-unstyled">
                        <li><span class="icon-holder"><img src="assets/img/26.png" alt=""></span>Research</li>
                        <li><span class="icon-holder"><img src="assets/img/27.png" alt=""></span>Design</li>
                        <li><span class="icon-holder"><img src="assets/img/28.png" alt=""></span>Write</li>
                        <li><span class="icon-holder"><img src="assets/img/29.png" alt=""></span>Revise</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Services Area -->
    <section class="services-area bg-f9f9f9 topspace pb-70">
        <div class="container">
            <div class="section-title"> <span class="sub-title">A GOOD WEBSITE IS THE BASE TO BUILD YOUR BUSINESS ON.</span>
                <h2>Website Design and Development</h2>
                <p>Viral Business is a Digital Marketing company that has a professional team which has expertise in all sectors. They realize the importance of building a great looking, completely functional website.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/001.png" alt="Informative Content"> </div>
                        <h3>More Traffic</h3>
                        <p>An optimized web design can improve your standings in the search engines, leading to more visitors.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/002.png" alt="Informative Content"> </div>
                        <h3>More Conversions</h3>
                        <p>All the traffic in the world doesn’t mean a thing if they don’t convert to paying customers.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/003.png" alt="Informative Content"> </div>
                        <h3>More Revenue</h3>
                        <p>As you build traffic and increase conversion rates, you’ll see a direct impact on your bottom line.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/004.png" alt="Informative Content"> </div>
                        <h3>More Authority</h3>
                        <p>If you want to be an authority in your industry, you need a website that supports that claim.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/005.png" alt="Informative Content"> </div>
                        <h3>More Engagement</h3>
                        <p>Give customers an easy way to engage with your site and keep the sales process flowing smoothly.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/006.png" alt="Informative Content"> </div>
                        <h3>More Ease</h3>
                        <p>Changes and updates to your website can be made very quickly to take advantage of new trends.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="tabbed-set">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="tile" id="tile-1">
                        <ul class="nav nav-tabs nav-justified" role="tablist">
                            <!-- <div class="slider"></div> -->
                            <li class="nav-item"> <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">What we do</a> </li>
                            <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">What is Viral Business?</a> </li>
                            <li class="nav-item"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">What makes us unique?</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="navList-TXT">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <p>We design, develop, and implement all the Tools that your Channel needs. We are passionate about creating solutions that work, be it Websites, Online Stores, Custom Designs, or APPs.</p>
                                <p>​We do not give work that is full of patchwork. We do not fill you with solutions that do not work, are not integrated, and create several problems in the management of your information and your processes.</p>
                                <p>If you want to succeed in the digital arena, build an ecosystem that has your client as the center of its entire operation, where data flows between systems in real-time, with a structure of solutions designed to digitally transform your business. We help you do it.</p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <p>Viral Business offers everything you need to implement True Digital Marketing right from a single place, where we design strategies from scratch, to help companies maximize the power of the Internet.</p>
                                <p>Our exclusive All-in-One Digital Marketing Technology is the key to maximizing revenue through SEO,PPC, and digital marketing. You no longer need to use different providers for Website, Online Reviews, Email Marketing, PPC, Social Networks, Tracking Data, etc. with Viral Business.</p>
                                <p>You just need a single source that makes each step more efficient, easy to implement taking your business higher in search engine rankings, and maximize brand awareness, website traffic, leads, and revenue. Achieving this with fewer complications, reduced cost, and better Income.</p>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <p>What makes us unique is that we are the only company that integrates all the components that are needed to do and execute true Digital Marketing from a single place with fewer complications, cost reduction, and better income.</p>
                                <p>Besides, our Technology is constantly updated, adding new extensions and parts to provide the solutions that are needed in various countries, offering a Technology that adapts to the needs of your country.</p>
                                <p>We accompany you in each step online and we offer you the digital tools necessary for your business to reach more people. We try to make ourselves completely accessible and connected. You would feel that you have created a new department within your business and have not hired an external agency.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="video-Part" class="ptb-100">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="video-image">
                        <a href="https://www.youtube.com/watch?v=eYjlZlg1Ogo"><img src="assets/img/viral-video-2.jpg"></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="video-TXT">
                        <h2 class="this-title">Get customized UI designs from a top-notch agency.</h2>
                        <p>A great UI design is the heart of every website as well as business. With personalized design, you can easily engage more users on your website. We’re an affordable agency & we offer supreme custom web designs for organizations & businesses. </p>
                        <ul>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Our team develops unique & functional designs for effective results.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> We make creative websites at a reasonable price to get your business over the internet.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Our 24x7 availability & excellent customer dealing service made us the first choice for users.</li>
                        </ul> <a href="https://www.youtube.com/watch?v=eYjlZlg1Ogo" target="_blank" class="default-btn">Click Now</a> </div>
                </div>
            </div>
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
                    <div class="fact txtbTTn"> <a href="contact-us.html" class="default-btn2 bttn-D">Contact Us</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start FAQ Area -->
    <section class="faq-area pt-100 pb-70 bott-paDD">
        <div class="container">
            <div class="section-title"> <span class="sub-title">MAKE THE USER FALL IN LOVE WITH YOUR WEBSITE.</span>
                <h2>Website Design and Development</h2>
                <p>A website is like a portfolio that a brand has to present to its audience. If that portfolio does not look and feel good, it is highly unlikely that a lot of traffic would get on the website.</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-content">
                        <h3>Qualities of a Great Website</h3>
                        <p>There are some qualities that a great website has and a company must properly understand and implement them while building a website for their clients. These qualities are ranked in order so that you get a good idea about what comes first while designing and developing a website.</p>
                        <p><b>Great Looks:</b> The way a website looks leaves a lasting impression on visitors. Looks of a website is the first thing that a visitor observes, which is why it is absolutely essential to make it great. No brand that wants to establish itself would take their website’s looks lightly. They know the importance it holds and would not compromise it for anything.</p>
                        <p><b>Less Loading Time:</b> When a user has landed on your website, the next aspect that they observe is the time it takes for your website’s pages to load. People do not spend lots of time on websites. They only spend a few minutes and it is in that time that your website must not disappoint them and make them navigate to another website.</p>
                        <p>Some websites are designed in such a way that they take a lot of time to load, even when they get accessed by people with fast internet connection. The problem at that time is not with the internet, but with the website. That is why it is recommended for website designers to conduct appropriate tests before make a website live.</p>
                        <p><b>Clean Interface:</b> User Interface or simply called Interface is the look and feel of a website. It covers everything relating to the symmetry, alignment, placement of text and buttons. These are the aspects that are most often ignored by many website designers. But that is not the case with Viral Business. We understand all your needs and know what all is important while designing and developing a website.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-content">
                        <p>If a website has one button at a certain place and then another button at another place, with no symmetry, a user will surely not like that website, but they might not understand as to why they do not like that website. This happens because of the subconscious mind, where our brain observes the details but our conscious mind cannot comprehend them.</p>
                        <p><b>High Quality Images:</b> A website appeals to the visitors with the images present on it. Images play a vital role in deciding whether a website will look appealing or not. While deciding and uploading images, the team must make sure that they are of high quality. No visitor would like to see low quality images with low resolution. It just does not look good in general.</p>
                        <p>While uploading images, make sure that they are compressed, or it can significantly increase a website’s size and therefore increase the loading time, which is the last thing a Digital Marketing company wants for their clients. To solve this problem, Viral Business comes into the picture. Their experience helps them to take care of all the important and necessary steps, so that no problem arises in the long run.</p>
                        <p><b>Call-to-Action:</b> Making a user to complete some task that you want is a success in itself. It could be redirecting them towards filling a simple form or clicking a button. For E-Commerce websites, it could be related to making a user buy a certain product or at the very least, making them click on the notify button when a product get back into stock.</p>
                        <p>Truth is that all brands and business have an agenda and that is to sell their products and services to the customers. Call-to-Action is a great way of doing that, as it does not look promotional and it gets the work done.</p>
                        <h3>Final Words</h3>
                        <p>These are some of the qualities that must be present in a website to make it stand out among the competitors. A good Digital Marketing company knows in detail about all these points. Viral Business is a great option. We have experts that have years of experience and they are well-versed with all the work related to their fields.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="FAQ" class="spacer">
        <div class="container">
            <h2 class="faqTitle">Frequently Asked Questions</h2>
            <div id="faq" class="faq-body">
                <div class="faq-header">
                    <div class="faq-list">
                        <div>
                            <details open>
                                <summary title="Does your organization offer innovative web design services?">Does your organization offer innovative web design services?</summary>
                                <p class="faq-content">We are an emerging brand in the IT industry and we provide innovative website design services including WordPress and e-commerce to our esteemed clients. We designed customized UI and UX design as per the client’s requirement.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="What kind of technology do you support?">What kind of technology do you support?</summary>
                                <p class="faq-content">Ans. We utilize various technologies like XML, DHTML, JavaScript, CSS, PHP and XHTML. Our experienced team delivers creative websites to our customers at a reasonable price.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="Can I examine my website during the development phase?">Can I examine my website during the development phase?</summary>
                                <p class="faq-content">Ans. Absolutely yes, you can see your website during the development phase. We develop attractive websites and get valuable feedback from our respected clients and work accordingly.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="What is the difference between a dynamic website and a static site?">What is the difference between a dynamic website and a static site?</summary>
                                <p class="faq-content">Ans.  Static websites can be developed under simple languages such as HTML,CSS, and JavaScript whereas dynamic websites can be designed with complex languages like AJAX, ASP.NET, and CGI. On a static webpage, the user’s data can’t be changed.</p>
                            </details>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <!-- End FAQ Area -->


@endsection
