@include('front.layouts.head')
@include('front.layouts.header')
<!-- page-banner start-->
    {{-- <section class="page-banner">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h3>About</h3>
                    <ul class="banner-link text-center">
                        <li>
                            <a href="{{ route('root') }}">Home</a>
                        </li>
                        <li>
                            <span class="active">About Us</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> --}}
    {{-- end banner --}}

    <!-- about start-->
    <div class="about-1 o-hide bg-w sp-100">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 align-self-end">
                    <div class="abt-img">
                        <img src="assets/img/pages/abt-mockup.png" alt="mockup">
                    </div>
                </div>
                <div class="col-lg-6 mt-lg-0 mt-5">
                    <h4>About Us</h4>
                    <p>
                    	J Curve is committed to help you find exactly what you're looking for.
						From restaurants that will help you curb those food cravings to find the
						best home contractors in your area, we'll help you find it all. Apart from
						giving you up-to-date phone numbers and addresses of local businesses
						across the state, we'll also give you driving directions to get there!
						You will also be able to choose the services enriching the next user’s
						experience. There are more than 5000 listings of local businesses on
						J Curve and we’re dedicated to adding more every day.
                    </p>
                </div>

            </div>
        </div>
    </div>
    <!-- about end-->

@include('front.layouts.footer')