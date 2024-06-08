<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Art Gallery Muhadjir</title>
    <link rel="stylesheet" href="{{URL::asset('assets/css/login/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/login/iofrm-style.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/login/iofrm-theme4.css')}}">
    <link rel="stylesheet" href="{{URL::asset('assets/css/login/fontawesome-all.min.css')}}">
</head>
<body>
    <div class="form-body">
        <div class="website-logo">
            <a href="index.html">
                <div class="logo">
                    <img class="logo-size" src="images/logo-light.svg" alt="">
                </div>
            </a>
        </div>
        <div class="row">
            <div class="img-holder">
                <div class="bg"></div>
                <div class="info-holder">
                    <img src="/assets/images/bg/graphic4.svg" alt="">
                </div>
            </div>
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>AGM</h3>
                        <p>Art Gallery Muhadjir </p>
                        <div class="page-links">
                            <a href="login4.html" class="active">Login</a>  
                        </div>
                        <form method="POST" action="{{ route('login') }}">
                            @csrf
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="email">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                            <div class="form-button">
                            <button type="submit" class="ibtn">
                                    {{ __('Login') }}
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ ('assets/js/login/jquery.min.js') }}"></script>
<script src="{{ ('assets/js/login/popper.min.js') }}"></script>
<script src="{{ ('assets/js/login/bootstrap.min.js') }}"></script>
<script src="{{ ('assets/js/login/main.min.js') }}"></script>
</body>
</html>