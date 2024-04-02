<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{-- <link rel="stylesheet" href="style.css"> --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Online Shopping site in India: Shop Online for Mobiles, Books, Watches, Shoes and More - Amazon.in</title>


    <!-- Additional CSS Files -->
    {{-- <link rel="stylesheet" type="text/css"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"> --}}
   
    <link rel="stylesheet" href="{{ asset('front/assets/css/style.css') }}">
   
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
    {{-- <script src="{{ asset('front/assets/js/owl-carousel.js') }}"></script>
    <script src="{{ asset('front/assets/js/accordions.js') }}"></script>
    <script src="{{ asset('front/assets/js/datepicker.js') }}"></script>
    <script src="{{ asset('front/assets/js/scrollreveal.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/imgfix.min.js') }}"></script>
    <script src="{{ asset('front/assets/js/slick.js') }}"></script>
    <script src="{{ asset('front/assets/js/lightbox.js') }}"></script>
    <script src="{{ asset('front/assets/js/isotope.js') }}"></script> --}}

    <!-- Global Init -->
    {{-- <script src="{{ asset('front/assets/js/frontCustom.js') }}"></script> --}}
    <script src="{{ asset('front/assets/js/app.js') }}"></script>

    {{-- <script>
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

    </script> --}}

    <script>
        // Page loading animation
	$(window).on('load', function() {
		if($('.cover').length){
			$('.cover').parallax({
				imageSrc: $('.cover').data('image'),
				zIndex: '1'
			});
		}

		$("#preloader").animate({
			'opacity': '0'
		}, 600, function(){
			setTimeout(function(){
				$("#preloader").css("visibility", "hidden").fadeOut();
			}, 300);
		});
	});
    </script>
    @stack('script')

</body>

</html>