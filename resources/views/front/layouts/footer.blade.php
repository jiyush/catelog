<!-- footer starts -->
    <footer class="footer footer-two">
        <div class="foot-top">
            <div class="container">
                <div class="row">
                    <div class="col-xl-4 col-lg-12 col-12 mb-60">
                        <div class="company-details">
                            {{-- <img src="{{ asset('/images/jcurve3.png') }}" style="height: 77.23px; width: 215px;" class="foot-logo mb-4" alt="lister"> --}}
                            <div style="height: 61.03px; width: 215px;">
                            <img  src="{{ asset('/images/jcurve3.png') }}"  class="foot-logo mb-4" >
                                
                            </div>
                            <p class="pb-2">J Curve is committed to help you find exactly
                                what you're looking for. Apart from giving you
                                up-to-date phone numbers and addresses of
                                local businesses and industries across the
                                state, we'll also give you driving directions to
                                get there! There are more than 5000 listings
                                and we’re adding more every day.
                            </p>
                            <div class="socials mt-4">
                                <a href="https://www.facebook.com/J-Curve-110256443685547">
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-google-plus-g"></i>
                                </a>
                                <a href="https://instagram.com/jcurve_india?igshid=1nz2z51io2grh">
                                    <i class="fab fa-instagram"></i>
                                </a>
                                {{-- <a href="#">
                                    <i class="fab fa-linkedin-in"></i>
                                </a>
                                <a href="#">
                                    <i class="fab fa-twitter"></i>
                                </a> --}}
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-3 col-md-6 col-sm-6 col-12 mb-60">
                        <div class="recent-post">
                            <div class="foot-title">
                                <h4>useful links</h4>
                            </div>
                            <ul class="quick-link">
                                <li>
                                    <a href="{{ route('industry.all') }}">listing</a>
                                </li>
                                <li>
                                    <a href="{{ route('about') }}">About US</a>
                                </li>
                                <li>
                                    <a href="{{ route('contactus') }}">Contact Us</a>
                                </li>
                                <li>
                                    <a href="{{ route('listing.add') }}">Add Listing</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                </div>

            </div>
        </div>
        <div class="foot-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <p class="text-capitalize">Copyright © 2019, All rights Reserved. Created by
                            <a href="#">Jcurve</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- footer end -->

    <!-- JavaScript Libraries -->
    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('assets/js/slick.min.js') }}"></script>
    <script src="{{ asset('assets/js/tilt.jquery.js') }}"></script>
    <!-- google map api  -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAAz77U5XQuEME6TpftaMdX0bBelQxXRlM&callback=initMap"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>


</body>

</html>