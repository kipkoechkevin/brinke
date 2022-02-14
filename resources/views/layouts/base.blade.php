<!DOCTYPE html>
<html lang="zxx">
<head>
    <!-- meta tag -->
    <meta charset="utf-8">
    <title>Brinke| Web Applications & Digital Solutions</title>
    <meta name="description" content="">
    <!-- responsive tag -->
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon -->
    <link rel="apple-touch-icon" href="">
    <link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
    <!-- Bootstrap v4.4.1 css -->
    <link rel="stylesheet" type="text/css" href={{asset('assets/css/bootstrap.min.css') }}>
    <!-- flaticon css -->
    <link rel="stylesheet" type="text/css" href={{asset('assets/fonts/flaticon.css')}}>
    <!-- animate css -->
    <link rel="stylesheet" type="text/css" href={{asset('assets/css/animate.css')}}>
    <!-- owl.carousel css -->
    <link rel="stylesheet" type="text/css" href={{asset('assets/css/owl.carousel.css')}}>
    <!-- slick css -->
    <link rel="stylesheet" type="text/css" href={{asset('assets/css/slick.css')}}>
    <!-- off canvas css -->
    <link rel="stylesheet" type="text/css" href={{asset('assets/css/off-canvas.css')}}>
    <!-- magnific popup css -->
    <link rel="stylesheet" type="text/css" href={{asset('assets/css/magnific-popup.css')}}>
    <!-- Main Menu css -->
    <link rel="stylesheet" href={{asset('assets/css/rsmenu-main.css')}}>
    <!-- spacing css -->
    <link rel="stylesheet" type="text/css" href={{asset('assets/css/rs-spacing.css')}}>
    <!-- style css -->
    <link rel="stylesheet" type="text/css" href={{asset('style.css')}}>
    <!-- This stylesheet dynamically changed from style.less -->
    <!-- responsive css -->
    <link rel="stylesheet" type="text/css" href={{asset('assets/css/responsive.css')}}>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
          integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    @livewireStyles
</head>
<body class="defult-home">

<!--Preloader area start here-->
<div id="loader" class="loader">
    <div class="loader-container"></div>
</div>
<!--Preloader area End here-->
{{$slot}}
<!-- Footer Start -->
<footer id="rs-footer" class="rs-footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-sm-12 footer-widget">
                    <div class="footer-logo mb-30">
                        <a href="{{route('home')}}"><img src={{URL::asset('assets/images/logo-light.png')}} alt=""></a>
                    </div>
                    <div class="textwidget pb-30"><p>Brinke Solutions. Lets connect</p>
                    </div>
                    <ul class="footer-social md-mb-30">
                        <li>
                            <a href="#" target="_blank"><span><i class="fab fa-facebook"></i></span></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><span><i class="fab fa-twitter"></i></span></a>
                        </li>
                        <li>
                            <a href="#" target="_blank"><span><i class="fab fa-instagram"></i></span></a>
                        </li>

                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                    <h3 class="widget-title">Digital Services</h3>
                    <ul class="site-map">
                        <li><a href="{{route('software')}}">Software Development</a></li>
                        <li><a href="{{route('web')}}">Web Development</a></li>
                        <li><a href="{{route('seo')}}">SEO Optimization</a></li>
                        <li><a href="{{route('digital')}}">Digital Marketing</a></li>
                        <li><a href="{{route('ui')}}">UX & UI Design</a></li>
                        <li><a href="{{route('consultation')}}">Consultation</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 md-mb-30">
                    <h3 class="widget-title">Contact Info</h3>
                    <ul class="address-widget">
                        <li>
                            <i class="flaticon-location"></i>
                            <div class="desc">Bethel Center, Langata Rd, Nairobi, Kenya</div>
                        </li>
                        <li>
                            <i class="flaticon-call"></i>
                            <div class="desc">
                                <a href="tel:(+880)155-69569">(+254)724-134-143</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-email"></i>
                            <div class="desc">
                                <a href="mailto:support@rstheme.com">hello@brinke.co.ke</a>
                            </div>
                        </li>
                        <li>
                            <i class="flaticon-clock-1"></i>
                            <div class="desc">
                                Opening Hours: 10:00 - 18:00
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 col-sm-12 pl-45 md-pl-15 md-mb-30">
                    <h3 class="widget-title">IT Services</h3>
                    <ul class="site-map">
                        <li><a href="#">Privacy Policy</a></li>
                        <li><a href="#">Legal</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row y-middle">
                <div class="col-lg-6 text-right md-mb-10 order-last">
                    <ul class="copy-right-menu">
                        <li><a href="{{route('home')}}">Home</a></li>
                        <li><a href="{{route('about')}}">About</a></li>
                        <li><a href="{{route('about')}}">Services</a></li>
                        <li><a href="{{route('contact')}}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>&copy; {{now()->year}} All Rights Reserved.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->

<!-- start scrollUp  -->
<div id="scrollUp" class="orange-color">
    <i class="fa fa-angle-up"></i>
</div>
<!-- End scrollUp  -->

<!-- Search Modal Start -->
<div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
        <span class="flaticon-cross"></span>
    </button>
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="search-block clearfix">
                <form>
                    <div class="form-group">
                        <input class="form-control" placeholder="Search Here..." type="text">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Search Modal End -->

<!-- modernizr js -->
<script src={{asset('assets/js/modernizr-2.8.3.min.js')}}></script>
<!-- jquery latest version -->
<script src={{asset('assets/js/jquery.min.js')}}></script>
<!-- Bootstrap v4.4.1 js -->
<script src={{asset('assets/js/bootstrap.min.js')}}></script>
<!-- Menu js -->
<script src={{asset('assets/js/rsmenu-main.js')}}></script>
<!-- op nav js -->
<script src={{asset('assets/js/jquery.nav.js')}}></script>
<!-- owl.carousel js -->
<script src={{asset('assets/js/owl.carousel.min.js')}}></script>
<!-- wow js -->
<script src={{asset('assets/js/wow.min.js')}}></script>
<!-- Skill bar js -->
<script src={{asset('assets/js/skill.bars.jquery.js')}}></script>
<script src={{asset('assets/js/jquery.counterup.min.js')}}></script>
<!-- counter top js -->
<script src={{asset('assets/js/waypoints.min.js')}}></script>
<!-- swiper js -->
<script src={{asset('assets/js/swiper.min.js')}}></script>
<!-- particles js -->
<script src={{asset('assets/js/particles.min.js')}}></script>
<!-- magnific popup js -->
<script src={{asset('assets/js/jquery.magnific-popup.min.js')}}></script>
<!-- plugins js -->
<script src={{asset('assets/js/plugins.js')}}></script>
<!-- pointer js -->
<script src={{asset('assets/js/pointer.js')}}></script>
<!-- contact form js -->
<script src={{asset('assets/js/contact.form.js')}}></script>
<!-- main js -->
<script src={{asset('assets/js/main.js')}}></script>
@livewireScripts
</body>
</html>
