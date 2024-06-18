<header class="head-main">
    <div class="mobilelogo">
        <a href="{{route('home')}}"><img src="{{asset('asset/img/logo-white0.png')}}" alt="logo"></a>
    </div>
    <section id="slidemenu" class="firstmenu">
        <div class="overlay-in"></div>
        <div id="mymenu" class="opendmenu">
            <ul class="nav navbar-nav">
                <li class="active"><a href="{{route('home')}}">Home</a></li>
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="{{route('about')}}">About Us <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('about')}}">About Us</a></li>
                        <li><a href="{{route('team')}}">Our Team</a></li>
                        <li><a href="{{route('join-us')}}">Join Us</a></li>
                        <li><a href="{{route('jobs')}}">Jobs</a></li>
                    </ul>
                </li>
{{--                @php--}}
{{--                    $serviceMenu=\App\Models\Service::all();--}}
{{--                    dd($serviceMenu);--}}
{{--                @endphp--}}
                <li class="dropdown"> <a class="dropdown-toggle" data-toggle="dropdown" href="javascript:void(0)">Services <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="{{route('search-engine-optimization')}}">Search Engine Optimization</a></li>
                        <li><a href="{{route('local-seo')}}">Local SEO</a></li>
                        <li><a href="{{route('ppc')}}">Pay Per Click Management</a></li>
                        <li><a href="">Google Analytics Service</a></li>
                        <li><a href="{{route('conversion-rate')}}">Conversion Rate Optimization</a></li>
                        <li><a href="{{route('social-media-marketing')}}">Social Media Management</a></li>
                        <li><a href="{{route('social-brand-management')}}">Social Media Brand Management</a></li>
                        <li><a href="{{route('online-reputation-management')}}">Online Reputation Management</a></li>
                        <li><a href="{{route('social-media-paid-advertising')}}">Social Media Paid Advertising</a></li>
                        <li><a href="{{route('custom-website')}}">Custom Website Design</a></li>
                        <li><a href="{{route('content-writing')}}">Content Writing</a></li>
                        <li><a href="{{route('content-marketing')}}">Content Marketing</a></li>
                        <li><a href="{{route('email-marketing')}}">Email Marketing Services</a></li>
                        <li><a href="{{route('youTube-marketing')}}">YouTube Video Marketing</a></li>
                        <li><a href="{{route('youTube-monetization')}}">Youtube Channel Monetization</a></li>
                        <li><a href="{{route('video-production')}}">Video Production</a></li>
                    </ul>
                </li>
                <li><a href="{{route('blogCard')}}">Blogs</a></li>
                <li><a href="{{route('testimonial')}}">Reviews</a></li>
                <li><a href="{{route('contact')}}">Contact Us</a></li>
                <li><a href="{{route('portfolio')}}">portfolio</a></li>
            </ul>
        </div>
    </section>
    <div class="menubar"> <span class="bar one"></span> <span class="bar two"></span> <span class="bar three"></span> </div>
</header>
<!-- End Top Mobile Area -->
<!-- Start Navbar Area -->
<div class="navbar-area navbar-style-two">
    <div class="dibiz-responsive-nav">
        <div class="container-fluid">
            <div class="dibiz-responsive-menu">
                <div class="logo">
                    <a href="{{route('home')}}"> <img src="{{asset('asset/img/logo.png')}}" alt="logo"> </a>
                </div>
            </div>
        </div>
    </div>
    <div class="dibiz-nav">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-light">
                <a class="navbar-brand head-logo" href="{{route('home')}}"> <img src="{{asset('asset/img/logo.png')}}" alt="logo"> </a>
                <a class="navbar-brand sticky-logo" href="{{route('home')}}"> <img src="{{asset('asset/img/logo-white0.png')}}" alt="logo"> </a>
                <div class="header-fixed__bottom container">
                    <ul class="top-menu header-fixed__menu">
                        <li class="top-menu__menu-item">
                            <div class="dropdown__trigger top-menu__menu-link"> <a class="dropdown__title " href="{{route('home')}}">Home</a> </div>
                        </li>
                        <li class="top-menu__menu-item">
                            <div class="dropdown"> <a class="dropdown__trigger top-menu__menu-link" href="{{route('about')}}">About Us &dtrif;</a>
                                <div class="dropdown__menu setabout">
                                    <div class="dropdown__column setcolumn">
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('team')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Our Team</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('join-us')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Join Us</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('jobs')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Jobs</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('portfolio')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>PortFolio</a> </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="top-menu__menu-item">
                            <div class="dropdown"> <a class="dropdown__trigger top-menu__menu-link" href="javascript:void(0)">Services &dtrif;</a>
                                <div class="dropdown__menu">
                                    <div class="dropdown__column">
                                        <div class="dropdown__title">Digital Marketing</div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('search-engine-optimization')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Search Engine Optimization</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('local-seo')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Local SEO</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link " href="{{route('ppc')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Pay Per Click Management</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href=""><i class="fa fa-caret-right" aria-hidden="true"></i>Google Analytics Service</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('conversion-rate')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Conversion Rate Optimization</a> </div>
                                    </div>
                                    <div class="dropdown__column">
                                        <div class="dropdown__title">Social Media Marketing</div>
                                        <!-- <div class="dropdown__item">

                                                    <a class="dropdown__link" href="social-media-marketing.php"><i class="fa fa-caret-right" aria-hidden="true"></i>Social Media Marketing</a>

                                                </div> -->
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('social-media-marketing')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Social Media Management</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('social-brand-management')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Social Media Brand Management</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('online-reputation-management')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Online Reputation Management</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('social-media-paid-advertising')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Social Media Paid Advertising</a> </div>
                                    </div>
                                    <div class="dropdown__column">
                                        <div class="dropdown__title">Website Design</div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('custom-website')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Custom Website Design</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('content-writing')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Content Writing</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('content-marketing')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Content Marketing</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('email-marketing')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Email Marketing Services</a> </div>
                                    </div>
                                    <div class="dropdown__column">
                                        <div class="dropdown__title">Video Marketing</div>
                                        <div class="dropdown__item"> <a class="dropdown__link" href="{{route('youTube-marketing')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>YouTube Video Marketing</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link " href="{{route('youTube-monetization')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Youtube Channel Monetization</a> </div>
                                        <div class="dropdown__item"> <a class="dropdown__link " href="{{route('video-production')}}"><i class="fa fa-caret-right" aria-hidden="true"></i>Video Production</a> </div>

                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="top-menu__menu-item">
                            <div class="dropdown__trigger top-menu__menu-link"> <a class="dropdown__title " href="{{route('blogCard')}}">Blogs</a> </div>
                        </li>
                        <li class="top-menu__menu-item">
                            <div class="dropdown__trigger top-menu__menu-link"> <a class="dropdown__title " href="{{route('testimonial')}}">Reviews</a> </div>
                        </li>
                        <li class="top-menu__menu-item">
                            <div class="dropdown__trigger top-menu__menu-link"> <a class="dropdown__title " href="{{route('contact')}}">Contact Us</a> </div>
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
    <div class="others-option-for-responsive">
        <div class="container">
            <div class="dot-menu">
                <div class="inner">
                    <div class="circle circle-one"></div>
                    <div class="circle circle-two"></div>
                    <div class="circle circle-three"></div>
                </div>
            </div>
            <div class="container">
                <div class="option-inner">
                    <div class="others-option justify-content-center d-flex align-items-center">
                        <div class="option-item">
                            <div class="search-box"> <i class="flaticon-search"></i> </div>
                        </div>
                        <div class="option-item">
                            <div class="side-menu-btn"> <i class="flaticon-menu" data-toggle="modal" data-target="#sidebarModal"></i> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
