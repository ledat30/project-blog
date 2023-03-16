<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="{{asset('https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTLmfgdglAsHS3L-HzEjIWRsdSxkc9gIN_xvg&usqp=CAU')}}"/>
    <title>@yield('title')</title>
    @include('Admin.layout.style')
</head>
<body class="nav-md">
<div class="container body">
    <div class="main_container">
        <div class="col-md-3 left_col">
            <div class="left_col scroll-view">
                <div class="navbar nav_title" style="border: 0;">
                    <a href="{{asset('http://127.0.0.1:8000/admin/index')}}" class="site_title"><i class="fa fa-paw"></i> <span>Personal Blog </span></a>
                </div>

                <div class="clearfix"></div>

        @include('Admin.layout.menu')
            </div>
        </div>

        <!-- top navigation -->
       @include('Admin.layout.imgUser')
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
            @yield('noidung')
        </div>
        <!-- /page content -->

        <!-- footer content -->
       @include('Admin.layout.footer')
        <!-- /footer content -->
    </div>
</div>

<!-- jQuery -->
@include('Admin.layout.script')

</body>
</html>
