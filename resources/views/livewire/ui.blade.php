<div class="main-content">

    <!--Full width header Start-->
    <div class="full-width-header">
        <!--Header Start-->
    @livewire('header-component')
    <!--Header End-->
    </div>
    <!--Full width header End-->

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img2">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">UX & UI Design</h1>
            <ul>
                <li title="Brinke Solutions - IT Digital Solutions for you">
                    <a class="active" href="{{route('home')}}">Home</a>
                </li>
                <li title="Go To Services">
                    <a class="active" href="{{route('services')}}">Services</a>
                </li>
                <li>UX & UI Design</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- About Section Start -->
    <div class="rs-about pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 pr-40 md-pr-15 md-mb-50">
                    <div class="sec-title4">
                        <span class="sub-text">UX & UI Design</span>
                        <h2 class="title">Let us Help You Create Engaging User Experience</h2>
                        <div class="heading-line"></div>
                        <div class="desc desc-big">
                            Allow us to us to create compelling experiences that increases user's acquisition and
                            illuminate your brand.
                        </div>
                        <div class="desc">
                            We design your product with users in mind. We know if we solve user problems, they’ll come
                            back again and again. That’s why we pay close attention to flows and not individual screens
                            and each of our team members has a design mindset.
                        </div>
                        <div class="btn-part mt-45">
                            <a class="readon learn-more" href="{{route('contact')}}">Let's Talk</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section Start -->
        <div class="rs-services style5 pt-120 md-pt-80">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src={{URL::asset('assets/images/services/style7/1.png')}} alt="Images">
                            </div>
                            <div class="services-content">
                                <h3 class="services-title"><a href="{{route('ui')}}">Design Web & Mobile</a></h3>
                                <p class="services-desc">
                                    Seamless UI for different devices
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 md-mb-30">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src={{URL::asset('assets/images/services/style7/2.png')}} alt="Images">
                            </div>
                            <div class="services-content">
                                <h3 class="services-title"><a href="{{route('ui')}}">Understand your User</a></h3>
                                <p class="services-desc">
                                   Increase the customer conversion rate
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="services-item">
                            <div class="services-icon">
                                <img src={{URL::asset('assets/images/services/style7/3.png')}} alt="Images">
                            </div>
                            <div class="services-content">
                                <h3 class="services-title"><a href="{{route('ui')}}">Validate Ideas</a></h3>
                                <p class="services-desc">
                                   Reduce risk by quickly creating prototype
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->
    </div>
    <!-- About Section End -->
</div>
