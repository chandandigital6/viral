
@extends('frontLayouts.main' ,['seos'=>$seos])
@section('title', 'Local Seo ')
@section('content')



    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>Local Seo</h1> </div>
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
                <div class="col-md-6 col-md-push-6 img-holder"> <img src="assets/img/seo.png" alt="Local SEO"> </div>
                <div class="col-md-6 col-md-pull-6 text-holder">
                    <div class="row sectionTitle text-left">
                        <h2 class="this-title">Appear at Top of Local Search Results with Viral Business</h2>
                        <p>We are Search Engine &amp; Social Media Experts</p>
                    </div>
                    <p class="this-p">We’re also experts at finding the sweet spot between Google’s guidelines and what is commercially right for you. We have progressive theories on search as a tool for retention of customers, not just for acquisition.</p>
                    <ul class="this-features list-unstyled">
                        <li><span class="icon-holder"><img src="assets/img/26.png" alt="Local Links"></span>Local Links</li>
                        <li><span class="icon-holder"><img src="assets/img/27.png" alt="Region Specific Keywords"></span>Region Specific Keywords</li>
                        <li><span class="icon-holder"><img src="assets/img/28.png" alt="Client Reviews"></span>Client Reviews</li>
                        <li><span class="icon-holder"><img src="assets/img/29.png" alt="Google My Business"></span>Google My Business</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Services Area -->
    <section class="services-area bg-f9f9f9 topspace pb-70">
        <div class="container">
            <div class="section-title"> <span class="sub-title">BRING LOCAL CLIENTS TO YOUR BUSINESS WITH LOCAL SEO.</span>
                <h2>Local SEO</h2>
                <p>We provide effective Local SEO services which are what businesses want in today’s time. Our team at Viral Business dedicates time because great results are only achieved when the appropriate time is given. People start businesses by keeping the local market in mind. For that matter, our team performs in-depth research about the city or state to understand what people truly want.</p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/001.png" alt="Website localization"> </div>
                        <h3>Website localization</h3>
                        <p>Localizing your business website involves your city and region on your site to increase the visibility of your website. It involves tactics like create separate page & content hubs.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/002.png" alt="Increase Reviews & Ratings"> </div>
                        <h3>Increase Reviews & Ratings</h3>
                        <p>Our experts monitor your business & track reputation on leading platforms like Facebook, Google my business, and Yelp to take your business on to the next level.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/003.png" alt="Creation of accurate citation"> </div>
                        <h3>Creation of accurate citation</h3>
                        <p>Our experienced team develops appropriate citations (links) that people usually search for. We focus on local sites because location citation increase your map rankings.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/004.png" alt="Improve internal linking structure"> </div>
                        <h3>Improve internal linking structure</h3>
                        <p>With local search engine optimization, you can improve the overall internal linking structure of your local business & get adequate results as per your requirements.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/005.png" alt="Claim your GMB Listing"> </div>
                        <h3>Claim your GMB Listing</h3>
                        <p>Claim your Google my business page is considered as the major step towards your business success. The listing service allows your business to display on leading Google services i.e. Maps.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <img src="assets/img/006.png" alt="Gain relevant backlinks"> </div>
                        <h3>Gain relevant backlinks</h3>
                        <p>Local SEO provides your business most appropriate backlinks from reputed websites for perfect search results. Links from local newspapers, bloggers can boost your site visibility.</p>
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
                        <a href="https://www.youtube.com/watch?v=eYjlZlg1Ogo"><img src="assets/img/viral-video-2.jpg" alt="viral video"></a>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="video-TXT">
                        <h2 class="this-title">Increase your business visibility with Professional SEO Services.</h2>
                        <p>Local SEO is an efficient way to optimize your online presence to attract numerous new businesses from adequate local searches. We work flawlessly with our team to produce relevant results. Local SEO helps your target audience to explore your local business</p>
                        <ul>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> We work on various platforms like Moz local, Growth Bar, White Spark to shape your business.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Our productive approach allows your business to gain a competitive edge.</li>
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
    <div class="viral-content pt-100">
        <div class="container">
            <div class="section-title"> <span class="sub-title">A good relationship with clients</span>
                <h2>Appear at Top of Local Search Results with Viral Business </h2>
                <p>With our SEO services, the process becomes simple as all the work gets done by our team of experts. Services that we offer:</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="service-content">
                        <h3>Why you Need Digital Marketing?</h3>
                        <p>Viral Business is a company that specializes in everything related to digital marketing, which is important for any business that wants to get established. Here are some of the ways we help our clients:</p>
                        <p><b>SEO for all Business Types:</b> While providing our help locally, we make sure to assist all business types. Mostly in a local market, the businesses that are present are small in size. Though there are some exceptions as large businesses can also be found in a local market. Some businesses have large chains spread over a state or a country. We analyze the local market properly because it helps us to optimize a website in that particular way.</p>
                        <p><b>Optimization according to the Audience:</b> For any business to grow, it becomes vital to know about the type of audience that is being targeted. For example- a city can be famous for the clothes industry and if some business starts that sells toys, it can be hard for them to establish their name. But there might be some people that would want to buy toys and would not have any idea whether any business that sells those products even exist. For that matter, Search Engine Optimization comes into play and helps that business to become visible.</p>
                        <p><b>Location Matters:</b> While working for Local SEO, Digital Marketing companies need to work such that a business gets shown to local people. These days, most people have access to smartphones. Those phones have a Location feature that lets the search engine to know about the device’s location and show businesses accordingly. Different businesses get shown when a person moves from one location to another. Viral Business optimizes a business’s website such that it gets shown at the top of search results among other local businesses.</p>
                        <p><b>Reviews to Sky-rocket your Success:</b> Reviews are an essential aspect to attract a large number of people. Reviews help a company to seem trustworthy. Viral Business is here to help you do just that by generating positive reviews which are a sure way to gather a large audience.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="service-content">
                        <p>Even in a local area, hundreds of similar businesses are present. To stand out among them, reviews are something that cannot be ignored. Our company understands how Google’s search engines work and the algorithm it uses to rank websites. That is the reason why Viral Business offers its help in Local SEO services. All the websites that establish reviews are put to great use by our experts as most people visit them to get great recommendations</p>
                        <p><b>Use Google My Business:</b> It is a free tool designed by Google which helps businesses to create a profile. Through that profile, they can appear more often in searches and n the reviews section. A study also found that businesses that register on this platform have a better chance of appearing to local people. Google My Business also helps businesses to tell about their details and from where they started. Having a good background story can help to attract more audience as they would be able to relate more to it. This platform also helps businesses to know about how people find a business. It could be through ads in newspapers, searches, or by word of mouth. Viral Business takes care of managing the Google My Business platform because it can get complicated for a layman. </p>
                        <h3>Final Words</h3>
                        <p>These are some of the ways Viral Business can help your business to achieve great heights. Along with them, usual Search Engine Optimization practices like keywords, crawling, indexing, and other complicated things are also used. But for a local business, these steps are necessary because the local market is different than a worldwide market.</p>
                        <p>Our company makes sure to give 100 percent of anything that we take on. We don’t speak but our results do. It would not be an overstatement to say that we are the best in this industry. What are you waiting for? Choose us and forget all about the digital side of your business because we are always present to listen and tailor our work to suit your needs.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section id="FAQ" class="spacer">
        <div class="container">
            <h2 class="faqTitle">Frequently Asked Questions</h2>
            <div id="faq" class="faq-body">
                <div class="faq-header">
                    <div class="faq-list">
                        <div>
                            <details open>
                                <summary title="What is Local SEO?">What is Local SEO?</summary>
                                <p class="faq-content">Local search engine optimization is a process that enhances the visibility of a website over search engines. It is quite similar to SEO. With local SEO, your business becomes more visible in local search engine results. It is beneficial for every business that has a physical location.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="What are the benefits of Local SEO?">What are the benefits of Local SEO?</summary>
                                <p class="faq-content">There are lots of benefits of local search engine optimization including the great success rate of clients. Faster load time and increased likelihood of customers.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="How Local SEO works?">How Local SEO works?</summary>
                                <p class="faq-content">Local SEO produces quality outcomes for small as well as local businesses. It works really well as the development on google maps with equivalent business information. Produce attractive deals to enhance review scores on Google. Creating professional content for local towns to get higher optimization results.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="Is Local SEO popular with mobile devices?">Is Local SEO popular with mobile devices?</summary>
                                <p class="faq-content">As a digital marketing agency, we focus on our client’s requirements. Almost 50% of mobile web users explore google maps to find out popular shops, products, and services. </p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="What is the importance of page content to local SEO?">What is the importance of page content to local SEO?</summary>
                                <p class="faq-content">The page content is quite important for local SEO because everything over the internet is based on the content. We are adaptive to emerging technologies.</p>
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
