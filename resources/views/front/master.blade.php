<!DOCTYPE html>
<html lang="en">

<head>
    <title>G-Shop | @yield('title')</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">

    @include('front.includes.styles')
</head>

<body class="goto-here">
    
    <!-- start nav -->
    @include('front.includes.navbar')
    <!-- END nav -->

    @yield('content')

    <!-- sections -->
    @include('front.includes.sections')
    <!-- end sections  -->
    <!-- start footer  -->
    @include('front.includes.footer')
    <!-- end footer  -->



    <!-- loader -->
    <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px">
            <circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke="#eeeeee" />
            <circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4"
                stroke-miterlimit="10" stroke="#F96D00" />
        </svg></div>

    @include('front.includes.scripts')

</body>

</html>
