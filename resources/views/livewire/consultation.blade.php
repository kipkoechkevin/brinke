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
            <h1 class="page-title">Consultation</h1>
            <ul>
                <li title="Brinke Solutions - IT Digital Solutions for you">
                    <a class="active" href="{{route('home')}}">Home</a>
                </li>
                <li title="Go To Services">
                    <a class="active" href="{{route('services')}}">Services</a>
                </li>
                <li>Consultation</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->
    <div class="rs-about pt-120 pb-120 md-pt-80 md-pb-80">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12 pr-40 md-pr-15 md-mb-50">
                    <div class="sec-title4">
                        <span class="sub-text">Digital Consultation</span>
                        <h2 class="title">We Help to Remove Guesswork in Your Business</h2>
                        <div class="heading-line"></div>
                        <div class="desc desc-big">
                            Got any business concerns, Unsure of the next step ? its completely normal. Even geniuses
                            need the right inspiration and guidance from time to time.
                        </div>
                        <div class="desc">
                            We provide you with a growth strategy for your business in a digital manner after carefully
                            analysing and crafting the best personalised solution for your business. Our experts provide
                            innovative and well researched frameworks that fit different businesses model for both long
                            term and short term periods.
                        </div>
                        <div class="btn-part mt-45">
                            <a class="readon learn-more" href="{{route('contact')}}">Contact Us</a>
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
                                <h3 class="services-title"><a href="#">Personalised strategy</a></h3>
                                <p class="services-desc">
                                    Look for a match.
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
                                <h3 class="services-title"><a href="#">Expert Views</a></h3>
                                <p class="services-desc">
                                    Various modeled industries
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
                                <h3 class="services-title"><a href="#">Innovative Solutions</a></h3>
                                <p class="services-desc">
                                   We think ahead
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Services Section End -->
    </div>
</div>
