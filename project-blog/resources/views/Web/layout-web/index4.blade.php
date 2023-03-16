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
    @include('Web.layout-web.style1')
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
<!-- revolution slider -->
@include('Web.layout-web.banner')
<!-- end revolution slider -->
<!-- section -->
<div class="section layout_padding">
    <div class="container">
        @yield('content4')
    </div>
</div>
<!-- footer -->
@include('Web.layout-web.footer')
<!-- end footer -->
@include('Web.layout-web.script')
</body>
</html>
