<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <title>Login - Eden Events</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('frontend/assets/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/fontawesome-all.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/fonts/fontawesome5-overrides.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/assets/css/styles.min.css')}}'">
</head>

<body class="bg-gradient-primary m-auto" >
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-9 col-lg-12 col-xl-12">
            <div class="card shadow-lg o-hidden border-0 my-5">
                <div class="card-body p-0">
                    <div class="row">
                        <div class="col-lg-6 d-none d-lg-flex">
                            <img src="{{ asset('backend/assets/img/enedtransparentbg.png')}}" class="img-fluid" alt="">
                            <div class="flex-grow-1 bg-login-image" style="background-image: url('{{ asset('backend/assets/img/enedtransparentbg.png')}}"></div>
                        </div>
                        <div class="col-lg-6">
                            <div class="p-5">
                                <div class="text-center">
                                    <h4 class="text-dark mb-4">Welcome Back!</h4>
                                </div>
                                <form class="user" method="POST" action="{{ route('login') }}" autocomplete="off">
                                    @csrf

                                    <div class="form-group"><input class="form-control form-control-user @error('email') is-invalid @enderror" name="email" type="email" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Enter Email Address..." name="email">
                                        @error('email')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror</div>
                                    <div class="form-group"><input class="form-control form-control-user @error('password') is-invalid @enderror" name="password" type="password" id="exampleInputPassword" placeholder="Password" name="password">
                                        @error('password')
                                        <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                        @enderror</div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox small">
                                            <div class="form-check"><input class="form-check-input custom-control-input" type="checkbox" id="formCheck-1"><label class="form-check-label custom-control-label" for="formCheck-1">Remember Me</label></div>
                                        </div>
                                    </div><button class="btn btn-info btn-block text-white btn-user" type="submit">Login</button>

                                    <hr class="text-info">
                                </form>
                                <div class="text-center"><a class="small text-info" href="{{ route('password.request') }}">Forgot Password?</a></div>
{{--                                <div class="text-center"><a class="small text-info" href="{{ route('register') }}">Create an Account!</a></div>--}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{asset('frontend/assets/js/jquery.min.js')}}"></script>
<script src="{{asset('frontend/assets/bootstrap/js/bootstrap.min.js')}}'"></script>
<script src="{{asset('frontend/assets/js/chart.min.js')}}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.js"></script>
<script src="{{asset('frontend/assets/js/script.min.js')}}'"></script>
</body>

</html>
