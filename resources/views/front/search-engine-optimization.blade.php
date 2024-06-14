
@extends('frontLayouts.main' ,['seos'=>$seos])
@section('title', 'Search Engine Optimization ')
@section('content')



    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>{{$services->category}}</h1> </div>
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
            @foreach($services->details as $details)
            <div class="row">
                <div class="col-md-6 col-md-push-6 img-holder"> <img src="{{asset('storage/'.$details->image)}}" alt="SEO"> </div>
                <div class="col-md-6 col-md-pull-6 text-holder">
                    <div class="row sectionTitle text-left">
                        <h2 class="this-title">{{$details->title}}</h2>
{{--                        <p>We are Search Engine &amp; Social Media Experts</p>--}}
                    </div>
                    <p class="this-p">
                    {!! $details->description !!}
                    </p>
                    <ul class="this-features list-unstyled">
                        @if($details->f1_msg)
                            <li><span class="icon-holder"><img src="{{asset('storage/'.$details->f1_image)}}" alt="Perfect Design"></span>{{$details->f1_msg}}</li>
                        @endif
                        @if($details->f2_msg)
                            <li><span class="icon-holder"><img src="{{asset('storage/'.$details->f2_image)}}" alt="Perfect Design"></span>{{$details->f2_msg}}</li>
                        @endif
                        @if($details->f3_msg)
                            <li><span class="icon-holder"><img src="{{asset('storage/'.$details->f3_image)}}" alt="Perfect Design"></span>{{$details->f3_msg}}</li>
                        @endif
                        @if($details->f4_msg)
                            <li><span class="icon-holder"><img src="{{asset('storage/'.$details->f4_image)}}" alt="Perfect Design"></span>{{$details->f4_msg}}</li>
                        @endif
                        @if($details->f5_msg)
                            <li><span class="icon-holder"><img src="{{asset('storage/'.$details->f5_image)}}" alt="Perfect Design"></span>{{$details->f5_msg}}</li>
                        @endif
                    </ul>
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- Start Services Area -->
    <section class="services-area bg-f9f9f9 topspace pb-70">



        <div class="container">
            @foreach($services->details as $details)
            <div class="section-title"> <span class="sub-title">{{$details->title_1}}</span>
                <h2>{{$details->heading}}</h2>
                <p>
                  {{$details->short_description}}
                </p>
            </div>
            @endforeach
                <div class="row">
                    @foreach($services->benefits as $serviceBenefit)
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="single-services-box">
                                <div class="icon"> <img src="{{asset('storage/'.$serviceBenefit->image)}}" alt="Traffic"> </div>
                                <h3>{{$serviceBenefit->title}}</h3>
                                <p>{{$serviceBenefit->msg}}</p>
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
                        <a href="https://www.youtube.com/watch?v=eYjlZlg1Ogo"><img src="{{asset('asset/img/viral-video-2.jpg')}}" alt="viral video"></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="video-TXT">
                        <h2 class="this-title">Enhance your website rankings with our Cost-efficient SEO Services.</h2>
                        <p>We’re an emerging brand and customers are our main priority. We offer top-class search engine optimization services to our trustworthy clients to make their business achieve extraordinary growth. Our affordable SEO services include local SEO, Technical SEO and PPC.</p>
                        <ul>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> We are familiar to work on SEO strategies to produce good Search results.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Our Team effectively handle large scale organizations & reputed clients.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> We optimize your website & generate organic traffic.</li>
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
            <div class="section-title"> <span class="sub-title">WE TAKE CARE OF ALL THE ASPECTS OF SEO FOR YOU</span>
                <h2>Search Engine Optimization</h2>
                <p>Show your website on the top of the Google rankings as most of the traffic goes to the top five websites in the Google search results. If you are not there, you are losing big. </p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-content">
                        <p>Businesses start with one thing in mind, which is to earn profits. While keeping that as their primary focus, they tend to reduce the importance of other important aspects, which ultimately leads to the downfall of their business. Getting a business to become visible over the most used medium- the internet, has become essential these days. Businesses have to keep up with technology because customers do not use conventional methods that were used in the past.</p>
                        <p>Viral Business is a venture that aims to provide everything under the sun to make you achieve your goals and attract more people towards a business. Having a larger audience is a sure way of getting a better conversion rate. Conversion rate means the number of people that convert into buyers from regular visitors. We have a dedicated team for all your SEO needs.</p>
                        <h3>Meaning of SEO</h3>
                        <p>Now you may ask, what does SEO even mean? Search Engine Optimization is referred to as SEO. Its meaning can be easily guessed from the name itself. It means that websites and all the pages on it are created and modified such that the website appears on top of search results. Every business owner would want this as this would give them an edge over their competitors.</p>
                        <p>Sounds confusing, right? It can be confusing for people with little or no knowledge about the way search engines rank websites. To take your stress away, Viral Business is here to assist and guide you throughout the process, which means taking your business from scratch to making it successful.</p>
                        <h3>SEO Services at Viral Business</h3>
                        <p>With our SEO services, the process becomes simple as all the work gets done by our team of experts. Services that we offer:</p>
                        <p><b>Keyword Research:</b> This aspect of SEO can be declared as the most important because it is that one thing that primarily decides whether a page would rank at the top or somewhere at the bottom. Keywords are important and help search engines to crawl on a website. But the search engines can only crawl if suitable keywords are used. Our team of SEO specialist, make sure to analyze your business properly and ask questions about the services and products, as it helps them to suggest suitable keywords.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-content">
                        <p><b>Content:</b> People can leave a website as easily as they visit it if the content is poorly written. At Viral Business, clients hold the highest position. For that matter, we have a team of expert content writers that produce high-quality writing which guarantees to produce significant results.They have complete knowledge about Search Engine Optimization and implement all techniques that would give results.</p>
                        <p><b>Linking:</b> Linking several pages on a website and multiple websites are what attracts traffic.Linking pages on a single website are known as Internal Linking. Linking pages from other websites are known as External Linking. Linking cannot be forced, which means that links of other pages cannot be put on one page if it does not seem necessary. The links that should be included must flow with the content and the reader must not get any idea that internal or external linking has been done. That is a great quality that a writer must have. Viral Business conducts appropriate tests to select the best among the rest.</p>
                        <p><b>Easy and Clear Packages:</b> When a business wants their website to get optimized, they look at the cost that would occur for getting the services. For that matter, we have put all the services and the prices on our website. After all, we understand that pricing is important and must not be hidden from the clients. If in any case, a client fails to understand the services offered in a certain package, Viral Business is available 24x7 to answer all your queries.</p>
                        <p>Out of all the services, these are the highly preferred ones. But that does not mean our services are limited. We offer a wide range of services and improve our team in terms of quality to get the best results for our clients. After all, a good relationship with clients is essential for Viral Business.</p>
                        <h3>Final Words</h3>
                        <p>To wrap it up, it can be concluded that all the SEO services that we offer can be done by website owners themselves. But it is not viable in today’s time because other important aspects have to be taken care of. Also, learning about SEO takes time, effort, and money, which cannot be invested by most businesses. So it becomes essential for businesses to hand over the work of optimization of a website to SEO professionals. Reduce the hassle and the headache and choose Viral Business for all your SEO needs.</p>
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
                                <summary title="What do you mean by Search engine optimization?">What do you mean by Search engine optimization?</summary>
                                <p class="faq-content">It is defined as the process of maximizing the number of visitors coming through search engines by improving the overall quality of a website. It increases organic traffic on a website. It focuses on unpaid traffic to get adequate results.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="Does your organization offer SEO services?">Does your organization offer SEO services?</summary>
                                <p class="faq-content">Yes! We offer various SEO services that enhance your business to new heights. Basically, we produce organic traffic on the website to promote the product or service of organizations.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="Do you optimize any kind of website?">Do you optimize any kind of website?</summary>
                                <p class="faq-content">We have a team of SEO professionals that can handle any kind of website or webpage. We are familiar with working on WordPress websites along with content management. Our main aim is to deliver quality solutions to our clients under one roof.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="Will blogging help search engine optimization?">Will blogging help search engine optimization?</summary>
                                <p class="faq-content">Blogging is a crucial part of SEO. Every content you develop is the new opportunity to rank your website on Google. The more content you produce, the more you will get organic search results.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="Can you assure me that my website will appear on the 1st page of Google?">Can you assure me that my website will appear on the 1st page of Google?</summary>
                                <p class="faq-content">We can assure you after three steps: First of all,our SEO experts deeply analyze the website as well as keywords, Second, we will research suitable keywords and work on it, In the third step, we will optimize your website with SEO practices.</p>
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
