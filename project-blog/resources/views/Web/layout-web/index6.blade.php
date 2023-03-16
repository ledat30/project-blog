<!DOCTYPE html>
<html lang="en">
<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>@yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    @include('Web.layout-web.style')
    <!-- Tweaks for older IEs-->
    {{--    <!--[if lt IE 9]>--}}
    {{--    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>--}}
    {{--    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->--}}
</head>
<!-- body -->
<body class="main-layout">
<!-- loader  -->
{{--<div class="loader_bg">--}}
{{--    <div class="loader"><img src="images/loading.gif" alt="" /></div>--}}
{{--</div>--}}
<!-- end loader -->
<!-- header -->
@include('Web.layout-web.header')
<!-- end header -->
<!-- section -->
<div class="section layout_padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="heading">
                    <h4>Profile <span class="orange_color"> User</span></h4>
                </div>
            </div>
        </div>
        @yield('content0')
    </div>
</div>
<!-- end section -->
<!-- footer -->
@include('Web.layout-web.footer')
<!-- end footer -->
@include('Web.layout-web.script2')
</body>
</html>
