<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <title>{{ env('APP_NAME') }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" name="viewport" />
    <meta content="" name="description" />
    <meta content="" name="author" />
    <!-- ================== BEGIN core-css ================== -->
    <link href="{{ asset('auth/css/vendor.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('auth/css/default/app.min.css') }}" rel="stylesheet" />
    <!-- ================== END core-css ================== -->
    <link href="{{ asset('auth/plugins/bootstrap-icons/font/bootstrap-icons.min.css') }}" rel="stylesheet" />
    <link href="{{ asset('auth/plugins/gritter/css/jquery.gritter.css') }}" rel="stylesheet" />
    <link href="{{ asset('auth/plugins/sweetalert2/sweetalert2.min.css') }}" rel="stylesheet" >
    <link href="{{ asset('auth/js/select2/css/select2.min.css') }}" rel="stylesheet" />

    <link href="{{ asset('auth/css/app.css') }}" rel="stylesheet" />
    <!-- ================== BEGIN page-css ================== -->
    @yield('styles')
    <!-- ================== END page-css ================== -->
</head>
<body>
<!-- BEGIN #loader -->
<div id="loader" class="app-loader">
    <span class="spinner"></span>
</div>
<!-- END #loader -->

<!-- BEGIN #app -->
<div id="app" class="app app-header-fixed app-sidebar-fixed ">
    <!-- BEGIN #header -->
    <div id="header" class="app-header">
        <!-- BEGIN navbar-header -->
        <div class="navbar-header">
            <a href="{{ route('index') }}" class="navbar-brand">
                <img src="{{ asset('main/image/logo.png')  }}" alt="{{ env('APP_NAME') }}">
            </a>
            <button type="button" class="navbar-mobile-toggler" data-toggle="app-sidebar-mobile">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
        </div>
        <!-- END navbar-header -->
        @include('auth.includes.navbar')
    </div>
    <!-- END #header -->

    @include('auth.includes.sidebar')

    <!-- BEGIN #content -->
    <div id="content" class="app-content">
        @yield('content')
    </div>
    <!-- END #content -->

    <!-- BEGIN scroll-top-btn -->
    <a href="javascript:;" class="btn btn-icon btn-circle btn-theme btn-scroll-to-top" data-toggle="scroll-to-top"><i class="fa fa-angle-up"></i></a>
    <!-- END scroll-top-btn -->
</div>
<!-- END #app -->

<!-- ================== BEGIN core-js ================== -->
<script src="{{ asset('auth/js/vendor.min.js') }}"></script>
<script src="{{ asset('auth/js/app.min.js') }}"></script>
<!-- ================== END core-js ================== -->

<!-- ================== BEGIN plugin-js ================== -->
<script src="{{ asset('auth/plugins/gritter/js/jquery.gritter.js') }}"></script>
<script src="{{ asset('auth/plugins/sweetalert2/sweetalert2.min.js') }}"></script>
<script src="{{ asset('auth/js/select2/js/select2.min.js') }}"></script>
<script src="{{ asset('auth/plugins/select2/dist/js/i18n/es.js') }}"></script>
<script src="{{ asset('auth/plugins/inputmask/jquery.inputmask.min.js') }}"></script>
<script src="{{ asset('auth/plugins/inputmask/inputmask.min.js') }}"></script>
<!-- ================== BEGIN page-js ================== -->
<script src="{{ asset('auth/js/pages/app.js') }}"></script>
<script type="text/javascript">
    $(function(){
        $('body').tooltip({
            placement: "top",
            selector: '[data-toggle="tooltip"]'
        });
    });
</script>
<script type="text/javascript">
    $(document).ready(function () {
        $(".menu").find("a").each(function (i, e) {
            if ($(e).attr('href') !== "#") {
                const fragments = $(e).attr("href").split('/');
                const controller = $(e).attr("href").split('/')[4];
                const action = fragments.length === 6 ? '/' + $(e).attr("href").split('/')[5] : "";
                if ('/auth/' + controller + action === $(location).attr('pathname')) {
                    $(e).parents('.menu-item').addClass("active");
                }
            }
        });
    });
</script>
@yield('scripts')
<!-- ================== END page-js ================== -->
</body>
</html>
