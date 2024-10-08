@extends('layout')

@section('title', 'Simple Web')

@section('header')
    <div class="jumbotron jumbotron-fluid" id="banner" style="background-image: url(img/a.webp);">
        <div class="container text-center text-md-left">
            <header>
                <div class="row justify-content-between">
                    <div class="col-2">
                        <img src="https://placehold.co/40" alt="logo">
                    </div>

                </div>
            </header>
            <h1 data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="display-3 text-white font-weight-bold my-5">
                Lorem ipsum dolor<br>
                Lorem ipsum dolor
            </h1>
            <a href="#" data-aos="fade" data-aos-easing="linear" data-aos-duration="1000" data-aos-once="true" class="btn my-4 font-weight-bold atlas-cta cta-green">Get Started</a>
        </div>
    </div>
@endsection

@section('content')
    <div class="container my-5 py-2">
        <h2 class="text-center font-weight-bold my-5">Smartest protection for your site</h2>
        <div class="row">
            <div data-aos="fade-up" data-aos-delay="0" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="https://placehold.co/100" alt="Anti-spam" class="mx-auto">
                <h4>Hello</h4>
                <p>Lorem ipsum dolor sit amet porro his no his deleniti</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="https://placehold.co/100" alt="Phishing Detect" class="mx-auto">
                <h4>Hello</h4>
                <p>Lorem ipsum dolor sit amet porro his no his deleniti</p>
            </div>
            <div data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center">
                <img src="https://placehold.co/100" alt="Smart Scan" class="mx-auto">
                <h4>Hello</h4>
                <p>Lorem ipsum dolor sit amet porro his no his deleniti</p>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid feature" id="feature-first">
        <div class="container my-5">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6">
                    <h2 class="font-weight-bold">Take a look inside</h2>
                    <p class="my-4">Te iisque labitur eos, nec sale argumentum scribentur no,
                        <br> augue disputando in vim. Erat fugit sit at, ius lorem deserunt deterruisset no.</p>
                    <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-blue">Learn More</a>
                </div>
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center">
                    <img src="https://placehold.co/100" alt="Take a look inside" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>
    <div class="jumbotron jumbotron-fluid feature" id="feature-last">
        <div class="container">
            <div class="row justify-content-between text-center text-md-left">
                <div data-aos="fade-left" data-aos-duration="1000" data-aos-once="true" class="col-md-6 flex-md-last">
                    <h2 class="font-weight-bold">Safe and reliable</h2>
                    <p class="my-4">
                        Duo suas detracto maiestatis ad, commodo lucilius invenire nec ad,
                        <br> eum et oratio disputationi. Falli lobortis his ad
                    </p>
                    <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-blue">Learn More</a>
                </div>
                <div data-aos="fade-right" data-aos-duration="1000" data-aos-once="true" class="col-md-6 align-self-center flex-md-first">
                    <img src="https://placehold.co/100" alt="Safe and reliable" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <!-- price table -->
    <div class="container my-5 py-2" id="price-table">
        <h2 class="text-center font-weight-bold d-block mb-3">Check our pricing</h2>
        <div class="row">
            <div data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5">
                <h4 class="my-4">STARTUP</h4>
                <p class="font-weight-bold">$ <span class="display-2 font-weight-bold">0</span> / MO.</p>
                <ul class="list-unstyled">
                    <li>Up to 5 Documents</li>
                    <li>Up to 3 Reviews</li>
                    <li>5 team Members</li>
                    <li>Limited Support</li>
                </ul>
                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Free</a>
            </div>
            <div data-aos="fade-up" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5 rounded" id="price-table__premium">
                <h4 class="my-4">PREMIUM</h4>
                <p class="font-weight-bold">$ <span class="display-2 font-weight-bold">10</span> / MO.</p>
                <ul class="list-unstyled">
                    <li>Up to 15 Documents</li>
                    <li>Up to 10 Reviews</li>
                    <li>25 team Members</li>
                    <li>Limited Support</li>
                </ul>
                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-green">Get Free</a>
            </div>
            <div data-aos="fade-left" data-aos-delay="200" data-aos-duration="1000" data-aos-once="true" class="col-md-4 text-center py-4 mt-5">
                <h4 class="my-4">PROFESSIONAL</h4>
                <p class="font-weight-bold">$ <span class="display-2 font-weight-bold">30</span> / MO.</p>
                <ul class="list-unstyled">
                    <li>Unlimited Documents</li>
                    <li>Unlimited Reviews</li>
                    <li>Unlimited Members</li>
                    <li>Unlimited Support</li>
                </ul>
                <a href="#" class="btn my-4 font-weight-bold atlas-cta cta-ghost">Get Free</a>
            </div>
        </div>
    </div>
    <!-- client -->
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="https://placehold.co/100" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="https://placehold.co/100" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="https://placehold.co/100" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="https://placehold.co/100" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="https://placehold.co/100" class="mx-auto d-block">
                </div>
                <div class="col-sm-4 col-md-2 py-2 align-self-center">
                    <img src="https://placehold.co/100" class="mx-auto d-block">
                </div>
            </div>
        </div>
    </div>

    <div class="jumbotron jumbotron-fluid" id="copyright">
        <div class="jumbotron jumbotron-fluid" id="contact">
            <div class="container my-5">
                <div class="row justify-content-between">
                    <div class="col-md-6 text-white-new">
                        <h2 class="font-weight-bold">Contact Us</h2>
                        <p class="my-4">
                            Te iisque labitur eos, nec sale argumentum scribentur,
                            <br> augue disputando in vim. Erat fugit sit at, ius lorem.
                        </p>
                        <ul class="list-unstyled">
                            <li>Email : demo@com</li>
                            <li>Phone : 361-688-5824</li>
                            <li>Address : 4826 demodemo, den Christi, Texas</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <form>
                            <div class="row">
                                <div class="form-group col-md-6">
                                    <label for="name">Your Name</label>
                                    <input type="name" class="form-control" id="name" required>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="Email">Your Email</label>
                                    <input type="email" class="form-control" id="Email" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="message">Message</label>
                                <textarea class="form-control" id="message" rows="3" required></textarea>
                            </div>
                            <button type="submit" class="font-weight-bold atlas-cta atlas-cta-wide cta-green my-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
@endsection

@section('footer')
        <!-- copyright -->
        <div class="jumbotron jumbotron-fluid" id="copyright">
            <div class="container">
                <div class="row justify-content-between">
                    <div class="col-md-6 text-white align-self-center text-center text-md-left my-2">
                        Copyright © 2024 ff, .
                    </div>
                    <div class="col-md-6 align-self-center text-center text-md-right my-2" id="social-media">

                        <a href="https://www.linkedin.com/in/asadullah-nadeem/" class="d-inline-block text-center ml-2">
                            <i class="fa fa-linkedin" aria-hidden="true"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

@endsection
