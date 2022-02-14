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
            <h1 class="page-title">SEO Optimization</h1>
            <ul>
                <li title="Brinke Solutions - IT Digital Solutions for you">
                    <a class="active" href="{{route('home')}}">Home</a>
                </li>
                <li title="Go To Services">
                    <a class="active" href="{{route('services')}}">Services</a>
                </li>
                <li>SEO Optimization</li>
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
                        <span class="sub-text">SEO Optimization</span>
                        <h2 class="title">We Help You to Be More Accessible to Your Clients</h2>
                        <div class="heading-line"></div>
                        <div class="desc desc-big">
                            Being online means countless possibilities and accessibility for those far away, not mobile,
                            or looking for the best service outside their living zone.
                        </div>
                        <div class="desc">
                            We stick to tried and true strategies that we know will have the highest impact on your
                            bottom line. Forget the fluff and empty promises of other companies, we offer services that
                            are more likely to be profitable and sustainable.Our growth-focused team will work with you
                            to create a comprehensive SEO and paid media strategy that aligns with the overall goals of
                            your company.
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
                                <h3 class="services-title"><a href="#">Real Data</a></h3>
                                <p class="services-desc">
                                   Rate your Competitors
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
                                <h3 class="services-title"><a href="#">Search Tools</a></h3>
                                <p class="services-desc">
                                    Get the keywords.
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
                                <h3 class="services-title"><a href="web-development.html">User  Engagement</a></h3>
                                <p class="services-desc">
                                    Rank up to the top.
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
