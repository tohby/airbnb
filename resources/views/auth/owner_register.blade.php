<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
        integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="http://code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

    <!-- Bootstrap JS -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <title>{{ config('app.name', 'Homey | Login') }}</title>
</head>

<body>
    <div class="sectionlogin">
        <div class="row">
            <div class="col-5 sectionImage2"></div>
            <div class="col-7 LoginForm ">
                <h4>Sign up with Facebook or Google</h4>
                <p>
                    Access to the most powerfull tool in the entire design <br />
                    and web industry.
                </p>

                <div class=" col-6 formarea justify-content-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control myform @error('name') is-invalid @enderror" id="name"
                                name="name" aria-describedby="nameHelp" placeholder="Enter Name"
                                value="{{ old('name') }}" required autocomplete="name" autofocus />
                            @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control myform @error('email') is-invalid @enderror"
                                id="email" name="email" placeholder="Email" value="{{ old('email') }}" required
                                autocomplete="email" />
                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control myform @error('password') is-invalid @enderror"
                                id="password" name="password" placeholder="Password" required
                                autocomplete="new-password" />
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control myform" id="password-confirm"
                                name="password_confirmation" placeholder="Confrim Password" required
                                autocomplete="new-password" />
                        </div>
                        <input type="hidden" name="role" value="1">
                        <div class="row loginbtn">
                            <div class="col loginbtn">
                                <button class="btn btn-primary" type="submit">Login</button>
                            </div>
                            <div class="col forgotpassword">
                                <p>Forgot password ?</p>
                            </div>
                        </div>
                        <div class="row Loginsocial">
                            <div class="col sociallogin">
                                <img src="{{ asset('svg/facebook.svg')}}">
                                <img src="{{ asset('svg/twitter.svg')}}">
                                <img src="{{ asset('svg/google-plus.svg')}}">
                            </div>
                            <div class="col forgotpassword"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>