<script src="{{ asset('/site/js/jquery.min.js') }}"></script>
<script src="{{ asset('/site/js/jquery-migrate-3.0.1.min.js') }}"></script>
<script src="{{ asset('/site/js/popper.min.js') }}"></script>
<script src="{{ asset('/site/js/bootstrap.min.js') }}"></script>
@if (session('lang') == 'ar')
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://cdn.rtlcss.com/bootstrap/v4.5.3/js/bootstrap.bundle.min.js"
        integrity="sha384-40ix5a3dj6/qaC7tfz0Yr+p9fqWLzzAXiwxVLt9dw7UjQzGYw6rWRhFAnRapuQyK" crossorigin="anonymous">
    </script>
@endif)
<script src="{{ asset('/site/js/jquery.easing.1.3.js') }}"></script>
<script src="{{ asset('/site/js/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('/site/js/jquery.stellar.min.js') }}"></script>
<script src="{{ asset('/site/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('/site/js/jquery.magnific-popup.min.js') }}"></script>
<script src="{{ asset('/site/js/aos.js') }}"></script>
<script src="{{ asset('/site/js/jquery.animateNumber.min.js') }}"></script>
<script src="{{ asset('/site/js/bootstrap-datepicker.js') }}"></script>
<script src="{{ asset('/site/js/scrollax.min.js') }}"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
<script src="{{ asset('/site/js/google-map.js') }}"></script>
<script src="{{ asset('/site/js/main.js') }}"></script>
@stack('scripts')
