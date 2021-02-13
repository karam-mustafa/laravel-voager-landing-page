<!DOCTYPE html>
<html lang="en" dir="{{setting('site.direction')}}">
<head>
    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
    <meta name="description" content=""/>
    <meta name="author" content=""/>
    <title>{{setting('site.title')}}</title>
    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}"/>
    <!-- Font Awesome icons (free version)-->
    <script src="https://use.fontawesome.com/releases/v5.15.1/js/all.js" crossorigin="anonymous"></script>
    <!-- Google fonts-->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css"/>
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet"
          type="text/css"/>
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
    <link href="{{asset('css/customize.css')}}" rel="stylesheet"/>
    <style>
        *{

        }
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        p{
            text-align: @php setting('site.direction') == 'ltr' ? 'left' : 'right'  @endphp !important;
        }
    </style>
</head>
<body id="page-top">
<!-- Navigation-->
<nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
    <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
            @if(Voyager::image(setting('site.logo')) == null)
                <h4>{{myTrans('site_logo')}}</h4>
            @else
                <img class="logo" src="{{Voyager::image(setting('site.logo'))}}">
            @endif
        </a>
        <button
            class="navbar-toggler navbar-toggler-right text-uppercase font-weight-bold bg-primary text-white rounded"
            type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive"
            aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
                @foreach(getLinkedSections($sections) as $section)
                    <li class="nav-item mx-0 mx-lg-1">
                        <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" href="#{{$section->title}}">
                            {{$section->title}}
                        </a>
                    </li>
                @endforeach
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                                                     href="#portfolio">Portfolio</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                                                     href="#about">About</a></li>
                <li class="nav-item mx-0 mx-lg-1"><a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger"
                                                     href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<!-- Masthead-->
<header class="masthead bg-primary text-white text-center">
    <div class="container d-flex align-items-center flex-column">
        <!-- Masthead Avatar Image-->
        <img class="masthead-avatar mb-5" src="{{Voyager::image(setting('site.img'))}}" alt=""/>
        <!-- Masthead Heading-->
        <h1 class="masthead-heading text-uppercase mb-0">{{setting('site.title')}}</h1>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="{{setting('site.main-icon')}}"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- Masthead Subheading-->
        <p class="masthead-subheading font-weight-light mb-0">{{setting('site.main-desc')}}</p>
    </div>
</header>

@foreach(getVisibleSections($sections) as $section)
    @php $component = resolveViewTypeForComponent($section->view_type); @endphp
    @component($component , ['section' =>$section])@endcomponent
@endforeach
<!-- About Section-->
<section class="page-section bg-primary text-white mb-0" id="about">
    <div class="container">
        <!-- About Section Heading-->
        <h2 class="page-section-heading text-center text-uppercase text-white">About</h2>
        <!-- Icon Divider-->
        <div class="divider-custom divider-light">
            <div class="divider-custom-line"></div>
            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>
            <div class="divider-custom-line"></div>
        </div>
        <!-- About Section Content-->
        <div class="row">
            <div class="col-lg-4 ml-auto"><p class="lead">Freelancer is a free bootstrap theme created by Start
                    Bootstrap. The download includes the complete source files including HTML, CSS, and JavaScript as
                    well as optional SASS stylesheets for easy customization.</p></div>
            <div class="col-lg-4 mr-auto"><p class="lead">You can create your own custom avatar for the masthead, change
                    the icon in the dividers, and add your email address to the contact form to make it fully
                    functional!</p></div>
        </div>
        <!-- About Section Button-->
        <div class="text-center mt-4">
            <a class="btn btn-xl btn-outline-light" href="https://startbootstrap.com/theme/freelancer/">
                <i class="fas fa-download mr-2"></i>
                Free Download!
            </a>
        </div>
    </div>
</section>
{{--<section class="page-section" id="contact">--}}
{{--    <div class="container">--}}
{{--        <!-- Contact Section Heading-->--}}
{{--        <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Contact Me</h2>--}}
{{--        <!-- Icon Divider-->--}}
{{--        <div class="divider-custom">--}}
{{--            <div class="divider-custom-line"></div>--}}
{{--            <div class="divider-custom-icon"><i class="fas fa-star"></i></div>--}}
{{--            <div class="divider-custom-line"></div>--}}
{{--        </div>--}}
{{--        <!-- Contact Section Form-->--}}
{{--        <div class="row">--}}
{{--            <div class="col-lg-8 mx-auto">--}}
{{--                <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19.-->--}}
{{--                <form id="contactForm" name="sentMessage" novalidate="novalidate">--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
{{--                            <label>Name</label>--}}
{{--                            <input class="form-control" id="name" type="text" placeholder="Name" required="required"--}}
{{--                                   data-validation-required-message="Please enter your name."/>--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
{{--                            <label>Email Address</label>--}}
{{--                            <input class="form-control" id="email" type="email" placeholder="Email Address"--}}
{{--                                   required="required"--}}
{{--                                   data-validation-required-message="Please enter your email address."/>--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
{{--                            <label>Phone Number</label>--}}
{{--                            <input class="form-control" id="phone" type="tel" placeholder="Phone Number"--}}
{{--                                   required="required"--}}
{{--                                   data-validation-required-message="Please enter your phone number."/>--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <div class="control-group">--}}
{{--                        <div class="form-group floating-label-form-group controls mb-0 pb-2">--}}
{{--                            <label>Message</label>--}}
{{--                            <textarea class="form-control" id="message" rows="5" placeholder="Message"--}}
{{--                                      required="required"--}}
{{--                                      data-validation-required-message="Please enter a message."></textarea>--}}
{{--                            <p class="help-block text-danger"></p>--}}
{{--                        </div>--}}
{{--                    </div>--}}
{{--                    <br/>--}}
{{--                    <div id="success"></div>--}}
{{--                    <div class="form-group">--}}
{{--                        <button class="btn btn-primary btn-xl" id="sendMessageButton" type="submit">Send</button>--}}
{{--                    </div>--}}
{{--                </form>--}}
{{--            </div>--}}
{{--        </div>--}}
{{--    </div>--}}
{{--</section>--}}
<!-- Footer-->
@component('components.footer.footer' , ['footer' => $footer])@endcomponent
<!-- Copyright Section-->
@component('components.footer.copy-right' , ['links' => $links])@endcomponent
<div class="scroll-to-top d-lg-none position-fixed">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top"><i
            class="fa fa-chevron-up"></i></a>
</div>
<!-- Bootstrap core JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Third party plugin JS-->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<!-- Contact form JS-->
<script src="{{asset('assets/mail/jqBootstrapValidation.js')}}"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
</body>
</html>
