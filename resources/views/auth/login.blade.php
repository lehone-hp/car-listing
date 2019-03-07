<!DOCTYPE html>
<html lang="en">
<head>
    <title>Dashboard | Car Listing</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!-- VENDOR CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/font-awesome/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/linearicons/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/chartist/css/chartist-custom.css') }}">
    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{ asset('admin/css/main.css') }}">
    <!-- GOOGLE FONTS -->
    <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700" rel="stylesheet">
    <!-- ICONS -->
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('admin/img/apple-icon.png') }}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{ asset('admin/img/favicon.png') }}">

</head>
<body>

<div id="wrapper">
    <div class="vertical-align-wrap">
        <div class="vertical-align-middle">
            <div class="auth-box ">
                <div class="left">
                    <div class="content">
                        <div class="header">
                            <div class="logo text-center">
                                <a href="{{ route('index') }}"><img src="{{ asset('admin/img/logo-dark.png') }}" alt="Klorofil Logo"></a>
                            </div>
                            <p class="lead">Login to your admin account</p>
                        </div>
                        <form class="form-auth-small"method="POST" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group">
                                <label for="signin-email" class="control-label sr-only">{{ __('E-Mail Address') }}</label>
                                <input type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                       name="email" value="{{ old('email') }}" id="signin-email"
                                       placeholder="{{ __('E-Mail Address') }}" required>

                                @if ($errors->has('email'))
                                    <span class="text-danger">
                                        {{ $errors->first('email') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group">
                                <label for="signin-password" class="control-label sr-only">{{ __('Password') }}</label>
                                <input type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                       name="password" id="signin-password"
                                       placeholder="{{ __('Password') }}">

                                @if ($errors->has('password'))
                                    <span class="text-danger">
                                        {{ $errors->first('password') }}
                                    </span>
                                @endif
                            </div>
                            <div class="form-group clearfix">
                                <label class="fancy-checkbox element-left">
                                    <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                                    <span>Remember me</span>
                                </label>
                            </div>
                            <button type="submit" class="btn btn-primary btn-lg btn-block">LOGIN</button>

                            @if (Route::has('password.request'))
                                <div class="bottom">
                                    <span class="helper-text"><i class="fa fa-lock"></i>
                                        <a href="{{ route('password.request') }}">{{ __('Forgot Your Password?') }}</a></span>
                                </div>
                            @endif
                        </form>
                    </div>
                </div>
                <div class="right">
                    <div class="overlay"></div>
                    <div class="content text">
                        <h1 class="heading">Company Name Administrator Login</h1>
                        <p>Welcome</p>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </div>

</div>
</body>
</html>