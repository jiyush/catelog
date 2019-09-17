@include('front.layouts.head')
@include('front.layouts.header')

<!-- page-banner start-->
<section class="page-banner">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3>Contact Us</h3>
                <ul class="banner-link text-center">
                    <li>
                        <a href="{{ route('root') }}">Home</a>
                    </li>
                    <li>
                            <span class="active">Contact Us</span>
                        </li>
                </ul>
            </div>
        </div>
    </div>
</section>
{{-- end banner --}}

<!-- contact start-->
    <section class="bg-w sp-100 pb-lg-0">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="contact-box">
                        <div class="d-block d-xl-flex">
                            <div class="contact-left">
                                <h4 class="mb-4">get in touch</h4>
                                <form class="custom-form" method="post" action="{{ route('contact.email') }}">
                                	@csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <span class="fa fa-user"></span>
                                            <input type="text" name="name" id="name" class="form-control" placeholder="Enter Name" required>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <span class="fa fa-envelope"></span>
                                            <input type="email" name="email" class="form-control" placeholder="Enter Email" name="Ented email" id="email" required>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <span class="fa fa-phone"></span>
                                            <input type="text" id="phn" name="phone" class="form-control" placeholder="Enter Number" required>
                                        </div>
                                        {{-- <div class="col-md-6 col-12">
                                            <span class="fa fa-edit"></span>
                                            <input type="email" class="form-control" placeholder="Enter Email" name="Ented email" id="subject">
                                        </div> --}}
                                        <div class="col-12">
                                            <span class="fa fa-edit"></span>
                                            <textarea rows="5" name="comment" class="form-control" placeholder="Your Message" id="comment" required ></textarea>
                                        </div>
                                        <div class="col-12">
                                            <button type="submit" class="btn btn-one btn-anim" id="submit" style="background-color: #228ACA !important;color: #fff;" name="submit">
                                                send message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <div class="contact-right">
                                <h4 class="mb-4">contact info</h4>
                                <p>We are constantly open to new ideas,
									opportunities and suggestions. If
									you've got anything to say about
									J curve, please let us know.</p>
                                <ul class="contact-info mt-4">
                                    <li>
                                        <i class="fa fa-phone"></i>
                                        7567825768
                                    </li>
                                    <li>
                                        <i class="fa fa-envelope"></i>
                                        jcurveindia@gmail.com
                                    </li>
                                    <li>
                                        <i class="fa fa-map-marker-alt"></i>
                                         Daman, 396191
                                    </li>
                                </ul>
                                <div class="socials contact-social">
                                    <a href="#">
                                        <i class="fab fa-facebook-f"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-google-plus-g"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-instagram"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-linkedin-in"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-twitter"></i>
                                    </a>
                                    <a href="#">
                                        <i class="fab fa-vine"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact end -->
    <!-- map start-->
    {{-- <div class="map">
        <div id="theme-map"></div>
    </div> --}}
    <!-- map end -->



@include('front.layouts.footer')