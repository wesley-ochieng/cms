<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Eden</title>
    <meta name="theme-color" content="#38384b">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="icon" type="image/png" sizes="357x338" href="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    {{-- <link rel="manifest" href="manifest.json"> --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/css/styles.min.css')}}">
    <link rel="stylesheet" href="{{ asset('frontend/assets/fonts/simple-line-icons.min.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/magnific-popup.js/1.1.0/magnific-popup.min.css">
</head>
<body id="page-top">
<nav class="navbar navbar-light navbar-expand-lg fixed-top" id="mainNav" style="font-family: 'Cinzel Decorative', cursive;">
    <div class="container"><a class="navbar-brand js-scroll-trigger navbar-brand-centered" href="#page-top" style="font-family: 'Cinzel Decorative', cursive;font-size: 58px;"><img class="img-fluid brand-image" src="{{ asset('frontend2/assets/img/imageedit_1_9468446019.png')}}"></a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation"><i class="fa fa-align-justify"></i></button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="nav navbar-nav mr-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#services">Services</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#Company">About us</a></li>
            </ul>
            <ul class="nav navbar-nav ml-auto">
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#portfolio-home">Portfolio</a></li>
                <li class="nav-item"><a class="nav-link js-scroll-trigger" href="#contact">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
<header class="masthead text-center text-white d-flex" style="">
        <div class="wrapper video-background">
            @foreach(\App\Models\Header::all() as $video)
        <iframe allowfullscreen frameborder="0" src="{{$video->url}}?autoplay=1&amp;mute=1&amp;loop=1&amp;controls=0"></iframe>
            @endforeach
        </div>
</header>
<section id="services" class="services">
    <div class="container-md section-title px-0">
        <div class="row mb-5" data-aos="slide-down" data-aos-duration="2000">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase section-heading" style="font-family: 'Cinzel Decorative', cursive;">At Your Service</h2>
                <hr class="my-4 heading-underline">
            </div>
        </div>
        <div class="row" data-aos="slide-up" data-aos-duration="1700">
            @foreach(\App\Models\Service::all() as $service)
            <div class="col-12 text-center col-md-6 col-lg-4 align-items-stretch mb-5 mb-lg-0">
                <div class="text-center icon-box">
                    <div class="icon">
                        <img src="{{ asset('frontend/assets/img/imageedit_1_9468446019.png')}}" alt="" class="img-fluid mb-3" style="max-width: 63px">
                        <h4 class="title">{{ $service->category->name }}</h4>

                        <p class="description">{{ $service->body }}</p><a class="btn text-white btn-warning" role="button" href="{{ url('/eden/contact') }}">Reach Out</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>
<section data-bs-parallax-bg="true" id="Company" class="text-white" style="background-image: url({{ asset('frontend/assets/img/bg.jpg')}});background-position: center;background-size: cover;">
    <div class="container text-center">
        <h2 class="mb-4">About Us</h2>
       <p class="about-section">This is Group 18 content management project

        <br></p><a class="btn btn-light btn-xl sr-button" role="button" data-aos="zoom-in" data-aos-duration="400" href="{{ url('/eden/about') }}">Learn More&nbsp;</a>
    </div>
</section>
<section id="portfolio-home">
    <div class="container p-0">
        <div class="row mb-5" data-aos="slide-down" data-aos-duration="2000">
            <div class="col-lg-12 text-center">
                <h2 class="text-uppercase section-heading">Portfolio</h2>
                <hr class="my-4 heading-underline">
            </div>
        </div>
        <div class="row no-gutters popup-gallery">
            @foreach(\App\Models\Portfolio::all()->take(6) as $pf)
            <div class="col-sm-6 col-lg-4"><a class="portfolio-box" href="{{ asset('storage/portfolio/'. $pf->image) }}" target="_blank"><img class="img-fluid" src="{{ asset('storage/portfolio/'. $pf->image) }}">
                    <div class="portfolio-box-caption">
                        <div class="portfolio-box-caption-content">
                            <div class="project-category text-faded"><span class="image-heading">{{ $pf->category->name }}</span></div>
                            <div class="project-name"><span>{{ $pf->subcategory }}</span></div>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </div>
        <div class="row py-3">
            <div class="col text-center"><a class="btn btn-dark link-btn p-3" role="button" href="{{ url('/eden/portfolio') }}">View more</a></div>
        </div>
    </div>
</section>
<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 mx-auto text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="my-4">
                <p class="mb-5 font-raleway">Ready to start your next project with us? That's great! Give us a call or send us an email and we will get back to you as soon as possible!</p>
            </div>
        </div>
        <div class="row">
            @foreach(\App\Models\Contact::all() as $contact)
                @if($loop->first)
            <div class="col-12 mb-lg-3">
                <h4 class="text-center mb-3" style="font-family: 'Cinzel Decorative';">contact details</h4>
            </div>
            <div class="col-lg-3 ml-auto text-center"><i class="icon-phone fa-3x mb-3 sr-contact contact-details" data-aos="zoom-in" data-aos-duration="300" data-aos-once="true"></i><a class="stretched-link" href="tel:{{ $contact->whatsapp }}"></a>
                <p>{{ $contact->whatsapp }}</p>
            </div>
            <div class="col-lg-3 mr-auto text-center"><i class="icon-envelope fa-3x mb-3 sr-contact contact-details" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                <p><a class="stretched-link" href="mailto:wesleyochix@gmail.com">&nbsp;Email :{{ $contact->email }}</a></p>
            </div>
            <div class="col-lg-3 mr-auto text-center"><i class="icon-speech fa-3x mb-3 sr-contact contact-details" data-aos="zoom-in" data-aos-duration="300" data-aos-delay="300" data-aos-once="true"></i>
                <p><a class="stretched-link text-dark" href="{{ url('/eden/contact') }}">Reach out to us</a></p>
            </div>
            <div class="col-lg-3 mr-auto text-center"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.724081896243!2d36.720797615333545!3d-1.341921099021271!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f1b30d1648bfb%3A0xb15991d1eabd5f95!2sWatermark%20Business%20Park!5e0!3m2!1sen!2ske!4v1614951155337!5m2!1sen!2ske" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy"></iframe></div>
                  @endif
                    @endforeach
        </div>
    </div>
</section>

<div data-bs-parallax-bg="true" class="footer-dark" style="background-image: url('frontend/assets/img/goldbg.jpg');background-position: center;background-size: cover;">
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 item">
                    <h3>Quick links</h3>
                    <ul>
                        <li class="font-raleway"><a class="text-capitalize" href="{{ url('/eden')  }}">Home</a></li>
                        <li class="font-raleway"><a class="text-capitalize" href="{{ url('/eden/portfolio') }}">Portfolio</a></li>
                        <li class="font-raleway"><a class="text-capitalize" href="{{ url('/eden/contact') }}s">Contact</a></li>
                    </ul>
                </div>
                <div class="col-sm-6 col-md-6 item">
                    <h3>About</h3>
                    <ul>
                        <li class="font-raleway"><a href="{{ url('/eden/about')  }}">Company</a></li>
                        <li class="font-raleway"><a href="{{ url('/eden/about')  }}">Portfolio</a></li>
                        <li class="font-raleway"><a href="{{ url('/eden/about')  }}">Organizations</a></li>
                    </ul>
                </div>

                <div class="col-sm-12 col-lg-3 m-auto item social fixed-bottom p-0 pb-2">
                    <a href="{{ url('/eden/contact') }}"><i class="icon ion-ios-email-outline"></i></a>
                    <a href="https://www.facebook.com/" target="_blank"><i class="icon ion-social-facebook-outline" style="color: var(--blue);"></i></a>
                    <a href="https://twitter.com/" target="_blank"><i class="icon ion-social-twitter-outline" style="color: var(--cyan);"></i></a>
                    <a href="https://api.whatsapp.com/send?phone=254726580246" target="_blank"><i class="icon ion-social-whatsapp-outline" style="color: var(--green);"></i></a>
                    <a href="https://www.youtube.com" target="_blank"><i class="icon ion-social-youtube-outline" style="color: var(--danger);"></i></a>
                    <a href="https://www.instagram.com/" target="_blank"><i class="icon ion-social-instagram-outline" style="color: var(--orange);"></i></a>
                </div>
            </div>
            <p class="copyright">Copyright © Eden planners 2021</p>
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
{{-- <script>
    AOS.init();
</script> --}}
</body>

</html>
