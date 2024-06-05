
@extends('frontLayouts.main' ,['seos'=>$seos])
@section('title', ' Social Media Marketing')
@section('content')



    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>Social Media Marketing </h1>
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
    <section class="row service-about5">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-md-push-6 img-holder"> <img src="assets/img/Social Media Management.png" alt=""> </div>
                <div class="col-md-6 col-md-pull-6 text-holder">
                    <div class="row sectionTitle text-left">
                        <h2 class="this-title">Featured Projects by Digital Agency</h2>
                        <p>We are Search Engine &amp; Social Media Experts</p>
                    </div>
                    <p class="this-p">We’re also experts at finding the sweet spot between Google’s guidelines and what is commercially right for you. We have progressive theories on search as a tool for retention of customers, not just for acquisition. </p>
                    <ul class="this-features list-unstyled">
                        <li><span class="icon-holder"><img src="assets/img/26.png" alt=""></span>Perfect Design</li>
                        <li><span class="icon-holder"><img src="assets/img/27.png" alt=""></span>Fully Responsive</li>
                        <li><span class="icon-holder"><img src="assets/img/28.png" alt=""></span>Fast Loading</li>
                        <li><span class="icon-holder"><img src="assets/img/29.png" alt=""></span>Seo Friendly</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Services Area -->
    <section class="services-area bg-f9f9f9 pb-70">
        <div class="container">
            <div class="section-title"> <span class="sub-title">Good relationship with clients is essential for Viral Business.</span>
                <h2> Search Engine Optimization</h2>
                <p>Now you may ask, what does SEO even mean? Search Engine Optimization is referred to as SEO. Its meaning can be easily guessed from the name itself. </p>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <i class="flaticon-content"></i>
                            <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div>
                        </div>
                        <h3>Informative Content</h3>
                        <p>Viral Business has a bulk of content that is informative in nature. After all, content gives the real value to a website.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <i class="flaticon-darts"></i>
                            <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div>
                        </div>
                        <h3>Visitor Growth</h3>
                        <p>Growing the number of visitors on a website is essential, as it helps to increase your credibility among similar websites.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <i class="flaticon-bar-chart"></i>
                            <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div>
                        </div>
                        <h3>Google Analytics</h3>
                        <p>Analyzing the traffic and clicks on your website is essential as it helps to take appropriate decisions for your business.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <i class="flaticon-megaphone"></i>
                            <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div>
                        </div>
                        <h3>Innovative Strategies</h3>
                        <p>It is vital to build strategies that stand out as they help to deliver unexpected results in a positive way.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <i class="flaticon-link"></i>
                            <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div>
                        </div>
                        <h3>Link Building</h3>
                        <p>Getting inbound links is necessary as it helps your website to seem credible, which helps to get more traffic.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-6">
                    <div class="single-services-box">
                        <div class="icon"> <i class="flaticon-reputation"></i>
                            <div class="circles-box">
                                <div class="circle-one"></div>
                                <div class="circle-two"></div>
                            </div>
                        </div>
                        <h3>Reputation Management</h3>
                        <p>Once a brand has been built, it is vital to increase its reputation as that helps to build trust among the people.</p>
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
                            <li class="nav-item"> <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">How we do it</a> </li>
                            <li class="nav-item"> <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Why Choose us</a> </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-9">
                    <div class="navList-TXT">
                        <div class="tab-content">
                            <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                                <h3>Forget Generic Services. Forget Dated SEO Agencies.</h3>
                                <p>Aenean accumsan metus quam, at sagittis sem fringilla sit amet. Curabitur tincidunt tempor metus eget ultrices. Proin justo enim, accumsan sit amet ante eu, imperdiet luctus mi. Aenean iaculis rutrum est</p>
                                <p> Vivamus erat ligula, tempus vel erat elementum, aliquam accumsan nibh. Nulla a pharetra erat, eget sollicitudin metus. Ut malesuada sagittis mauris, pharetra egestas augue.</p>
                            </div>
                            <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <h3>SEO Australia Services on your Wavelength.</h3>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In et dolor pulvinar, maximus mauris a, vestibulum odio. Aliquam urna eros, consectetur quis ante quis, porttitor rutrum urna Ut eleifend, turpis eget congue porta, dolor nunc iaculis lorem, in vulputate dui lectus non sem.</p>
                                <p>Aliquam cursus, nisl ac bibendum hendrerit, nunc libero cursus magna, quis dignissim purus erat eget sapien. Praesent mollis iaculis odio luctus consectetur. Mauris efficitur nisl sed facilisis consequat. Pellentesque ultricies ipsum vitae dui congue finibus. Cras neque risus, egestas sit amet mi ut,tristique leo</p>
                            </div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                                <h3>Go Global with a Local SEO Agency in Melbourne.</h3>
                                <p>Cras eu diam id magna consequat pulvinar quis eu nisl. Praesent sed eleifend nisl. Fusce sit amet laoreet enim. Integer vehicula tempus nisi. Donec pretium, augue eget volutpat porta, ex massa blandit dolor</p>
                                <p>Aliquam cursus, nisl ac bibendum hendrerit, nunc libero cursus magna, quis dignissim purus erat eget sapien. Praesent mollis iaculis odio luctus consectetur. Mauris efficitur nisl sed facilisis consequat. Pellentesque ultricies ipsum vitae dui congue finibus. Cras neque risus, egestas sit amet mi ut,tristique leo</p>
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
                        <h2 class="this-title">Establish your brand over social media with us.</h2>
                        <p>Typically, Social media marketing is the use of social media platforms such as Facebook, Instagram to connect with your target audience to promote products & establish a brand, sales. At Viral Business, you can get affordable social media marketing services for your business.</p>
                        <ul>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> Our professional team ensures you achieve huge success in terms of sales & customer reach.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> We work on feasible social media marketing strategies for better results.</li>
                            <li><i class="fa fa-check-square-o" aria-hidden="true"></i> We provide genuine advice to our clients according to the requirements.</li>
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
                        <p>Give us a ring at- 10 (123456789)</p>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4 fun-fact style2">
                    <div class="fact txtbTTn"> <a href="contact.us.html" class="default-btn2 bttn-D">Contact Us</a> </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start FAQ Area -->
    <section class="faq-area pt-100 pb-70 bott-paDD">
        <div class="container">
            <div class="section-title"> <span class="sub-title">A good relationship with clients</span>
                <h2>Search Engine Optimization</h2>
                <p>With our SEO services, the process becomes simple as all the work gets done by our team of experts. Services that we offer:</p>
            </div>
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="TXT-Image"> <img src="assets/img/seo-00.jpg"> </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="TXT-Image">
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source.</p>
                        <p>Morbi ornare felis pharetra dui vulputate lacinia. Pellentesque ut massa laoreet, auctor ante eu, commodo orci. Duis suscipit molestie placerat. Nunc velit lorem, pretium sit amet nisl non, lobortis condimentum purus. In pharetra nulla sed ex venenatis fringilla. Nulla facilisi. Integer nunc arcu, laoreet ut mauris vitae, mollis fermentum justo.</p>
                        <h3>SEO services, the process becomes simple as all the work gets done by our team of experts.</h3>
                        <p>Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old</p>
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
                    <h3 class="faq-title">FAQ's</h3>
                    <div class="seperator"></div>
                    <div class="faq-list">
                        <div>
                            <details open>
                                <summary title="How can I pay for my appointment?">How can I pay for my appointment?</summary>
                                <p class="faq-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed illo quod debitis ducimus iste soluta rerum ipsa consequuntur minus quae. Ea minus ex corporis, pariatur quia rerum sequi iusto odit enim expedita fugiat, assumenda molestiae earum iste blanditiis, ipsum ratione.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="What can I expect at my first consultation?">What can I expect at my first consultation?</summary>
                                <p class="faq-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sequi, molestias similique! Molestiae sapiente omnis, illo facere odit reprehenderit eveniet consequuntur sit minus adipisci temporibus eius inventore quidem. Dignissimos, facere quae. Rem quas a laborum est officia pariatur voluptatum iusto perferendis aut labore fugit magni inventore nulla architecto, velit, facilis itaque.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="What are your opening hours?">What are your opening hours?</summary>
                                <p class="faq-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos error ea accusantium? Sunt cum in, repudiandae et facere at nesciunt commodi non quia earum libero aliquid labore obcaecati repellendus consequatur! Nesciunt impedit ducimus illum unde optio veritatis atque facere, voluptate a odio asperiores laudantium rerum.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="Do I need a referral?">Do I need a referral?</summary>
                                <p class="faq-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quisquam numquam labore explicabo cupiditate laboriosam. Ipsam explicabo possimus illum aspernatur.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="Is the cost of the appointment covered by private health insurance?">Is the cost of the appointment covered by private health insurance?</summary>
                                <p class="faq-content">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Explicabo quos quam asperiores enim sequi nihil? Iure blanditiis autem in ratione rerum, sequi cupiditate eos nemo iusto unde eaque voluptatum alias, porro aliquid sunt. Nesciunt veritatis, ex esse tempora laudantium officiis? Quas corrupti a aut sed quaerat, ipsa incidunt tempora velit dolor distinctio repellat tenetur illum consectetur quos veniam eius provident earum doloremque commodi! Minus amet, obcaecati rem, modi accusantium ad, deleniti possimus incidunt laudantium vitae iusto laborum culpa! Similique, repellat.</p>
                            </details>
                        </div>
                        <div>
                            <details>
                                <summary title="What are the parking and public transport options?">What are the parking and public transport options?</summary>
                                <p class="faq-content">Lorem ipsum dolor sit amet consectetur adipisicing elit. Facilis quisquam numquam labore explicabo cupiditate laboriosam. Ipsam explicabo possimus illum aspernatur.</p>
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
