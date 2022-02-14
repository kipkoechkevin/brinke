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
            <h1 class="page-title">Web Development</h1>
            <ul>
                <li title="Brinke Solutions - IT Digital Solutions for you">
                    <a class="active" href="{{route('home')}}">Home</a>
                </li>
                <li title="Go To Services">
                    <a class="active" href="{{route('services')}}">Services</a>
                </li>
                <li>Web Development</li>
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
                        <span class="sub-text">Web Development</span>
                        <h2 class="title">We Help Your Business Grow with Custom Web Solutions</h2>
                        <div class="heading-line"></div>
                        <div class="desc desc-big">
                            We closely work with you at every stage of the development process from the ideation stage
                            through design and finally deployment of your website.
                        </div>
                        <div class="desc">
                            Developing a world-class web application requires an experienced team of experts, doing
                            multiple tasks in different fields. Hiring an in-house team of developers is time consuming,
                            expensive and often difficult. At Brinke Solutions, you can quickly and easily onboard a talented and
                            experienced dev team to design & develop your web application. Get your solutions launched
                            on time and within budget with our comprehensive end-to-end web app development service.
                        </div>
                        <div class="btn-part mt-45">
                            <a class="readon learn-more" href="{{route('contact')}}">Start Here</a>
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
                                <h3 class="services-title"><a href="#">Transform your idea</a></h3>
                                <p class="services-desc">
                                    We help you choose the right Tech.
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
                                <h3 class="services-title"><a href="#">Innovate</a></h3>
                                <p class="services-desc">
                                    Stay ahead of the Market Trends.
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
                                <h3 class="services-title"><a href="#">Become a Digital Beacon</a></h3>
                                <p class="services-desc">
                                    Stand out from the rest
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

