@extends('layouts.app')

@section('content')


<div class="main-content pt--125">

    <div class="rwt-contact-area rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--40">
                    <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">Contact Form</span></h4>
                        <h2 class="title w-600 mb--20">Our Contact Address Here.</h2>
                    </div>
                </div>
            </div>
            <div class="row row--15">
                <div class="col-lg-12">
                    <div class="rn-contact-address mt_dec--30">
                        <div class="row">
                            <div class="col-lg-4 col-md-6 col-12 mt-3">
                                <div class="rn-address">
                                    <div class="icon">
                                        <i class="feather-headphones"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Contact Phone Number</h4>
                                        <p><a href="tel:{{$setting->phone}}">{{$setting->phone}}</a></p>
                                        <p><a href="sms:{{$setting->sms}}">{{$setting->sms}}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12  mt-3">
                                <div class="rn-address">
                                    <div class="icon">
                                        <i class="feather-mail"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Our Email Address</h4>
                                        <p><a href="mailto:{{$setting->email}}">{{$setting->email}}</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6 col-12  mt-3">
                                <div class="rn-address">
                                    <div class="icon">
                                        <i class="feather-map-pin"></i>
                                    </div>
                                    <div class="inner">
                                        <h4 class="title">Our Location</h4>
                                        <p>{{ $setting->address }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row mt--40 row--15 pt--15">
                <div class="col-lg-7">
                    <form class="contact-form-1 rwt-dynamic-form" id="contact-form" action="{{ route("contact.send") }}" method="POST" >
                        @csrf
                        <div class="form-group">
                            <input type="text" name="name" id="name" placeholder="Your Name..." value="{{ old("name") }}" />
                            @error('name')
                                <div class="invalid-feedback d-block">{{ $message }}.</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" id="phone" placeholder="Your Phone Number..." value="{{ old("phone") }}"/>
                            @error('phone')
                                <div class="invalid-feedback d-block">{{ $message }}.</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="text" name="email" id="email" placeholder="Your Email Address..." value="{{ old("email") }}"/>
                            @error('email')
                                <div class="invalid-feedback d-block">{{ $message }}.</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <textarea name="messege" id="messege" placeholder="Your Message...">{{ old("messege") }}</textarea>
                            @error('messege')
                                <div class="invalid-feedback d-block">{{ $message }}.</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <button type="submit" id="submit" class="btn-default btn-large rn-btn">
                                <span>Submit Now</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-5 mt_md--30 mt_sm--30">
                    <div class="google-map-style-1">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14554259.179133086!2d-105.54385245388013!3d37.49334218664659!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sbd!4v1630777307491!5m2!1sen!2sbd" width="600" height="550" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
