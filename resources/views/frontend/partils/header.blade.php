<header class="site-header js-site-header">
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-6 col-lg-4 site-logo" data-aos="fade">
                <a href="{{route('home')}}">
                    <span style="color: orange;">Wave</span> Hotel
                </a>
            </div>
                        <div class="col-6 col-lg-8">


                <div class="site-menu-toggle js-site-menu-toggle" data-aos="fade">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
                <!-- END menu-toggle -->

                <div class="site-navbar js-site-navbar">
                    <nav role="navigation">
                        <div class="container">
                            <div class="row full-height align-items-center">
                                <div class="col-md-6 mx-auto">
                                    <ul class="list-unstyled menu">
                                        <li class="active"><a href="index.html">Home</a></li>
                                        <li><a href="{{route('rooms')}}">Rooms</a></li>
                                        <li><a href="{{route('about')}}">About</a></li>
                                        <li><a href="#">Events</a></li>
                                        <li><a href="{{route('contact')}}">Contact</a></li>
                                        <li><a href="{{route('login')}}">Login</a></li>
                                        <li><a href="{{route('register')}}">Register</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
