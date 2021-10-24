<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!--favicon icon-->
    <link rel="icon" href="{{ asset('img/404.png') }}" type="image/png" sizes="16x16">

    <title>404 - Page Not Found</title>

    <link rel="stylesheet" href="{{ asset('assets/css/main.css') }}">
</head>

<body>
<div class="main">

    <section class="ptb-100 bg-image full-height" image-overlay="8">
        <div class="background-image-wraper" style="background: url({{ asset('assets/img/cta-bg.jpg') }}); opacity: 1;"></div>
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-9 col-lg-7">
                    <div class="error-content-wrap text-center text-white">
                        <div class="notfound-404">
                            <h1 class="text-white">404</h1>
                        </div>
                        <h2 class="text-white">Sorry, something went wrong</h2>
                        <p class="lead">The page you are looking for might have been removed had its name changed or is temporarily
                            unavailable.</p><a class="btn btn-brand-03" href="{{ route('NoMe.home') }}">Go to Homepage</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="{{ asset('assets/js/vendors/jquery-3.5.1.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jquery.easing.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/countdown.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jquery.waypoints.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/jquery.rcounterup.js') }}"></script>
<script src="{{ asset('assets/js/vendors/magnific-popup.min.js') }}"></script>
<script src="{{ asset('assets/js/vendors/validator.min.js') }}"></script>
<script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
