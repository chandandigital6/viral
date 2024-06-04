@extends('frontLayouts.main', ['seos' => $seos])
@section('title', 'Home ')
@section('content')
    <section id="heropart">
        <div class="herobg">
            <svg class="h-triangle" width="1111px" height="354px" viewBox="0 0 1111 354">
                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" transform="translate(0.000000, -345.000000)" opacity="0.05">
                    <g transform="translate(0.000000, -120.000000)">
                        <path stroke="#979797" stroke-width="1" fill="#fff" d="M0.5,465.670355 L0.5,818.5 L1110.5,818.5 L1110.5,817.34497 L0.5,465.670355 Z"></path>
                    </g>
                </g>
            </svg>
            <svg class="v-quadrilateral" width="283px" height="701px" viewBox="0 0 283 701">
                <defs>
                    <linearGradient x1="50%" y1="0%" x2="50%" y2="100%" id="v-gradient">
                        <stop stop-color="#18234C" offset="0%" stop-opacity="0.05"></stop>
                        <stop stop-color="#fff" offset="100%" stop-opacity="0.05"></stop>
                    </linearGradient>
                </defs>
                <g stroke="none" stroke-width="1" fill="url(#v-gradient)" fill-rule="evenodd" transform="translate(-1157.000000, 0.000000)">
                    <g transform="translate(0.000000, -1.000000)">
                        <path d="M1156.99482,702 L1356.76184,1 L1440,1 L1440,702 L1156.99482,702 Z"></path>
                    </g>
                </g>
            </svg>
            <div class="container">
                <div class="alltxt-hero">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-md-12 set-padd">
                            <div class="banner-content">
                                <span class="sub-title">Top-notch Digital Marketing Agency</span>
                                <h1>We Help Our Clients
                                    <br>Get More <span class="txt-rotate" data-period="1500" data-rotate='["Traffic", "Leads","Revenue","Customers"]'></span>
                                </h1>
                                <p>We’re a Digital Marketing Agency, known for our no-nonsense approach. Just straight talking and smart thinking, delivered by people who care about your business.</p>
                            </div>
                            <div class="btn-box"> <a href="contact-us.html" target="_blank" class="default-btn bttn-G">Contact Us</a> <a href="tel:+91- 98766 66605" class="default-btn2 bttn-D">Request a Call</a> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Main Banner Area -->
    <section id="branding-media" class="bg-Branding">
        <div class="container">
            <div class="row">
                <div class="col-4">
                    <div class="brand-stars"> <a href="https://www.trustpilot.com/review/viralbusinessgroup.com"><img src="{{asset('asset/img/trust.png')}}"></a> </div>
                </div>
                <div class="col-4">
                    <div class="brand-stars"> <a href="https://www.sitejabber.com/reviews/viralbusinessgroup.com"><img src="{{asset('asset/img/sitejabber.png')}}"></a> </div>
                </div>
                <div class="col-4">
                    <div class="brand-stars"> <a href="https://g.page/viralbusinessgroup?gm"><img src="{{asset('asset/img/googleshop.png')}}"></a> </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
    <section class="about-area pb-100 pb-1001">
        <div class="container-fluid">
            @foreach($about as $aboutUs)


            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="about-img"> <img src="{{asset('storage/'.$aboutUs->image)}}" alt="Digital Marketing Growth"> </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="about-content">
                        <div class="text">
                            <span class="sub-title">{{$aboutUs->title}}</span>
                            <h2>{{$aboutUs->heading}}</h2>
                            <p>{!! $aboutUs->description !!}</p>
                            <a href="{{route('about')}}" class="default-btn">More About Us</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        <div class="shape15"><img src="{{asset('asset/img/shape/shape15.png')}}" alt="shape15"></div>
    </section>
    <!-- End About Area -->
    <!-- Start Services Area -->
    <section class="services-area bg-f9f9f9 pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Services</span>
                <h2>What We Offer?</h2>
                <p>These are the categories that we have expertise in. We constantly add more services to our arsenal.</p>
            </div>
            <!--  =========start-services======= -->
            <div class="row service-wrapper">
                <div class="col-md-4 text-center">
                    <div class="tw-service-box">
                        <div class="service-icon service-icon-bg d-table">
                            <div class="service-icon-inner d-table-cell"> <img width="100" height="103" src="{{asset('asset/img/Social Media Marketing.png')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Social Media Marketing"> </div>
                        </div>
                        <div class="service-content">
                            <h3>Social Media Management</h3>
                            <p>With the number of people increasing on Social Media every day, it is essential to advertise over there. Gather large chunks of audience with experts managing this aspect and delivering results. </p>
                            <div class="hovereffect"> <span>
                  <a href="social-media-management.html" class="tw-readmore">Read More <i class="fa fa-angle-right"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="tw-service-box">
                        <div class="service-icon service-icon-bg d-table">
                            <div class="service-icon-inner d-table-cell"> <img width="100" height="122" src="{{asset('asset/img/content-writing.png')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Content Writing"> </div>
                        </div>
                        <div class="service-content">
                            <h3>Content Writing</h3>
                            <p>Businesses and Start-Ups have started to realize the importance of relevant content. For that matter, Viral Business can help tremendously by offering help of experts. After all, Content is King.</p>
                            <div class="hovereffect"> <span><a href="content-writing.html" class="tw-readmore">Read More <i class="fa fa-angle-right"></i></a></span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="tw-service-box">
                        <div class="service-icon service-icon-bg d-table">
                            <div class="service-icon-inner d-table-cell"> <img width="100" height="126" src="{{asset('asset/img/Search Engine Optimization.png')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Search Engine Optimization"> </div>
                        </div>
                        <div class="service-content">
                            <h3>Search Engine Optimization</h3>
                            <p>With the introduction of internet, local businesses have started to make their presence online. To stand out among them, it is vital to let an expert at Viral Business take care of the work.</p>
                            <div class="hovereffect"> <span><a href="search-engine-optimization.html" class="tw-readmore">Read More <i class="fa fa-angle-right"></i></a></span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="tw-service-box">
                        <div class="service-icon service-icon-bg d-table">
                            <div class="service-icon-inner d-table-cell"> <img width="100" height="126" src="{{asset('asset/img/PPC Advertising.png')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="PPC Advertising"> </div>
                        </div>
                        <div class="service-content">
                            <h3>PPC Advertising</h3>
                            <p>Websites have to unite to be beneficial for one another. Pay Per Click Advertising lets websites do exactly that by offering advertisement in return for money, which leads to more traffic.</p>
                            <div class="hovereffect"> <span><a href="ppc-management.html" class="tw-readmore">Read More <i class="fa fa-angle-right"></i> </a></span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="tw-service-box">
                        <div class="service-icon service-icon-bg d-table">
                            <div class="service-icon-inner d-table-cell"> <img width="100" height="103" src="{{asset('asset/img/youTube-video-marketing0.png')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Youtube Video Marketing"> </div>
                        </div>
                        <div class="service-content">
                            <h3>YouTube Video Marketing</h3>
                            <p>A person cannot build a website and then forget about it. To keep it running and getting the feedback about the performance, Google Analytics is a web service that must be used.</p>
                            <div class="hovereffect"> <span><a href="youtube-video-marketing.html" class="tw-readmore">Read More <i class="fa fa-angle-right"></i> </a></span> </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 text-center">
                    <div class="tw-service-box">
                        <div class="service-icon service-icon-bg d-table">
                            <div class="service-icon-inner d-table-cell"> <img width="100" height="122" src="{{asset('asset/img/custom-website-design0.png')}}" class="attachment-post-thumbnail size-post-thumbnail wp-post-image" alt="Custom Website Design"> </div>
                        </div>
                        <div class="service-content">
                            <h3>Custom Website Design</h3>
                            <p>Whether it is an online business or an offline business, it is essential for businesses to convert the visitors into customers to earn profits. Conversion Rate Optimization is exactly that.</p>
                            <div class="hovereffect"> <span><a href="custom-website-design.html" class="tw-readmore">Read More <i class="fa fa-angle-right"></i> </a></span> </div>
                        </div>
                    </div>
                </div>
                <!-- ========end-Services======= -->
            </div>
    </section>
    <!-- End Services Area -->
    <!-- Start What We Do Area -->
    <section class="what-we-do-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="what-we-do-content">
                        <!-- <span class="sub-title">What We Do</span> -->
                        <h2>Guaranteed Success When You Choose Viral Business</h2>
                        <p>Viral Business is a result-oriented company with the primary focus of delivering exceptional services at competitive price. We value money and make sure that no client leaves with less than satisfactory results. We go the extra mile to keep our clients happy.</p>
                        <div class="skills-item">
                            <div class="skills-header">
                                <h4 class="skills-title">Digital Marketing</h4>
                                <div class="skills-percentage">
                                    <div class="count-box">95%</div>
                                </div>
                            </div>
                            <div class="skills-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="95"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skills-item">
                            <div class="skills-header">
                                <h4 class="skills-title">Social Media Marketing</h4>
                                <div class="skills-percentage">
                                    <div class="count-box">85%</div>
                                </div>
                            </div>
                            <div class="skills-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="85"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skills-item">
                            <div class="skills-header">
                                <h4 class="skills-title">Website Design</h4>
                                <div class="skills-percentage">
                                    <div class="count-box">80%</div>
                                </div>
                            </div>
                            <div class="skills-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="80"></div>
                                </div>
                            </div>
                        </div>
                        <div class="skills-item">
                            <div class="skills-header">
                                <h4 class="skills-title">Video Marketing</h4>
                                <div class="skills-percentage">
                                    <div class="count-box">90%</div>
                                </div>
                            </div>
                            <div class="skills-bar">
                                <div class="bar-inner">
                                    <div class="bar progress-line" data-width="90"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="what-we-do-content-accordion">
                        <ul class="accordion">
                            <li class="accordion-item">
                                <a class="accordion-title active" href="javascript:void(0)"> <i class="flaticon-plus"></i> Traffic </a>
                                <div class="accordion-content show">
                                    <p>As a Digital Marketing company, we are well aware about the needs of our customers. They want more traffic on their websites, as it would help them to earn more profits and increase reputation of their business. Our experts optimize websites in such a way that all the requirements of a client gets fulfilled.</p>
                                </div>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"> <i class="flaticon-plus"></i> Leads </a>
                                <div class="accordion-content">
                                    <p>Getting leads on a website means that more customers would be able to see your website during search query and open it. Usage of Keywords, their density, Internal Linking, External Linking are all the SEO practices that help your website to rank. Getting more leads results in more traffic as everything is connected.</p>
                            </li>
                            <li class="accordion-item">
                                <a class="accordion-title" href="javascript:void(0)"> <i class="flaticon-plus"></i> Revenue </a>
                                <div class="accordion-content">
                                    <p>Now that a website is visible and people are visiting it, the next step is to earn money from their visit. It can be done through advertisements on a website or selling products to an interested audience. Knowing the type of audience can greatly decide whether a website would earn money or not.</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End What We Do Area -->
    <!-- Start Feedback Area -->
{{--    <section class="feedback-area ptb-100">--}}
{{--        <div class="container">--}}
{{--            <div class="row align-items-center">--}}
{{--                <div class="col-lg-6 col-md-12">--}}
{{--                    <div class="feedback-content">--}}
{{--                        <span class="sub-title">Feedback</span>--}}
{{--                        <h2>What Our Clients Are Saying?</h2>--}}
{{--                        <p>We let our clients speak about us</p>--}}
{{--                        <p>It's very easy to describe how emerging & wonderful we are, but we think it's better to let our esteemed clients do the talking. After all, they probably judge us from our services & working style. Don't take our word & hear some of the key things our trustworthy clients say after working with us.</p>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="col-lg-6 col-md-12">--}}
{{--                    <div class="feedback-slides owl-carousel owl-theme">--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user1.jpg')}}" alt="John Smith">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>John Smith</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>Viral Business consistently exceeds our expectations. Not only are they extremely knowledgeable but you can't beat the passion that these folks have for the work they do. They will always be our first choice when it comes to our digital needs.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user2.jpg')}}" alt="Sarah Taylor">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Sarah Taylor</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>Likewise, the installment modes, procedure and conveyance procedure can be adjusted to coordinate with the modifying needs and arrangements of our benefactors.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user7.jpg')}}" alt="Aace">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Aace</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>Internet Marketing Services For Todays Digital Landscape We partner with brands to grow visibility, website traffic, and achieve higher search engine rankings through our mix internet marketing services.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user8.jpg')}}" alt="Shane Jacobs">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Shane Jacobs</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>Thank you, Viral Business, for designing my professional business website. Their experienced team really worked hard and produce high-quality results in terms of great UI design and well-structured coding structure.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user6.jpg')}}" alt="Michelle">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Michelle</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>I’m pleased with the overall services of Viral Business; they build a cost-effective marketing strategy for my small business. The marketing team of Viral Business is very supportive & solve every query efficiently.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user4.jpg')}}" alt="Drew">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Drew</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>Working with Viral Business is amazing for our company, they set up a high-quality social media marketing strategy that effectively improves my sales, revenue, customer reach, and more importantly my brand awareness on social media platforms.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user5.jpg')}}" alt="Laecy">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Laecy</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>These guys are trusted and highly talented. They provide budget-friendly local SEO services for my business. Their expertise always thinks creatively & out of the box. No doubt, their work is appreciated. Strongly recommended.</p>--}}
{{--                        </div>--}}
{{--                        <div class="single-feedback-item">--}}
{{--                            <div class="client-info">--}}
{{--                                <div class="d-flex align-items-center">--}}
{{--                                    <img src="{{asset('asset/img/user9.jpg')}}" alt="Kevin">--}}
{{--                                    <div class="title">--}}
{{--                                        <h3>Kevin</h3>--}}
{{--                                    </div>--}}
{{--                                </div>--}}
{{--                            </div>--}}
{{--                            <p>As a startup, you need a reliant digital marketing agency that delivers 100% genuine results. Viral Business is one of them, a brand of trust & success. Business tracking becomes easy with their great marketing tactics.</p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--        <div class="shape16">--}}
{{--            <img src="{{asset('asset/img/shape/shape16.png')}}" alt="shape16">--}}
{{--        </div>--}}
{{--    </section>--}}
    <!-- End Feedback Area -->
    <!-- End Team Area -->
    <div class="viral-content">
        <div class="container">
            <div class="contentPART">
                <h2>Regret Is Not an Option While Choosing <br>Viral Business</h2>
                <p>You Want to Showcase Your Business in Top Join With Us</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-content">
                        <h3>Why you Need Digital Marketing?</h3>
                        <p>Digital Marketing has become a necessity nowadays as business want to grow both in the offline and online market. Viral Business is a Digital Marketing company that has been in the industry since a long time.</p>
                        <p>Marketing is required to promote any type of business. Without it, the intended goal cannot be achieved, which is mostly to earn money. Digital Marketing helps startups and businesses to make their presence felt online.</p>
                        <h3>Your Needs = Our Responsibility</h3>
                        <p>We understand that requirements of people change with passing time and a company must be flexible to cater to a client’s needs. Viral Business does exactly that by constantly evolving and keeping customers at top.</p>
                        <p>We are fully aware that a company stays in market only because of the support they receive from customers. Without them, it is impossible for a company to stay and improve themselves. There have been numerous examples of companies with great services getting rejected because of no support.</p>
                        <p>Keeping customers at top helps us to view our company in a different light. Not only that, but our clients and website visitors also get that image about us. It is not just an image but a reality that we have worked hard to achieve. It has taken us time to establish ourselves as the kings of Digital Marketing.</p>
                        <h3>Pricing that is Competitive</h3>
                        <p>Now you must be thinking that all the services and the price must be high. No, that is fortunately not true. We value our client’s hard earned money and know that they must get worth of each penny that they invest in us. That is why, we deliver our services at competitive pricing.</p>
                        <p>Competitive Pricing helps us to stand out among other similar Digital Marketing companies. We have many packages and we are sure that there is everything for someone. We do not want any of our clients to get a bad service from us.</p>
                        <p>We have the motivation and the confidence required to make your website stand out among thousands of other websites. After all, getting even a little advantage over competitors can result in great profits.</p>
                        <p>We have many packages that you can choose from. Choose a package that suits your needs and your pocket. We have built the packages by thinking from a client’s perspective, which is why Viral Business is an affordable Digital Marketing company.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-content">
                        <h3>Customers are God</h3>
                        <p>At Viral Business, we believe that customers must be our only priority. We hate when a client has to get their work done from several agencies because there are only a few companies that offer all services at one place.</p>
                        <p>Viral Business is a company that does exactly that, because we offer all Digital Marketing services at one place. Basically, we are a one stop shop for all your Digital Marketing needs.</p>
                        <h3>Inculcating New and Effective Technologies</h3>
                        <p>Our constant upgrades in technology and staff has helped us to maintain that image. It rarely happens but if we feel that our staff is lacking in some way- skills or motivation, we make sure to conduct seminars and workshops to boost their morale and keep them driven.</p>
                        <p>We believe that even the most skilled people need to brush their skills once in a while. It helps them to know that they still have the capability of performing, which is a sure way of increasing their confidence.</p>
                        <p>Increased confidence can not only help the workplace, but also help a person to achieve goals in their personal lives. When a person is happy, it reflects in their work, which is beneficial for the company as well as the clients.</p>
                        <h3>Reviews Prove Our Worth</h3>
                        <p>Now that you have checked our services, technologies we use, pricing and other important aspects, what is left?</p>
                        <p>An important aspect that is left is client’s reviews and testimonials. Yes it is essential for a company to prove their worth. We are not afraid to show them because we do all work with complete honesty.</p>
                        <p>A company that believes in their capability is never afraid of showing the work they have done. That is why we display reviews for our work openly and proudly. We even go to the extent of providing contact information of our clients, so that you can check whether great services were delivered or not.</p>
                        <p>It is a sad reality that many Digital Marketing companies decide to take the wrong path. They display fake reviews and paid reviews. It is actually a very common practice in this industry. We do not even think about taking that path because we have expert staff that needs no shortcuts.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Start Project Start Area -->
    <section class="project-start-area ptb-100">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 col-md-12">
                    <div class="project-start-image"> <img src="{{asset('asset/img/Project-With-Us.png')}}" alt="Digital Marketing Agency"> </div>
                </div>
                <div class="col-lg-6 col-md-12">
                    <div class="project-start-content">
                        <span class="sub-title">Get Started</span>
                        <h2>We Like to Start Your Project With Us</h2>
                        <p> We have established our brand value on the basis of our immaculate results, tangible ROI, professional approach to problems and tailor made solutions for any clients.</p>
                        <a href="contact-us.html" class="default-btn">Get Started</a>
                    </div>
                </div>
            </div>
        </div>
        <div class="shape2"><img src="{{asset('asset/img/shape/shape2.png')}}" alt="shape2"></div>
        <div class="shape3"><img src="{{asset('asset/img/shape/shape3.png')}}" alt="shape3"></div>
        <div class="shape5"><img src="{{asset('asset/img/shape/shape5.png')}}" alt="shape5"></div>
        <div class="shape6"><img src="{{asset('asset/img/shape/shape6.png')}}" alt="shape6"></div>
        <div class="shape7"><img src="{{asset('asset/img/shape/shape7.png')}}" alt="shape7"></div>
        <div class="shape13"><img src="{{asset('asset/img/shape/shape13.png')}}" alt="shape13"></div>
    </section>
    <!-- End Project Start Area -->
    <!-- Start Blog Area -->
    <section class="blog-area bg-f9f9f9 pt-100 pb-70">
        <div class="container">
            <div class="section-title">
                <span class="sub-title">Our Blog</span>
                <h2>Our Latest Media</h2>
                <p>Our campaigns get your business in front of the right people at the right time to increase organic traffic and boost engagement.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="image">
                            <a href="blog.html" class="d-block"> <img src="{{asset('asset/img/blog/Email Marketing Tools.jpg')}}" alt="image"> </a>
                        </div>
                        <div class="content">
                            <h3><a href="blog.html">How to Build Award Winning Digital Marketing Strategies</a></h3>
                            <div class="d-flex align-items-center">
                                <img src="{{asset('asset/img/user2.jpg')}}" alt="image">
                                <div class="info">
                                    <h5>Sarah Taylor</h5>
                                    <span>Jun 20, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-blog-post">
                        <div class="image">
                            <a href="blog.html" class="d-block"> <img src="{{asset('asset/img/blog/Instagram Analytics Tools.jpg')}}" alt="image"> </a>
                        </div>
                        <div class="content">
                            <h3><a href="blog.html">7 Instagram Analytics Tools You Need to Know About</a></h3>
                            <div class="d-flex align-items-center">
                                <img src="{{asset('asset/img/user2.jpg')}}" alt="image">
                                <div class="info">
                                    <h5>Sarah Taylor</h5>
                                    <span>Jun 20, 2020</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="single-blog-post">
                        <div class="image">
                            <a href="blog.html" class="d-block"> <img src="{{asset('asset/img/blog/Keywords for Your Website.jpg')}}" alt="image"> </a>
                        </div>
                        <div class="content">
                            <h3><a href="blog.html">5 Proven Ways How to Choose Keywords for Your Website</a></h3>
                            <div class="d-flex align-items-center">
                                <img src="{{asset('asset/img/user3.jpg')}}" alt="image">
                                <div class="info">
                                    <h5>Steven Gibson</h5>
                                    <span>Jun 19, 2020</span>
                                </div>
                            </div>
                        </div>
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
    <!-- Nav tabs -->
    <!-- Tab panes -->
    <!-- End Blog Area -->
    {{--faq--}}
    <section id="FAQ" class="spacer">
        <div class="container">
            <h2 class="faqTitle"><span>Frequently Asked Questions</span></h2>
            <div id="faq" class="faq-body">
                <div class="faq-header">
                    <div class="faq-list">

                        @foreach($faqs as $faq)


                        <div>
                            <details open>
                                <summary title="{{$faq->question}}">{{$faq->question}}</summary>
                                <p class="faq-content">{{$faq->answer}}</p>
                            </details>
                        </div>

                        @endforeach


                    </div>
                </div>
            </div>
    </section>
    {{-- faq end--}}
    <section class="ourClients  ptb-100">
        <div class="container">
            <div class="benifitsTitle clientSET">
                <h2>Our Clients</h2>
                <p class="pragrahTXT">We have been proudly partnering with more than 700 forward-thinking companies of all sizes, from startups to world-famous enterprises.</p>
            </div>
            <div class="row">
                <div class="col-lg-2">
                    <div class="clientPhotos">
                        <a href="javascript:void(0)"><img src="{{asset('asset/img/lo1.png')}}" alt="lo1"></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="clientPhotos">
                        <a href="javascript:void(0)"><img src="{{asset('asset/img/lo2.png')}}" alt="lo2"></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="clientPhotos">
                        <a href="javascript:void(0)"><img src="{{asset('asset/img/lo4.png')}}" alt="lo4"></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="clientPhotos">
                        <a href="javascript:void(0)"><img src="{{asset('asset/img/lo5.png')}}" alt="lo5"></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="clientPhotos">
                        <a href="javascript:void(0)"><img src="{{asset('asset/img/lo6.png')}}" alt="lo6"></a>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="clientPhotos">
                        <a href="javascript:void(0)"><img src="{{asset('asset/img/lo7.png')}}" alt="lo7"></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="clear"></div>
@endsection
