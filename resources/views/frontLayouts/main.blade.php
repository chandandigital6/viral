<!doctype html>

<html>

<head>
    <title>@yield('title','SEO Services, Digital Marketing Agency That Drives ROI')</title>
{{--    <meta charset="utf-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">--}}
{{--    <meta name="description" content="Viral Business is a reliable digital marketing agency. We offer SEO, Website development, Content marketing & Social media services and much more at affordable prices.">--}}

    <link rel="canonical" href="https://viralbusinessgroup.com">
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="SEO Services, Digital Marketing Agency That Drives ROI" />
    <meta property="og:description" content="Viral Business is a reliable digital marketing agency. We offer SEO, Website development, Content marketing & Social media services and much more at affordable prices." />
    <meta property="og:url" content="https://viralbusinessgroup.com/" />
    <meta property="og:site_name" content="Viral Business" />
    <meta property="article:publisher" content="https://www.facebook.com/viralbusinessin" />
    <meta property="og:image" content="https://viralbusinessgroup.com/assets/img/logo.png" />
    <meta name="twitter:label1" content="Written by">
    <meta name="twitter:data1" content="Ankush Goyal">
    <meta name="twitter:label2" content="Est. reading time">
    <meta name="twitter:data2" content="12 minutes">

    @foreach($seos as $seo)

        <meta name="{{$seo->name}}" property="{{$seo->property}}" content="{{$seo->content}}">
    @endforeach
    <!-- Required meta tags -->

    <!-- Links of CSS files -->
    <link rel="stylesheet" href="{{asset('asset/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/flaticon.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/animate.min.css')}}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"><link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('asset/css/boxicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/meanmenu.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/nice-select.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/fancybox.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/odometer.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/magnific-popup.min.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('asset/css/responsive.css')}}">
    <link rel="icon" type="image/png" href="{{asset('asset/img/viral-fav.png')}}">
{{--    <style>--}}
{{--        .nav-link:hover, .dropdown-item:hover {--}}
{{--            background-color: red !important;--}}
{{--            color: white !important;--}}
{{--        }--}}

{{--    </style>--}}
</head>
<body>

<!-- Start Main Banner Area -->
<!-- home-popup-html=============== -->

<!-- Start Top Header Area -->
@include('frontLayouts.topbar')
<!-- End Top Header Area -->
<!-- End Top Mobile Area -->
@include('frontLayouts.header')
<!-- End Navbar Area -->
<!-- Sidebar Modal -->
{{--<div class="sidebarModal modal right fade" id="sidebarModal" tabindex="-1" role="dialog">--}}
{{--    <div class="modal-dialog" role="document">--}}
{{--        <div class="modal-content">--}}
{{--            <button type="button" class="close" data-dismiss="modal"><i class='bx bx-x'></i></button>--}}
{{--            <div class="modal-body">--}}
{{--                <div class="logo">--}}
{{--                    <a href="index.html" class="d-inline-block"><img src="{{asset('asset/img/logo.png')}}" alt="image"></a>--}}
{{--                </div>--}}
{{--                <div class="instagram-list">--}}
{{--                    <div class="row">--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">--}}
{{--                            <div class="box"> <img src="{{asset('asset/img/team-1.jpg')}}" alt="image"> <i class='bx bxl-instagram'></i>--}}
{{--                                <a href="#" target="_blank" class="link-btn"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">--}}
{{--                            <div class="box"> <img src="{{asset('asset/img/team-2.jpg')}}" alt="image"> <i class='bx bxl-instagram'></i>--}}
{{--                                <a href="#" target="_blank" class="link-btn"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">--}}
{{--                            <div class="box"> <img src="{{asset('asset/img/team-3.jpg')}}" alt="image"> <i class='bx bxl-instagram'></i>--}}
{{--                                <a href="#" target="_blank" class="link-btn"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">--}}
{{--                            <div class="box"> <img src="{{asset('asset/img/team-4.jpg')}}" alt="image"> <i class='bx bxl-instagram'></i>--}}
{{--                                <a href="#" target="_blank" class="link-btn"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">--}}
{{--                            <div class="box"> <img src="{{asset('asset/img/team-img005.jpg.jpg')}}" alt="image"> <i class='bx bxl-instagram'></i>--}}
{{--                                <a href="#" target="_blank" class="link-btn"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                        <div class="col-lg-4 col-md-4 col-sm-4 col-6">--}}
{{--                            <div class="box"> <img src="{{asset('asset/img/team-img006.jpg')}}" alt="image"> <i class='bx bxl-instagram'></i>--}}
{{--                                <a href="#" target="_blank" class="link-btn"></a>--}}
{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                </div>--}}
{{--                <div class="sidebar-contact-info">--}}
{{--                    <h2>--}}

{{--                        <a href="tel:+91 98766-66605">+91 98766-66605</a>--}}

{{--                        <span>OR</span>--}}

{{--                        <a href="mailto:info@viralbusinessgroup.com">info@viralbusinessgroup.com</a>--}}

{{--                    </h2> </div>--}}
{{--                <ul class="social-list">--}}
{{--                    <li><span>Follow Us On:</span></li>--}}
{{--                    <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>--}}
{{--                    <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>--}}
{{--                    <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>--}}
{{--                    <li><a href="#" target="_blank"><i class='bx bxl-twitch'></i></a></li>--}}
{{--                </ul>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Sidebar Modal -->
<!-- Search Overlay -->
{{--<div class="search-overlay">--}}
{{--    <div class="d-table">--}}
{{--        <div class="d-table-cell">--}}
{{--            <div class="search-overlay-layer"></div>--}}
{{--            <div class="search-overlay-layer"></div>--}}
{{--            <div class="search-overlay-layer"></div>--}}
{{--            <div class="search-overlay-close"> <span class="search-overlay-close-line"></span> <span class="search-overlay-close-line"></span> </div>--}}
{{--            <div class="search-overlay-form">--}}
{{--                <form>--}}
{{--                    <input type="text" class="input-search" placeholder="Search here...">--}}
{{--                    <button type="submit"><i class="flaticon-search"></i></button>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- End Search Overlay -->

{{--<div class="newsletter-overlay">--}}
{{--    <div id="newsletter-popup"> <a href="#" class="popup-close">X</a>--}}
{{--        <div class="newsletter-in">--}}
{{--            <h3>Unlock 3X More Customers</h3>--}}
{{--            <p>Elevate Your Business with Tailored Online Marketing Solutions</p>--}}
{{--            <form  class="validate" method="post" action="#">--}}
{{--                <div class="frm-row">--}}
{{--                    <input class="frm-name" type="text" placeholder="Your Name" name="name" required=""> </div>--}}
{{--                <div class="frm-row">--}}
{{--                    <input class="frm-email" type="text" placeholder="Your Phone Number" name="phone" required=""> </div>--}}
{{--                <div class="frm-row">--}}
{{--                    <input class="frm-business" type="text" placeholder="Business Name" name="business" required=""> </div>--}}
{{--                <div class="frm-submit">--}}
{{--                    <input type="submit" name="submit" value="Submit"> </div>--}}
{{--            </form>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</div>--}}
<!-- home-popup-html=============== -->

@yield('content')





  @include('frontLayouts.footer')



<!-- Links of JS files -->
<script src="{{asset('asset/js/jquery.min.js')}}"></script>
<script src="{{asset('asset/js/popper.min.js')}}"></script>
<script src="{{asset('asset/js/bootstrap.min.js')}} "></script>
<script src="{{asset('asset/js/appear.min.js')}} "></script>
<script src="{{asset('asset/js/odometer.min.js')}} "></script>
<script src="{{asset('asset/js/magnific-popup.min.js')}}"></script>
<script src="{{asset('asset/js/fancybox.min.js')}}"></script>
<script src="{{asset('asset/js/owl.carousel.min.js')}} "></script>
<script src="{{asset('asset/js/meanmenu.min.js')}}"></script>
<script src="{{asset('asset/js/nice-select.min.js')}} "></script>
<script src="{{asset('asset/js/sticky-sidebar.min.js')}} "></script>
<script src="{{asset('asset/js/wow.min.js')}} "></script>
<script src="{{asset('asset/js/form-validator.min.js')}} "></script>
<script src="{{asset('asset/js/contact-form-script.js')}}"></script>
<script src="{{asset('asset/js/ajaxchimp.min.js')}}"></script>
<script src="{{asset('asset/js/main.js')}} "></script>
<!-- ===============schema============= -->
<script defer type="application/ld+json">
    {
    "context" : "http://schema.org",
    "type" : "Organization",
    "name" : "Viral Business",
    "url" : "https://viralbusinessgroup.com/",
    "logo" : "https://viralbusinessgroup.com/assets/img/logo.png",
    "sameAs" : [ "http://www.fb.com/viralbusinessin",
    "https://www.linkedin.com/company/viralbusiness",
    "http://www.instagram.com/viralbusinessin",
    "https://www.youtube.com/channel/UCGfbBnL-SE_otozycjMUv4Q"]
    }
</script>
<!-- ===============schema============= -->
<script type="text/javascript">
    var TxtRotate=function(t,e,i){this.toRotate=e,this.el=t,this.loopNum=0,this.period=parseInt(i,10)||1e3,this.txt="",this.tick(),this.isDeleting=!1};TxtRotate.prototype.tick=function(){var t=this.loopNum%this.toRotate.length,e=this.toRotate[t];this.isDeleting?this.txt=e.substring(0,this.txt.length-1):this.txt=e.substring(0,this.txt.length+1),this.el.innerHTML='<span class="wrap">'+this.txt+"</span>";var i=this,s=300-200*Math.random();this.isDeleting&&(s/=2),this.isDeleting||this.txt!==e?this.isDeleting&&""===this.txt&&(this.isDeleting=!1,this.loopNum++,s=100):(s=this.period,this.isDeleting=!0),setTimeout(function(){i.tick()},s)},window.onload=function(){for(var t=document.getElementsByClassName("txt-rotate"),e=0;e<t.length;e++){var i=t[e].getAttribute("data-rotate"),s=t[e].getAttribute("data-period");i&&new TxtRotate(t[e],JSON.parse(i),s)}var o=document.createElement("style");o.type="text/css",o.innerHTML=".txt-rotate > .wrap { border-right: 0.08em solid #666 }",document.body.appendChild(o)};
</script>
<script type="text/javascript">
    $("#tile-1 .nav-tabs a").click(function(){var position=$(this).parent().position();var width=$(this).parent().width();$("#tile-1 .slider").css({"left":+position.left,"width":width})});var actWidth=$("#tile-1 .nav-tabs").find(".active").parent("li").width();var actPosition=$("#tile-1 .nav-tabs .active").position();$("#tile-1 .slider").css({"left":+actPosition.left,"width":actWidth})

</script>
<script type="text/javascript">
    jQuery(document).ready(function(){jQuery(".menubar").click(function(){jQuery("#slidemenu").toggleClass("openMenu")}),jQuery(".overlay-in").click(function(){jQuery("#slidemenu").toggleClass("openMenu")}),jQuery("#mymenu").click(function(){jQuery("#mobileMenu").toggleClass("openMenu")})});
</script>
<script type="text/javascript">
    var delay=5e3;function showNewsletterPopup(){""==getCookie("newsletter-popup")?($(".newsletter-overlay").show(),setCookie("newsletter-popup","popped",30)):console.log("Newsletter popup blocked.")}function setCookie(e,t,o){var n=new Date;n.setTime(n.getTime()+24*o*60*60*1e3);var p="expires="+n.toGMTString();document.cookie=e+"="+t+"; "+p+"; path=/"}function getCookie(e){for(var t=e+"=",o=document.cookie.split(";"),n=0;n<o.length;n++){var p=jQuery.trim(o[n]);if(0==p.indexOf(t))return p.substring(t.length,p.length)}return""}jQuery(document).ready(function(e){setTimeout(function(){showNewsletterPopup()},delay),e(".popup-close").click(function(){e(".newsletter-overlay").hide(),setCookie("newsletter-popup","popped",30)})});
</script>
</body>
</html>
