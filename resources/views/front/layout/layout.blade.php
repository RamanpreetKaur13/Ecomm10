<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <title>Hexashop</title>


    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    {{--
    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/bootstrap.min.css ')}}"> --}}

    <link rel="stylesheet" type="text/css" href="{{ asset('front/assets/css/font-awesome.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
    {{--
    <link rel="stylesheet" href="{{ asset('front/assets/css/templatemo-hexashop.css') }}"> --}}

    <link rel="stylesheet" href="{{ asset('front/assets/css/owl-carousel.css') }}">

    <link rel="stylesheet" href="{{ asset('front/assets/css/lightbox.css') }}">
    <!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
@stack('style')
</head>

<body>

    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->


    <!-- ***** Header Area Start ***** -->
    @include('front.layout.header')
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->
    @yield('content')
    <!-- ***** Subscribe Area Ends ***** -->

    <!-- ***** Footer Start ***** -->
    @include('front.layout.footer')

    <!-- jQuery -->
    <script src="{{ asset('front/assets/js/jquery-2.1.0.min.js') }}"></script>

    <!-- Bootstrap -->
    <script src="{{ asset('front/assets/js/popper.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    {{-- <script src="{{ asset('front/assets/js/bootstrap.min.js') }}"></script> --}}

    <!-- Plugins -->
    <script src="{{ asset('front/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('front/assets/js/accordions.js') }}"></script>
    <script src="{{ asset('front/assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('front/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/slick.js') }}"></script>
    <script src="{{ asset('front/assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('front/assets/js/isotope.js') }}"></script>

    <!-- Global Init -->
    <script src="{{ asset('front/assets/js/frontCustom.js') }}"></script>

    <script>
        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

@stack('script')
</body>

</html>