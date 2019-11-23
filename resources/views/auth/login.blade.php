<!DOCTYPE html>

<html lang="en">

    <!-- begin::Head -->
    <head>
        <meta charset="utf-8" />
        <title></title>
        <meta name="description" content="Login page example">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!--begin::Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700|Roboto:300,400,500,600,700">

        <!--end::Fonts -->

        <!--begin::Page Custom Styles(used by this page) -->
        <link href="{{asset('public/assets/css/pages/login/login-4.css')}}" rel="stylesheet" type="text/css" />

        <!--end::Page Custom Styles -->

        <!--begin::Global Theme Styles(used by all pages) -->
        <link href="{{asset('public/assets/plugins/global/plugins.bundle.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/style.bundle.css')}}" rel="stylesheet" type="text/css" />

        <!--end::Global Theme Styles -->

        <!--begin::Layout Skins(used by all pages) -->
        <link href="{{asset('public/assets/css/skins/header/base/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/skins/header/menu/light.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/skins/brand/dark.css')}}" rel="stylesheet" type="text/css" />
        <link href="{{asset('public/assets/css/skins/aside/dark.css')}}" rel="stylesheet" type="text/css" />

        <!--end::Layout Skins -->
        <link rel="shortcut icon" href="{{asset('public/assets/media/logos/favicon.ico')}}" />
    </head>

    <!-- end::Head -->

    <!-- begin::Body -->
    <body class="kt-quick-panel--right kt-demo-panel--right kt-offcanvas-panel--right kt-header--fixed kt-header-mobile--fixed kt-subheader--enabled kt-subheader--fixed kt-subheader--solid kt-aside--enabled kt-aside--fixed kt-page--loading">

        <!-- begin:: Page -->
        <div class="kt-grid kt-grid--ver kt-grid--root">
            <div class="kt-grid kt-grid--hor kt-grid--root  kt-login kt-login--v4 kt-login--signin" >
                <div class="kt-grid__item kt-grid__item--fluid kt-grid kt-grid--hor" style="background-image: url({{asset('public/assets/media/bg/bg-2.jpg')}}">
                    <div class="kt-grid__item kt-grid__item--fluid kt-login__wrapper">
                        <div class="kt-login__container">
                            <div class="kt-login__logo">
                                <a href="#">
                                    <img src="{{asset('public/assets/media/logos/logo-3.png')}}" height="70px;">
                                </a>
                            </div>
                            <div class="kt-login__signin">
                                <div class="kt-login__head">
                                    <h3 class="kt-login__title">Sign In To Admin</h3>
                                </div>
                                <form method="POST" action="{{ route('login') }}" class="kt-form">
                                    @csrf
                                    <div class="input-group">
                                        <input class="form-control @error('email') is-invalid @enderror" type="email" placeholder="Email" name="email" autocomplete="off" id="email" autofocus required>
                                        @error('email')
                                            <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>

                                    <div class="input-group">
                                        <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="Password" name="password" id="password" required>
                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                    <div class="row kt-login__extra">
                                        <div class="col">
                                            <label class="kt-checkbox">
                                                <input type="checkbox" name="remember" id="checkbox-signin" {{ old('remember') ? 'checked' : '' }}> Remember me
                                                <span></span>
                                            </label>
                                        </div>
                                        
                                    </div>
                                    <div class="kt-login__actions">
                                        <button  class="btn btn-brand btn-pill kt-login__btn-primary">{{ __('Login') }}</button>
                                    </div>
                                </form>
                            </div>
                          
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- end:: Page -->

        <!-- begin::Global Config(global config for global JS sciprts) -->
        <script>
            var KTAppOptions = {
                "colors": {
                    "state": {
                        "brand": "#5d78ff",
                        "dark": "#282a3c",
                        "light": "#ffffff",
                        "primary": "#5867dd",
                        "success": "#34bfa3",
                        "info": "#36a3f7",
                        "warning": "#ffb822",
                        "danger": "#fd3995"
                    },
                    "base": {
                        "label": [
                            "#c5cbe3",
                            "#a1a8c3",
                            "#3d4465",
                            "#3e4466"
                        ],
                        "shape": [
                            "#f0f3ff",
                            "#d9dffa",
                            "#afb4d4",
                            "#646c9a"
                        ]
                    }
                }
            };
        </script>

        <!-- end::Global Config -->

        <!--begin::Global Theme Bundle(used by all pages) -->
        <script src="{{ URL::asset('public/assets/plugins/global/plugins.bundle.js')}}" type="text/javascript"></script>
        <script src="{{ URL::asset('public/assets/js/scripts.bundle.js')}}" type="text/javascript"></script>

        <!--end::Global Theme Bundle -->

        <!--begin::Page Scripts(used by this page) -->
        <script src="{{ URL::asset('public/assets/js/pages/custom/login/login-general.js')}}" type="text/javascript"></script>

        <!--end::Page Scripts -->
    </body>

    <!-- end::Body -->
</html>