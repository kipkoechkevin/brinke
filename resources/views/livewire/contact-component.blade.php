<div class="main-content">
    <!--Full width header Start-->
    <div class="full-width-header">
        <!--Header Start-->
    @livewire('header-component')
    <!--Header End-->
    </div>
    <!--Full width header End-->

    <!-- Breadcrumbs Start -->
    <div class="rs-breadcrumbs img3">
        <div class="breadcrumbs-inner text-center">
            <h1 class="page-title">Contact</h1>
            <ul>
                <li title="Brinke Solutions - IT and Digital Solutions">
                    <a class="active" href="{{route('home')}}">Home</a>
                </li>
                <li>Contact</li>
            </ul>
        </div>
    </div>
    <!-- Breadcrumbs End -->

    <!-- Contact Section Start -->
    <div class="rs-contact pt-120 md-pt-80">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 md-mb-60">
                    <div class="contact-box">
                        <div class="sec-title mb-45">
                            <span class="sub-text new-text white-color">Let's Talk</span>
                            <h2 class="title white-color">Speak With The Digital Experts.</h2>
                        </div>
                        <div class="address-box mb-25">
                            <div class="address-icon">
                                <i class="fa fa-home"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Email:</span>
                                <a href="mailto:hello@brinkesolutions.co.ke">hello@brinkesolutions.co.ke</a>
                            </div>
                        </div>
                        <div class="address-box mb-25">
                            <div class="address-icon">
                                <i class="fa fa-phone"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Phone:</span>
                                <a href="tel:0724134143">+254 724 134 143</a>
                            </div>
                        </div>
                        <div class="address-box">
                            <div class="address-icon">
                                <i class="fa fa-map-marker"></i>
                            </div>
                            <div class="address-text">
                                <span class="label">Address:</span>
                                <div class="desc">Langata Rd, Nairobi, Kenya</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 pl-70 md-pl-15">
                    <div class="contact-widget">
                        <div class="sec-title2 mb-40">
                            <span class="sub-text contact mb-15">Get In Touch</span>
                            <h2 class="title testi-title">Fill The Form Below</h2>
                        </div>
                        @if($successMessage)
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ $successMessage }}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        @endif
                        <div id="form-messages"></div>
                        <form method="post" wire:submit.prevent="submitForm">
                            <fieldset>
                                <div class="row">
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        {{$name}}
                                        <input wire:model.defer="name" class="from-control" type="text" id="name"
                                               name="name"
                                               placeholder="Name" value="{{old('name')}}">
                                        @error('name')
                                        <div style="color: orangered; font-size: 12px;">
                                             {{$message}}
                                         </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input wire:model.defer="email" class="from-control" type="text" id="email"
                                               name="email"
                                               placeholder="E-Mail" value="{{old('email')}}" >
                                        @error('email')
                                        <div style="color: orangered; font-size: 12px;">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input wire:model.defer="phone" class="from-control" type="text" id="phone"
                                               name="phone"
                                               placeholder="Phone Number" value="{{old('phone')}}" >
                                        @error('phone')
                                        <div style="color: orangered; font-size: 12px;">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                    <div class="col-lg-6 mb-30 col-md-6 col-sm-6">
                                        <input wire:model.defer="subject" class="from-control" type="text" id="subject"
                                               name="Subject"
                                               placeholder="Subject" value="{{old('subject')}}" >
                                        @error('subject')
                                        <div style="color: orangered; font-size: 12px;">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>

                                    <div class="col-lg-12 mb-30">
                                        <textarea wire:model.defer="message" class="from-control" id="message"
                                                  name="message" value="{{old('message')}}"
                                                  placeholder="Your message Here" >
                                        </textarea>
                                        @error('message')
                                        <div style="color: orangered; font-size: 12px;">
                                            {{$message}}
                                        </div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="btn-part">
                                    <div class="form-group mb-0">
                                        <input class="readon learn-more submit" type="submit" value="Submit Now">
                                    </div>
                                </div>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact Section Start -->
</div>
