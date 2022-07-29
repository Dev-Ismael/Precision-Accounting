@extends('layouts.app')

@section('content')


<div class="main-content pt--125">

    <div class="rwt-contact-area rn-section-gap">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 mb--40">
                    <div class="section-title text-center sal-animate" data-sal="slide-up" data-sal-duration="700" data-sal-delay="100">
                        <h4 class="subtitle "><span class="theme-gradient">FILL THE BELOW FORM TO GET YOUR
                        </span></h4>
                        <h2 class="title w-600 mb--20">Free Consulting Now
                            </h2>
                    </div>
                </div>
            </div>


            <div class="row mt--40 row--15 pt--15">
                <div class="col-lg-7">
                    <form class="contact-form-1 rwt-dynamic-form" id="contact-form" method="POST" action="mail.php">
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="first_name" id="first_name" placeholder="First Name..." required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="last_name" id="last_name" placeholder="Last Name..." required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="phone" id="phone" placeholder="Phone Number..." required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="email" id="email" placeholder="Email Address..." required/>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="business_name" id="business_name" placeholder="Business Name..." required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="business_service" id="business_service" placeholder="Business Service..." required/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-6">
                                <div class="form-group">
                                    <input type="text" name="business_type" id="business_type" placeholder="Business Type..." required/>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-group">
                                    <select name="state" required="">

                                        <option selected="selected" disabled="">Select a State...</option>

                                        <option value="AL">Alabama</option>

                                        <option value="AK">Alaska</option>

                                        <option value="AZ">Arizona</option>

                                        <option value="AR">Arkansas</option>

                                        <option value="CA">California</option>

                                        <option value="CO">Colorado</option>

                                        <option value="CT">Connecticut</option>

                                        <option value="DE">Delaware</option>

                                        <option value="DC">District Of Columbia</option>

                                        <option value="FL">Florida</option>

                                        <option value="GA">Georgia</option>

                                        <option value="HI">Hawaii</option>

                                        <option value="ID">Idaho</option>

                                        <option value="IL">Illinois</option>

                                        <option value="IN">Indiana</option>

                                        <option value="IA">Iowa</option>

                                        <option value="KS">Kansas</option>

                                        <option value="KY">Kentucky</option>

                                        <option value="LA">Louisiana</option>

                                        <option value="ME">Maine</option>

                                        <option value="MD">Maryland</option>

                                        <option value="MA">Massachusetts</option>

                                        <option value="MI">Michigan</option>

                                        <option value="MN">Minnesota</option>

                                        <option value="MS">Mississippi</option>

                                        <option value="MO">Missouri</option>

                                        <option value="MT">Montana</option>

                                        <option value="NE">Nebraska</option>

                                        <option value="NV">Nevada</option>

                                        <option value="NH">New Hampshire</option>

                                        <option value="NJ">New Jersey</option>

                                        <option value="NM">New Mexico</option>

                                        <option value="NY">New York</option>

                                        <option value="NC">North Carolina</option>

                                        <option value="ND">North Dakota</option>

                                        <option value="OH">Ohio</option>

                                        <option value="OK">Oklahoma</option>

                                        <option value="OR">Oregon</option>

                                        <option value="PA">Pennsylvania</option>

                                        <option value="RI">Rhode Island</option>

                                        <option value="SC">South Carolina</option>

                                        <option value="SD">South Dakota</option>

                                        <option value="TN">Tennessee</option>

                                        <option value="TX">Texas</option>

                                        <option value="UT">Utah</option>

                                        <option value="VT">Vermont</option>

                                        <option value="VA">Virginia</option>

                                        <option value="WA">Washington</option>

                                        <option value="WV">West Virginia</option>

                                        <option value="WI">Wisconsin</option>

                                        <option value="WY">Wyoming</option>

                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <select name="meeting" required="">

                                <option selected="selected" disabled="" style="color:#000;">Meeting Type </option>

                                <option value="Zoom Meeting">Zoom Meeting </option>

                                <option value="Phone Call Meeting">Phone Call Meeting </option>

                                <option value="Office Meeting">Office Meeting </option>

                            </select>
                        </div>


                        <div class="form-group">
                            <textarea name="contact-message" id="contact-message" placeholder="Your Message"></textarea>
                        </div>


                        <div class="form-group">
                            <button name="submit" type="submit" id="submit" class="btn-default btn-large rn-btn">
                                <span>Submit Now</span>
                            </button>
                        </div>

                    </form>
                </div>
                <div class="col-lg-5 mt_md--30 mt_sm--30">
                    <div class="google-map-style-1">
                        <img src="{{ asset("doob_template_assets/images/free-consulting.jpeg") }}" class="free-consulting rounded" alt="free-consulting">
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>


@endsection
