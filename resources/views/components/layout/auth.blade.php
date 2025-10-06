@props(['title' => 'Movie Ticket Booking'])
<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <x-link rel="stylesheet" href="assets/css/bootstrap.min.css" />
    <x-link rel="stylesheet" href="assets/css/all.min.css" />
    <x-link rel="stylesheet" href="assets/css/animate.css" />
    <x-link rel="stylesheet" href="assets/css/flaticon.css" />
    <x-link rel="stylesheet" href="assets/css/magnific-popup.css" />
    <x-link rel="stylesheet" href="assets/css/odometer.css" />
    <x-link rel="stylesheet" href="assets/css/owl.carousel.min.css" />
    <x-link rel="stylesheet" href="assets/css/owl.theme.default.min.css" />
    <x-link rel="stylesheet" href="assets/css/nice-select.css" />
    <x-link rel="stylesheet" href="assets/css/main.css" />

    <x-link rel="shortcut icon" href="assets/images/favicon.png" type="image/x-icon" />

    <title>{{ $title }}</title>


</head>

<body>
    <!-- ==========Preloader========== -->
    <div class="preloader">
        <div class="preloader-inner">
            <div class="preloader-icon">
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ==========Preloader========== -->

    <!-- ==========Sign-In-Section========== -->
    <section class="account-section bg_img" data-background="{{ asset('assets/images/account/account-bg.jpg') }}">
        <div class="container">
            <div class="padding-top padding-bottom">
                <div class="account-area">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </section>
    <!-- ==========Sign-In-Section========== -->


    <x-script src="assets/js/jquery-3.3.1.min.js"></x-script>
    <x-script src="assets/js/modernizr-3.6.0.min.js"></x-script>
    <x-script src="assets/js/plugins.js"></x-script>
    <x-script src="assets/js/bootstrap.min.js"></x-script>
    <x-script src="assets/js/isotope.pkgd.min.js"></x-script>
    <x-script src="assets/js/magnific-popup.min.js"></x-script>
    <x-script src="assets/js/owl.carousel.min.js"></x-script>
    <x-script src="assets/js/wow.min.js"></x-script>
    <x-script src="assets/js/countdown.min.js"></x-script>
    <x-script src="assets/js/odometer.min.js"></x-script>
    <x-script src="assets/js/viewport.jquery.js"></x-script>
    <x-script src="assets/js/nice-select.js"></x-script>
    <x-script src="assets/js/main.js"></x-script>
</body>


</html>
