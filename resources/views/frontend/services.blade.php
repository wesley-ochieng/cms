<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Eden - Services</title>
    <meta name="theme-color" content="#38384b">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Alex+Brush">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Cinzel+Decorative">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Titillium+Web:300,400,400i,600,700">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>

<body>
<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="font-family: 'Cinzel Decorative', cursive;">
    <div class="container"><a class="navbar-brand js-scroll-trigger navbar-brand-centered" href="{{ url('/eden') }}" style="font-family: 'Cinzel Decorative', cursive;font-size: 58px;"><img class="img-fluid brand-image" src="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/eden') }}">Home</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/eden/services') }}">Services</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger active" href="{{ url('/eden/about') }}">About us</a></li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/eden/portfolio') }}">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="{{ url('/eden/contact') }}">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead text-center text-white d-flex pages-header" style="background-image: url({{url('frontend/assets/img/parties.jpg')}})">
    <div class="wrapper-header-section"></div>
    <div class="container my-auto">
        <div class="col-lg-8 mx-auto">
            <h1>Get in touch with us</h1><a class="btn btn-dark btn-xl js-scroll-trigger" role="button" href="#contact">Contact us</a>
        </div>
    </div>
</header>
<section data-aos="slide-down" data-aos-duration="1100" id="contact" class="pt-5">
    <div class="container">
        <div class="row">
            <div class="col text-center">
                <h2 class="text-uppercase section-heading" style="font-family: 'Cinzel Decorative', cursive;">EXPERIENCE LOVE AT FIRST SIGHT</h2>
                <hr class="my-4 heading-underline">
                <p class="contact-intro">Do you need some help planning an event? Please fill in the form below.I look forward to receiving your enquiry and hearing more about your upcoming event!</p>
            </div>
        </div>
        <div class="row" data-aos="slide-up" data-aos-duration="1700">
            @foreach(\App\Models\Service::all() as $service)
            <div class="col-12 text-center col-md-6 col-lg-4 align-items-stretch mb-5 mb-lg-0">
                <div class="text-center icon-box">
                    <div class="icon">
                        <img src="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}" alt="" class="img-fluid mb-3" style="max-width: 63px">
                        {{-- <i class="fas fa-infinity" style="margin-bottom: 15px;">
                    </i> --}}
                        <h4 class="title">{{ $service->category->name }}</h4>

                        <p class="description">{{ $service->body }}</p><a class="btn text-white btn-warning" role="button" href="{{ url('/eden/contact') }}">Reach Out</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>

<div data-bs-parallax-bg="true" class="footer-dark" style="background-image: url({{url('frontend/assets/img/goldbg.jpg')}});background-position: center;background-size: cover;">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-3 item">
                    <h3>Quick links</h3>
                    <ul>
                        <li class="font-raleway"><a class="text-capitalize" href="{{ url('/eden')  }}">Home</a></li>
                        <li class="font-raleway"><a class="text-capitalize" href="{{ url('/eden/portfolio') }}">Portfolio</a></li>
                        <li class="font-raleway"><a class="text-capitalize" href="{{ url('/eden/contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-3 item">
                    <h3>About</h3>
                    <ul>
                        <li class="font-raleway"><a href="{{ url('/eden/about')  }}">Company</a></li>
                        <li class="font-raleway"><a href="{{ url('/eden/about')  }}">Portfolio</a></li>
                        <li class="font-raleway"><a href="{{ url('/eden/about')  }}">Organizations</a></li>
                    </ul>
                </div>
                <div class="col-md-6 item text">
                    <h3>Eden events</h3>
                    <p class="font-raleway">&nbsp;Eden Event Planners has built an impressive events repertoire and clientele without compromising its principles and quality.</p>
                </div>
                <div class="col-sm-12 col-lg-3 m-auto item social fixed-bottom p-0 pb-2"><a href="{{ url('/eden/contact') }}"><i class="icon ion-ios-email-outline"></i></a><a href="https://www.facebook.com/ElegantlyEden" target="_blank"><i class="icon ion-social-facebook-outline" style="color: var(--blue);"></i></a><a href="https://twitter.com/edenepke" target="_blank"><i class="icon ion-social-twitter-outline" style="color: var(--cyan);"></i></a><a href="https://api.whatsapp.com/send?phone=254722945812" target="_blank"><i class="icon ion-social-whatsapp-outline" style="color: var(--green);"></i></a><a href="https://www.youtube.com" target="_blank"><i class="icon ion-social-youtube-outline" style="color: var(--danger);"></i></a><a href="https://www.instagram.com/eden_eventplanners/?igshid=17xynqguejm3m" target="_blank"><i class="icon ion-social-instagram-outline" style="color: var(--orange);"></i></a></div>
            </div>
            <p class="copyright">Eden © 2020</p>
        </div>
    </footer>
</div>
<script src="{{ asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{ asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}"></script>
<script src="{{ asset('frontend/assets/js/smart-forms.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/jquery.magnific-popup.min.js"></script>
<script src="{{ asset('frontend/assets/js/aos.js')}}"></script>
<script>
    AOS.init();
</script>
</body>

</html>
