<!DOCTYPE html>
<!--[if IE 8]><html class="ie8" lang="en"><![endif]-->
<!--[if IE 9]><html class="ie9" lang="en"><![endif]-->
<!--[if !IE]><!-->
<html lang="en">
    <!--<![endif]-->
    <head>
        <title>@yield('title') - By Subhasish</title>
        @include('layout.metainfo')
        @include('layout.cssfiles')
        @yield('pagecss')
    </head>
    <body>
        @include('layout.nav')
        @yield('content')
        @include('layout.jsfiles')
        @yield('pageScript')
    </body>
</html>
