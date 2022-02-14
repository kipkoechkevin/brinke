<header id="rs-header" class="rs-header style3 header-transparent">
    <!-- Topbar Area Start -->
    <div class="topbar-area style2 modify1">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-8">
                    <div class="topbar-contact">
                        <ul>
                            <li>
                                <i class="flaticon-email"></i>
                                <a href="mailto:support@rstheme.com">hello@brinke.co.ke</a>
                            </li>
                            <li>
                                <i class="flaticon-call"></i>
                                <a href="tel:++1(990)999–5554"> +254 724 134 143</a>
                            </li>
                            <li>
                                <i class="flaticon-location"></i>
                                Langata Rd, Nairobi, Kenya
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 text-right">
                    <div class="toolbar-sl-share">
                        <ul>
                            <li class="opening"><em><i class="flaticon-clock"></i> 08:00am-6:00pm</em></li>
                            <li><a href="#"><i class="fab fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar Area End -->
    <!-- Menu Start -->
    <div class="menu-area menu-sticky">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <div class="logo-part">
                        <a href="{{route('home')}}">
                            <img class="normal-logo" src={{URL::asset('assets/images/logo-white.png')}} alt="logo">
                            <img class="sticky-logo" src={{URL::asset('assets/images/logo-dark.png')}} alt="logo">
                        </a>
                    </div>
                    <div class="mobile-menu">
                        <a href="#" class="rs-menu-toggle rs-menu-toggle-close">
                            <i class="fab fa-bars"></i>
                        </a>
                    </div>
                </div>
                <div class="col-lg-9 text-right">
                    <div class="rs-menu-area">
                        <div class="main-menu">
                            <nav class="rs-menu pr-70 md-pr-0">
                                <ul class="nav-menu">
                                    <li>
                                        <a href="{{route('home')}}">Home</a>
                                    </li>
                                    <li>
                                        <a href="{{route('about')}}">About</a>
                                    </li>
                                    <li class="menu-item-has-children">
                                        <a href="#">Services</a>
                                        <ul class="sub-menu">
                                            <li><a href="{{route('software')}}">Software Development</a></li>
                                            <li><a href="{{route('web')}}">Web Development</a></li>
                                            <li><a href="{{route('seo')}}">SEO Optimization</a></li>
                                            <li><a href="{{route('digital')}}">Digital Marketing</a></li>
                                            <li><a href="{{route('ui')}}">UX & UI Design</a></li>
                                            <li><a href="{{route('consultation')}}">Consultation</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="{{route('contact')}}">Contact</a>
                                    </li>
                                </ul> <!-- //.nav-menu -->
                            </nav>
                        </div> <!-- //.main-menu -->
                        <div class="expand-btn-inner search-icon hidden-md">
                            <ul>
                                <li class="sidebarmenu-search">
                                    <a class="hidden-xs rs-search" data-target=".search-modal" data-toggle="modal"
                                       href="{{route('home')}}">
                                        <i class="flaticon-search"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Menu End -->
</header>

