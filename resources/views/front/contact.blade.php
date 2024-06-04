@extends('frontLayouts.main')
@section('title', 'Contact')
@section('content')


    <!-- Start Page Title Area -->
    <section class="page-title-area page-title-style-two">
        <div class="container">
            <div class="page-title-content">
                <h1>Contact</h1> </div>
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



    <!-- Start Contact Info Area -->
    <section class="contact-info-area pt-100 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon"> <i class='bx bx-map'></i> </div>
                        <div class="icon"> <i class='bx bx-map'></i> </div>
                        <h3>Our Address</h3>
                        <p>Office No- 3, Ranjit Tower, Pakhowal Road, Ludhiana (Punjab) 141001 India.</p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="contact-info-box">
                        <div class="back-icon"> <i class='bx bx-phone-call'></i> </div>
                        <div class="icon"> <i class='bx bx-phone-call'></i> </div>
                        <h3>Contact</h3>
                        <p>Mobile: <a href="tel:+91 98766-66605">+91 98766-66605</a></p>
                        <p>E-mail: <a href="mailto:info@viralbusinessgroup.com">info@viralbusinessgroup.com</a></p>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 offset-lg-0 offset-md-3">
                    <div class="contact-info-box">
                        <div class="back-icon"> <i class='bx bx-time-five'></i> </div>
                        <div class="icon"> <i class='bx bx-time-five'></i> </div>
                        <h3>Hours of Operation</h3>
                        <p>Monday - Saturday
                            <br> 10:00am - 6:00pm</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Info Area -->
    <!-- Start Contact Area -->
    <section class="contact-area pb-100">
        <div class="container">
            <div class="section-title"> <span class="sub-title">Get in Touch</span>
                <h2>Ready to Get Started?<span class="overlay"></span></h2>
                <p>Your email address will not be published. Required fields are marked *</p>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12">
                    <div class="contact-form">
                        <form id="contactForm1" method="post" action="#">
                            <div class="row">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="text" name="name" class="form-control" id="name1" required data-error="Please enter your name" placeholder="Your name">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <input type="email" name="email" class="form-control" id="email1" required data-error="Please enter your email" placeholder="Your email address">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <input type="text" name="mobile" class="form-control" id="phone_number1" required data-error="Please enter your phone number" placeholder="Your phone number">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <textarea name="comment" id="message1" class="form-control" cols="30" rows="6" required data-error="Please enter your message" placeholder="Write your message..."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn" name="submit">Send Message</button>

                                    <div id="msgSubmit" class="h3 text-center hidden"></div>
                                    <div class="clearfix"></div>
                                </div>

                            </div>
                        </form>
                        <!--
                                                <form method="post" action="email1.php">
                                                    <input type="text" name="name" placeholder="enter the name">
                                                    <input type="text" name="email"  placeholder="enter the email">
                                                    <input type="text" name="mobile"  placeholder="enter the mobile">
                                                    <input type="text" name="comment"  placeholder="enter the comment">
                                                    <input type="submit" name="submit" value="submit">
                                                </form>-->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Contact Area -->
    <!-- Start Map Area -->
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3423.7561152489234!2d75.82683011461484!3d30.893482884919482!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x391a83ca1bf799b9%3A0x5feff5b10c7fc136!2sRanjit%20Tower%2C%20Pakhowal%20Rd%2C%20Gurdev%20Nagar%2C%20Ludhiana%2C%20Punjab%20141001!5e0!3m2!1sen!2sin!4v1602231759044!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
    </div>
    <!-- End Map Area -->
    <!-- Start Subscribe Area -->
    <section class="subscribe-area ptb-100">
        <div class="container">
            <div class="subscribe-content"> <span class="sub-title">Viral Business</span>
                <h2>Subscribe To Our Newsletter</h2>
                <p>Viral Business can help to reduce the hassle by offering great and tailored services to suit the clients. </p>
                <form class="newsletter-form" data-toggle="validator" method="post" action="email.php">
                    <input type="text" name="email" class="input-newsletter" placeholder="Enter your email address" name="email" required autocomplete="off">
                    <button type="submit" class="default-btn">Subscribe Now</button>
                    <div id="validator-newsletter" class="form-result"></div>
                </form>
            </div>
        </div>
        <div class="shape9"><img src="assets/img/shape/shape9.png" alt="shape9"></div>
        <div class="shape10"><img src="assets/img/shape/shape10.png" alt="shape10"></div>
        <div class="shape11"><img src="assets/img/shape/shape11.png" alt="shape11"></div>
        <div class="shape12"><img src="assets/img/shape/shape12.png" alt="shape12"></div>
    </section>

@endsection
