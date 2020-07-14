<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title>Car Valuate</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- favicon -->
    <link rel="shortcut icon" href="images/favicon.ico">

    <!-- css -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/materialdesignicons.min.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('css/style.min.css') }}" rel="stylesheet" type="text/css" />

</head>

<body>

    <!-- Loader -->
    <div id="preloader">
        <div id="status">
            <div class="spinner"></div>
        </div>
    </div>

    <!--Navbar Start-->
    <nav class="navbar navbar-expand-lg fixed-top navbar-custom sticky sticky-dark">
        <div class="container">
            <!-- LOGO -->
            <a class="navbar-brand logo" href="index.html">
                <img src="{{ asset('images/logo-png.png') }}" alt="" class="logo-dark" height="24" />
                <img src="{{ asset('images/logo-png.png') }}" alt="" class="logo-light" height="24" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <i class="mdi mdi-menu"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav mx-auto navbar-center" id="mySidenav">
                    <li class="nav-item active">
                        <a href="#home" class="nav-link">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="#features" class="nav-link">Features</a>
                    </li>
                    <li class="nav-item">
                        <a href="#pricing" class="nav-link">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a href="#contact" class="nav-link">Contact Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav navbar-center">
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link">Register</a>
                    </li>
                </ul>
                {{-- <ul class="navbar-nav navbar-center">
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter">Log in</a>
                    </li>
                    <li class="nav-item">
                        <a href="#login" class="nav-link" data-toggle="modal" data-target="#exampleModalCenter-1">Register</a>
                    </li>
                </ul> --}}
            </div>
        </div>
    </nav>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <section class="hero-1-bg" style="background-image: url({{ asset('images/hero-1-bg-img.png') }})" id="home">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-lg-6">
                    <h1 class="hero-1-title text-dark font-weight-bold text-shadow mb-4">Car Valuate</h1>
                    <div class="w-75 mb-5 mb-lg-0">
                        <p class="text-muted mb-5 pb-5 font-size-17">CarValuate is a Web Application that uses trained Machine Learning Models to predict Car Prices.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-10">
                    <div class=" mt-5 mt-lg-0">
                        <img src="{{ asset('images/car.png') }}" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero End -->

    <!-- Why Choose Us Start -->
    <section class="section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4">
                    <div class="mb-4 mb-lg-0">
                        <div class="p-2 bg-soft-primary d-inline-block rounded mb-4">
                            <div class="icon-xxl uim-icon-primary"><i class="uim uim-cube"></i></div>
                        </div>
                        <h3 class="">Why Choose Us ?</h3>
                        <p class="text-muted mb-4">We provide insights to help you make the best sale.</p>
                        <a href="#" class="btn btn-outline-primary">Learn More</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="wc-box rounded text-center wc-box-primary p-4 mt-md-5">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-collage"></i>
                                </div>
                                <h5 class="font-weight-bold mb-2 wc-title mt-4">Esay To Use</h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                            </div>
                            <div class="wc-box rounded text-center wc-box-primary p-4">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-trending-up"></i>
                                </div>
                                <h5 class="font-weight-bold mb-2 wc-title mt-4">Grow Your Revenue</h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="wc-box rounded text-center wc-box-primary p-4">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-security"></i>
                                </div>
                                <h5 class="font-weight-bold mb-2 wc-title mt-4">Analytics Security</h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                            </div>
                            <div class="wc-box rounded text-center wc-box-primary p-4">
                                <div class="wc-box-icon">
                                    <i class="mdi mdi-database-lock"></i>
                                </div>
                                <h5 class="font-weight-bold mb-2 wc-title mt-4">Data Privacy</h5>
                                <p class="text-muted mb-0 font-size-15 wc-subtitle">Sed ut perspiciatis unde omnis iste natus error sit voluptatem.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Why Choose Us End -->

    <!-- Features Start -->
    <section class="section bg-light feather-bg-img" style="background-image: url(images/features-bg-img.png);" id="features">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3">Awesome Features</h3>
                        <p class="text-muted font-size-15">Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta nobis eligendi cumque.</p>
                    </div>
                </div>
            </div>

            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="mb-4 mb-lg-0">
                        <img src="{{ asset('images/features-img.png') }}" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>

                <div class="col-lg-5 offset-lg-1">
                    <p class="font-weight-medium text-uppercase mb-2"><i class="mdi mdi-chart-bubble h2 text-primary mr-1 align-middle"></i> Creative Features</p>
                    <h3 class="font-weight-semibold line-height-1_4 mb-4">Build <b>community</b> & <b>conversion</b> with our suite of <b>social tool</b></h3>
                    <p class="text-muted font-size-15 mb-4">Temporibus autem quibusdam et aut officiis debitis aut rerum a necessitatibus saepe eveniet ut et voluptates repudiandae sint molestiae non recusandae itaque.</p>
                    <p class="text-muted mb-2"><i class="icon-xs mr-1" data-feather="layout"></i> Donec pede justo fringilla vel nec.</p>
                    <p class="text-muted"><i class="icon-xs mr-1" data-feather="life-buoy"></i> Cras ultricies mi eu turpis hendrerit fringilla.</p>
                    <div class="mt-5">
                        <a href="#" class="btn btn-primary mr-2">Read More</a>
                        <a href="#" class="btn btn-soft-primary">Buy Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section feather-bg-img" style="background-image: url({{ asset('images/features-bg-img-1.png') }})">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <p class="font-weight-medium text-uppercase mb-2"><i class="mdi mdi-chart-bubble h2 text-primary mr-1 align-middle"></i> Creative Features</p>
                    <h3 class="font-weight-semibold line-height-1_4 mb-4">We do the work you <b>stay focused</b> on <b>your customers</b>.</h3>
                    <!-- <h3 class="font-weight-semibold line-height-1_4 mb-4">Build <b>community</b> & <b>conversion</b> with our suite of <b>social tool</b></h3> -->
                    <p class="text-muted font-size-15 mb-4">Temporibus autem quibusdam et aut officiis debitis aut rerum a necessitatibus saepe eveniet ut et voluptates repudiandae sint molestiae non recusandae itaque.</p>
                    <p class="text-muted mb-2"><i class="icon-xs mr-1" data-feather="server"></i> Donec pede justo fringilla vel nec.</p>
                    <p class="text-muted"><i class="icon-xs mr-1" data-feather="rss"></i> Cras ultricies mi eu turpis hendrerit fringilla.</p>
                    <div class="mt-5">
                        <a href="#" class="btn btn-primary mr-2">Read More</a>
                        <a href="#" class="btn btn-soft-primary">Buy Now</a>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-1">
                    <div class="mt-4 mt-lg-0">
                        <img src="{{ asset('images/features-img-1.png') }}" alt="" class="img-fluid d-block mx-auto">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Features End -->

    <!-- Pricing Start -->
    <section class="section bg-light" id="pricing">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3">Choose Your Plan</h3>
                        <p class="text-muted font-size-15">Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta nobis eligendi cumque.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4">
                    <div class="pricing-box rounded text-center p-4">
                        <div class="pricing-icon-bg my-4">
                            <i class="mdi mdi-account h1"></i>
                        </div>
                        <h4 class="title mb-3">Simple</h4>
                        <h1 class="font-weight-bold mb-0"><b><sup class="h4 mr-2 font-weight-bold">$</sup>19</b></h1>
                        <p class="text-muted font-weight-semibold">User / Month</p>
                        <ul class="list-unstyled pricing-item mb-4">
                            <li class="text-muted">Bandwidth: 1GB</li>
                            <li class="text-muted">Onlinespace: 500MB</li>
                            <li class="text-muted">Support: Yes</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary pr-btn">Buy Now</a>
                        <div class="mt-4">
                            <div class="hero-bottom-img">
                                <img src="{{ asset('images/pricing-bottom-bg.png') }}" alt="" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box rounded text-center active p-4">
                        <div class="pricing-icon-bg my-4">
                            <i class="mdi mdi-account-multiple h1"></i>
                        </div>
                        <h4 class="title mb-3">Basic</h4>
                        <h1 class="font-weight-bold mb-0"><b><sup class="h4 mr-2 font-weight-bold">$</sup>49</b></h1>
                        <p class="text-muted font-weight-semibold">User / Month</p>
                        <ul class="list-unstyled pricing-item mb-4">
                            <li class="text-muted">Bandwidth: 2GB</li>
                            <li class="text-muted">Onlinespace: 1GB</li>
                            <li class="text-muted">Support: Yes</li>
                        </ul>
                        <a href="#" class="btn btn-primary pr-btn">Buy Now</a>
                        <div class="mt-4">
                            <div class="hero-bottom-img">
                                <img src="{{ asset('images/pricing-bottom-bg.png') }}" alt="" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="pricing-box rounded text-center p-4">
                        <div class="pricing-icon-bg my-4">
                            <i class="mdi mdi-account-group h1"></i>
                        </div>
                        <h4 class="title mb-3">Pro</h4>
                        <h1 class="font-weight-bold mb-0"><b><sup class="h4 mr-2 font-weight-bold">$</sup>89</b></h1>
                        <p class="text-muted font-weight-semibold">User / Month</p>
                        <ul class="list-unstyled pricing-item mb-4">
                            <li class="text-muted">Bandwidth: 3GB</li>
                            <li class="text-muted">Onlinespace: 1.5GB</li>
                            <li class="text-muted">Support: Yes</li>
                        </ul>
                        <a href="#" class="btn btn-outline-primary pr-btn">Buy Now</a>
                        <div class="mt-4">
                            <div class="hero-bottom-img">
                                <img src="{{ asset('images/pricing-bottom-bg.png') }}" alt="" class="img-fluid d-block mx-auto">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Pricing End -->

    <!-- Contact Us Start -->
    <section class="section bg-light" id="contact">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="text-center mb-5">
                        <h3 class="title mb-3">Contact Us</h3>
                        <p class="text-muted font-size-15">Et harum quidem rerum facilis est et expedita distinctio nam libero tempore cum soluta nobis eligendi cumque.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-lg-7">
                    <div class="custom-form mb-5 mb-lg-0">
                        <div id="message"></div>
                        <form method="post" action="php/contact.php" name="contact-form" id="contact-form">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Name*</label>
                                        <input name="name" id="name" type="text" class="form-control" placeholder="Your name...">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email Address*</label>
                                        <input name="email" id="email" type="email" class="form-control" placeholder="Your email...">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="comments">Message*</label>
                                        <textarea name="comments" id="comments" rows="4" class="form-control" placeholder="Your message..."></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <button type="submit" id="submit" name="send" class="btn btn-primary">Send Message <i class="icon-size-15 ml-2 icon" data-feather="send"></i></button>
                                    <div id="simple-msg"></div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-5">
                    <div class="contact-detail text-muted ml-lg-5">
                        <p class=""><i class="icon-xs icon mr-1" data-feather="mail"></i> : <span>support@website.com</span></p>
                        <p class=""><i class="icon-xs icon mr-1" data-feather="link"></i> : <span>www.website.com</span></p>
                        <p class=""><i class="icon-xs icon mr-1" data-feather="phone-call"></i> : <span>(+001) 123 456 7890</span></p>
                        <p class=""><i class="icon-xs icon mr-1" data-feather="clock"></i> : <span>9:00 AM - 6:00 PM</span></p>
                        <p class=""><i class="icon-xs icon mr-1" data-feather="map-pin"></i> : <span>1644 Deer Ridge Drive Rochelle Park, NJ 07662</span></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Contact Us End -->

    <!-- Footer Start -->
    <section class="footer" style="background-image: url({{ asset('images/footer-bg.png') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="mb-5">
                        <img src="images/logo-light.png" alt="" class="" height="24">
                        <p class="text-white-50 my-4 font-size-15">Cras ultricies mi eu turpis sit hendrerit fringilla vestibulum ante ipsum primis in faucibus ultrices posuere cubilia.</p>
                        <ul class="list-inline footer-social-icon-content">
                            <li class="list-inline-item mr-4"><a href="#" class="footer-social-icon"><i class="" data-feather="facebook"></i></a></li>
                            <li class="list-inline-item mr-4"><a href="#" class="footer-social-icon"><i class="" data-feather="twitter"></i></a></li>
                            <li class="list-inline-item mr-4"><a href="#" class="footer-social-icon"><i class="" data-feather="instagram"></i></a></li>
                            <li class="list-inline-item"><a href="#" class="footer-social-icon"><i class="" data-feather="linkedin"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-7 offset-lg-1">
                    <div class="row">
                        <div class="col-md-4">
                            <h6 class="text-white text-uppercase mb-4">About Us</h6>
                            <ul class="list-unstyled footer-sub-menu">
                                <li><a href="#" class="footer-link">Works</a></li>
                                <li><a href="#" class="footer-link">Strategy</a></li>
                                <li><a href="#" class="footer-link">Releases</a></li>
                                <li><a href="#" class="footer-link">Press</a></li>
                                <li><a href="#" class="footer-link">Mission</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-white text-uppercase mb-3">Customers</h6>
                            <ul class="list-unstyled footer-sub-menu">
                                <li><a href="#" class="footer-link">Tranding</a></li>
                                <li><a href="#" class="footer-link">Popular</a></li>
                                <li><a href="#" class="footer-link">Customers</a></li>
                                <li><a href="#" class="footer-link">Features</a></li>
                            </ul>
                        </div>
                        <div class="col-md-4">
                            <h6 class="text-white text-uppercase mb-3">Support</h6>
                            <ul class="list-unstyled footer-sub-menu">
                                <li><a href="#" class="footer-link">Developers</a></li>
                                <li><a href="#" class="footer-link">Support</a></li>
                                <li><a href="#" class="footer-link">Customer Service</a></li>
                                <li><a href="#" class="footer-link">Get Started</a></li>
                                <li><a href="#" class="footer-link">Guide</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="footer-alt py-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center">
                        <p class="text-white-50 font-size-15 mb-0">2020 © Lezir. Design By Themesbrand</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- login Modal Start -->
    {{-- <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <h3 class="title mb-4">Welcome To Lezir</h3>
                        <h4 class="text-uppercase text-primary"><b>Login</b></h4>
                    </div>
                    <div class="login-form mt-4">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputEmail1">Username / Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Youremail@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <a href="#" class="float-right text-muted font-size-15">Forgot Password.?</a>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck1">
                                <label class="custom-control-label font-size-15" for="customCheck1">Remember Me</label>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">Login <i class="icon-size-15 icon ml-1" data-feather="arrow-right-circle"></i></button>
                            </div>
                        </form>
                        <div class="position-relative text-center mt-4">
                            <span class="login-border"></span>
                            <p class="social-login text-muted font-size-17">Social Login</p>
                        </div>
                        <div class="text-center">
                            <ul class="list-inline mt-2 mb-3">
                                <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-primary"><i class="icon-xs" data-feather="facebook"></i></a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-info"><i class="icon-xs" data-feather="twitter"></i></a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-danger"><i class="icon-xs" data-feather="instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="login-social-icon icon-success"><i class="icon-xs" data-feather="linkedin"></i></a></li>
                            </ul>
                            <p class="text-muted mb-0">New User? <a href="#" class="text-primary">Signup</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- login Modal End -->

    <!-- Register Modal Start-->
    {{-- <div class="modal fade" id="exampleModalCenter-1" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <div class="text-center">
                        <h3 class="title mb-4">Welcome To Lezir</h3>
                        <h4 class="text-uppercase text-primary"><b>Register</b></h4>
                    </div>
                    <div class="login-form mt-4">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputUsername">User Name</label>
                                <input type="text" class="form-control" id="exampleInputUsername" placeholder="Enter Name">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail2">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail2" placeholder="Youremail@gmail.com">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword2">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword2" placeholder="Password">
                            </div>
                            <a href="#" class="float-right text-muted font-size-15">Forgot Password.?</a>
                            <div class="custom-control custom-checkbox">
                                <input type="checkbox" class="custom-control-input" id="customCheck2">
                                <label class="custom-control-label font-size-15" for="customCheck2">Remember Me</label>
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-primary">Register <i class="icon-size-15 icon ml-1" data-feather="arrow-right-circle"></i></button>
                            </div>
                        </form>
                        <div class="position-relative text-center mt-4">
                            <span class="login-border"></span>
                            <p class="social-login text-muted font-size-17">Social Login</p>
                        </div>
                        <div class="text-center">
                            <ul class="list-inline mt-2 mb-3">
                                <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-primary"><i class="icon-xs" data-feather="facebook"></i></a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-info"><i class="icon-xs" data-feather="twitter"></i></a></li>
                                <li class="list-inline-item mr-3"><a href="#" class="login-social-icon icon-danger"><i class="icon-xs" data-feather="instagram"></i></a></li>
                                <li class="list-inline-item"><a href="#" class="login-social-icon icon-success"><i class="icon-xs" data-feather="linkedin"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> --}}
    <!-- Register Modal Start-->


    <!-- javascript -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('js/scrollspy.min.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <!-- feather icon -->
    <script src="{{ asset('js/feather.js') }}"></script>
    <!-- unicons icon -->
    <script src="{{ asset('js/unicons.js') }}"></script>
    <!-- Main Js -->
    <script src="{{ asset('js/landing.js') }}"></script>

</body>
</html>
