<link rel="stylesheet" href="{{ asset('/site/css/open-iconic-bootstrap.min.css') }}">
@if (session('lang') == 'ar')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js"
        integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous">
    </script>
@endif
<link rel="stylesheet" href="{{ asset('/site/css/animate.css') }}">

<link rel="stylesheet" href="{{ asset('/site/css/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('/site/css/owl.theme.default.min.css') }}">
<link rel="stylesheet" href="{{ asset('/site/css/magnific-popup.css') }}">

<link rel="stylesheet" href="{{ asset('/site/css/aos.css') }}">

<link rel="stylesheet" href="{{ asset('/site/css/ionicons.min.css') }}">

<link rel="stylesheet" href="{{ asset('/site/css/bootstrap-datepicker.css') }}">
<link rel="stylesheet" href="{{ asset('/site/css/jquery.timepicker.css') }}">


<link rel="stylesheet" href="{{ asset('/site/css/flaticon.css') }}">
<link rel="stylesheet" href="{{ asset('/site/css/icomoon.css') }}">
<link rel="stylesheet" href="{{ asset('/site/css/style.css') }}">
@stack('css')
