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
            <h1 class="page-title">Software Development</h1>
            <ul>
                <li title="Brinke Solutions - IT Digital Solutions for you">
                    <a class="active" href="{{route('home')}}">Home</a>
                </li>
                <li title="Go To Services">
                    <a class="active" href="{{route('services')}}">Services</a>
                </li>
                <li>Software Development</li>
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
                        <span class="sub-text">Software Development</span>
                        <h2 class="title">We Help Your Business Scale up with Digital Products</h2>
                        <div class="heading-line"></div>
                        <div class="desc desc-big">
                            Choosing the best software development partner is crucial to building a successful digital
                            product. So choose Brinke Solutions.
                        </div>
                        <div class="desc">
                            Software development starts with a company that you can trust and be sure that your idea is
                            accepted, understood by the team. Brinke Solutions ensures the commitment, clean code, fast
                            performance – generally, a digital product that pleases your eye, makes business lucrative
                            and you
                            would not need to rearrange it, rebuild or redesign.
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
                                <h3 class="services-title"><a href="#">High Quality</a></h3>
                                <p class="services-desc">
                                    Custom solutions designed for your business.
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
                                <h3 class="services-title"><a href="#">Focused Team</a></h3>
                                <p class="services-desc">
                                    Meet a dedicated Team of Developers
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
                                <h3 class="services-title"><a href="#">Transparency</a></h3>
                                <p class="services-desc">
                                    We apply seamless and periodic communication
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
