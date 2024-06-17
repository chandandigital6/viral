<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="" class="brand-link">
        <img src="{{ asset('logo.jpg') }}" alt="AdminLTE Logo"
             class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Real Victory  </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('asset/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth::user()->name }}</a>

            </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
       with font-awesome or any other icon font library -->


                <li class="nav-item">
                    <a href="{{route('auth.dashboard')}}" class="nav-link">
                        <i class="nav-icon far fa-calendar-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nav-icon fa fa-address-book"></i>
                        <p>home</p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <a href="{{ route('banner.index') }}" class="dropdown-item text-dark">Banner</a>
                        <a href="{{ route('homeContent.index') }}" class="dropdown-item text-dark">HomeContent</a>
                        <a href="{{ route('homeProject.index') }}" class="dropdown-item text-dark">HomeProject</a>
                        <a href="{{ route('logo.index') }}" class="dropdown-item text-dark">ClientLogo</a>

                    </div>
                </li>



                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nav-icon fa fa-address-book"></i>
                        <p>About</p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <a href="{{ route('about.index') }}" class="dropdown-item text-dark">About Us</a>
                        <a href="{{ route('choose.index') }}" class="dropdown-item text-dark">Choose Us</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a href="{{route('team.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-group"></i>
                        <p>
                            Team Member
                        </p>
                    </a>
                </li>


                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="aboutDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nav-icon fa fa-address-book"></i>
                        <p>Join page</p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="aboutDropdown">
                        <a href="{{ route('joins.index') }}" class="dropdown-item text-dark">Join Us</a>
                        <a href="{{ route('plan.index') }}" class="dropdown-item text-dark">JoinUS Benefits</a>
                    </div>
                </li>

                <li class="nav-item">
                    <a href="{{route('jobs.index')}}" class="nav-link">
                        <i class="nav-icon 	fa fa-anchor"></i>
                        <p>
                            Jobs
                        </p>
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" id="servicesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="nav-icon fa fa-bullseye"></i>
                        <p>Services</p>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="servicesDropdown">
                        <a href="{{ route('service.index') }}" class="dropdown-item text-dark">Our Services</a>
                        <a href="{{ route('ServiceDetails.index') }}" class="dropdown-item text-dark">ServicesSection</a>
                        <a href="{{ route('serviceBenefits.index') }}" class="dropdown-item text-dark">ServiceBenefits</a>
                        <a href="{{ route('serviceContent.index') }}" class="dropdown-item text-dark">ServiceContent</a>
                        <a href="{{ route('serviceVideo.index') }}" class="dropdown-item text-dark">ServiceVideoSection</a>
                        <a href="{{route('faq.index')}}" class="dropdown-item text-dark">ServiceFAQ</a>
                    </div>
                </li>


                <li class="nav-item">
                    <a href="{{route('testimonial.index')}}" class="nav-link">
                        <i class="nav-icon 	fa fa-fax"></i>
                        <p>
                            Testimonials
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                    <a href="{{route('appointment.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-american-sign-language-interpreting"></i>
                        <p>
                            Appointment
                        </p>
                    </a>
                </li>


                <li class="nav-item">
                     <a href="{{route('blogs.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-asterisk"></i>
                        <p>
                            Blog
                        </p>
                    </a>
                </li>
{{--                <li class="nav-item">--}}
{{--                     <a href="{{route('counter.index')}}" class="nav-link">--}}
{{--                        <i class="nav-icon fa fa-cog"></i>--}}
{{--                        <p>--}}
{{--                          Counter--}}
{{--                        </p>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li class="nav-item">
                     <a href="{{route('category.index')}}" class="nav-link">
                        <i class="nav-icon 	fa fa-fan"></i>
                        <p>
                            MenuCategory
                        </p>
                    </a>
                </li>



                <li class="nav-item">
                     <a href="{{route('menu.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-podcast"></i>
                        <p>
                         Menus
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('seo.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-podcast"></i>
                        <p>
                            SEO
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('logout')}}" class="nav-link">
                        <i class="nav-icon fa fa-support"></i>
                        <p>
                           Logout
                        </p>
                    </a>
                </li>




            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
