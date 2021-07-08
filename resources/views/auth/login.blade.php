<!-- debut original
    @ extends ('layouts.app')
    @ section ('content')
-->

<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Adminpro - Admin Template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('assets/css/bootstrap.min.css')}}">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('assets/css/font-awesome.min.css')}}">
    <!-- adminpro icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('assets/css/adminpro-custon-icon.css')}}">
    <!-- meanmenu icon CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('assets/css/meanmenu.min.css')}}">
    <!-- mCustomScrollbar CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('assets/css/jquery.mCustomScrollbar.min.css')}}">
    <!-- animate CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('assets/css/animate.css')}}">
    <!-- normalize CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('assets/css/normalize.css')}}">
    <!-- form CSS
		============================================ -->
    <link href="{{url('assets/css/form.css')}}" rel="stylesheet">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('assets/style.css')}}">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="{{url('assets/css/responsive.css')}}">
    <!-- modernizr JS
		============================================ -->
    <script src="{{url('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
</head>

<body class="darklayout">



<!-- endsection ici-->


<!-- fin original-->

<div class="login-form-area mg-t-30 mg-b-40">
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-4"></div>
        <form id="adminpro-form" class="adminpro-form" novalidate="novalidate" method="POST" action="{{ route('login') }}">
            @csrf
            <div class="col-lg-4">
                <div class="login-bg">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="logo">
                                <h4>Veuillez vous connecter</h4>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="login-title">
                                <h1>Veuillez vous connecter</h1>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="login-input-head">
                                <p>E-mail</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="login-input-area">
                                <input type="email" class="@error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                                <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                            </div>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="color: red;">{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="login-input-head">
                                <p>Password</p>
                            </div>
                        </div>
                        <div class="col-lg-8">
                            <div class="login-input-area">
                                <input type="password" name="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                                <i class="fa fa-lock login-user"></i>
                            </div>

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong  style="color: red;">{{ $message }}</strong>
                                </span>
                            @enderror
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="forgot-password">
                                        @if (Route::has('password.request'))
                                            <a href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="login-keep-me">
                                        <label class="checkbox">
                                            <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}><i></i>Keep me logged in
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">

                        </div>
                        <div class="col-lg-8">
                            <div class="login-button-pro">
                                <button type="submit" class="login-button login-button-lg">Log in</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <div class="col-lg-4"></div>
    </div>
</div>
</body>

</html>
