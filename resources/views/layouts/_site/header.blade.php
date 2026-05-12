<!-- Header Start -->
<header class="main-header bg-section">
    <div class="header-sticky">
        <nav class="navbar navbar-expand-lg">
            <div class="container-fluid">
                <!-- Logo Start -->
                <a class="navbar-brand" href="{{ route('site.home') }}">
                    <img src="{{ url('site/images/favicon.png') }}" alt="Logo">
                    <span class="home-default">EventHub</span>
                </a>
                <!-- Logo End -->

                <!-- Main Menu Start -->
                <div class="collapse navbar-collapse main-menu">
                    <div class="nav-menu-wrapper">
                        <ul class="navbar-nav mr-auto" id="menu">
                            <li class="nav-item"><a class="nav-link" href="{{ route('site.home') }}">Inicio</a>
                               {{--  <ul>
                                    <li class="nav-item"><a class="nav-link" href="index-2.html">Home - Main</a></li>
                                    <li class="nav-item"><a class="nav-link" href="index-video.html">Home - Video</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="index-slider.html">Home - Slider</a>
                                    </li>
                                </ul> --}}
                            </li>
                            <li class="nav-item"><a class="nav-link" href="about.html">Sobre Nós</a>
                            <li class="nav-item"><a class="nav-link" href="{{ route('site.events') }}">Eventos</a></li>
                            {{-- <li class="nav-item"><a class="nav-link" href="blog.html">Blog</a></li>
                            <li class="nav-item submenu"><a class="nav-link" href="#">Pages</a>
                                <ul>
                                    <li class="nav-item"><a class="nav-link" href="service-single.html">Service
                                            Details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="blog-single.html">Blog Details</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="projects.html">Projects</a></li>
                                    <li class="nav-item"><a class="nav-link" href="project-single.html">Project
                                            details</a></li>
                                    <li class="nav-item"><a class="nav-link" href="team.html">Our Team</a></li>
                                    <li class="nav-item"><a class="nav-link" href="team-single.html">Team Details</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="pricing.html">Our Pricing</a></li>
                                    <li class="nav-item"><a class="nav-link" href="testimonials.html">Testimonials</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="image-gallery.html">Image Gallery</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="video-gallery.html">Video Gallery</a>
                                    </li>
                                    <li class="nav-item"><a class="nav-link" href="faqs.html">FAQs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="404.html">404</a></li>
                                </ul>
                            </li> --}}
                            <li class="nav-item"><a class="nav-link" href="{{ route('site.contacts') }}">Contacte Nos</a></li>
                        </ul>
                    </div>

                    <!-- Header Btn Start -->
                    <div class="header-btn">
                        <a href="contact.html" class="btn-default">Junte-se a Nós</a>
                    </div>
                    <!-- Header Btn End -->
                </div>
                <!-- Main Menu End -->
                <div class="navbar-toggle"></div>
            </div>
        </nav>
        <div class="responsive-menu"></div>
    </div>
</header>
<!-- Header End -->
