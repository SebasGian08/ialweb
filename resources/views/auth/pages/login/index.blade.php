<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }}</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('auth/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('auth/css/apple/app.min.css') }}" rel="stylesheet" />
    <script src="{{ asset('auth/plugins/ionicons/dist/ionicons/ionicons.js') }}"></script>
    <!-- ================== END core-css ================== -->
</head>
<body class='pace-top'>
<!-- BEGIN #loader -->
<div id="loader" class="app-loader">
    <span class="spinner"></span>
</div>
<!-- END #loader -->


<!-- BEGIN #app -->
<div id="app" class="app">
    <!-- BEGIN login -->
    <div class="login login-v1">
        <!-- BEGIN login-container -->
        <div class="login-container">
            <!-- BEGIN login-header -->
            <div class="login-header">
                <div class="brand">
                    <div class="d-flex align-items-center">
                        <span class="logo"><ion-icon name="cloud"></ion-icon></span> <b class="me-1">{{ env('APP_NAME') }}</b>
                    </div>
                    <small>Iniciar Sesión para gestionar</small>
                </div>
                <div class="icon">
                    <i class="fa fa-lock"></i>
                </div>
            </div>
            <!-- END login-header -->

            <!-- BEGIN login-body -->
            <div class="login-body">
                <!-- BEGIN login-content -->
                <div class="login-content fs-13px">
                    <form action="{{ route('auth.login.post') }}" method="post">
                        @csrf
                        <div class="form-floating mb-20px">
                            <input type="email" class="form-control fs-13px h-45px {{ $errors->has('email') ? 'is-invalid' : '' }}" value="{{ old('email') }}" id="email" name="email" placeholder="Email" />
                            <label for="email" class="d-flex align-items-center">Email</label>
                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-floating mb-20px">
                            <input type="password" class="form-control fs-13px h-45px {{ $errors->has('password') ? 'is-invalid' : '' }}" id="password" name="password" placeholder="Password" />
                            <label for="password" class="d-flex align-items-center">Password</label>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </div>
                        <div class="form-check mb-20px">
                            <input class="form-check-input" type="checkbox" id="remember" value="1" name="remember" {{ old('remember') ? 'checked' : '' }}/>
                            <label class="form-check-label" for="remember">
                                Recuerdame
                            </label>
                        </div>
                        <div class="login-buttons">
                            <button type="submit" class="btn btn-theme h-45px d-block w-100 btn-lg">Iniciar Sesión</button>
                        </div>
                    </form>
                </div>
                <!-- END login-content -->
            </div>
            <!-- END login-body -->
        </div>
        <!-- END login-container -->
    </div>
    <!-- END login -->

    <!-- BEGIN scroll-top-btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- END scroll-top-btn -->
</div>
<!-- END #app -->

<!-- ================== BEGIN core-js ================== -->
<script src="{{ asset('auth/js/vendor.min.js') }}"></script>
<script src="{{ asset('auth/js/app.min.js') }}"></script>
<!-- ================== END core-js ================== -->
</body>
</html>
