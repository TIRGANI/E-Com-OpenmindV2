<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap"
          rel="stylesheet">

    <title>Hexashop Ecommerce HTML CSS Template</title>
    <!-- Additional CSS Files -->
    
    <link href="{{ asset('geste/assets/css/owl-carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('geste/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('geste/assets/css/font-awesome.css') }}" rel="stylesheet">
    <link href="{{ asset('geste/assets/css/templatemo-hexashop.css') }}" rel="stylesheet">
    <link href="{{ asset('geste/assets/css/assets/css/owl-carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('geste/assets/css/lightbox.css') }}" rel="stylesheet">


    <!--

    TemplateMo 571 Hexashop

    https://templatemo.com/tm-571-hexashop

    -->
</head>

<body>
@include('layouts.gestinc.sidebar')


@yield('content')

@include('layouts.gestinc.footer')



<!-- jQuery -->
<script src="{{ asset('geste/assets/js/jquery-2.1.0.min.js') }}" defer></script>
<!-- Bootstrap -->
<script src="{{ asset('geste/assets/js/bootstrap.min.js') }}" defer></script>
<!-- Plugins -->
<script src="{{ asset('geste/assets/js/owl-carousel.js') }}" defer></script>
<script src="{{ asset('geste/assets/js/accordions.js') }}" defer></script>
<script src="{{ asset('geste/assets/js/datepicker.js') }}" defer></script>
<script src="{{ asset('geste/assets/js/scrollreveal.min.js') }}" defer></script>
<script src="{{ asset('geste/assets/js/waypoints.min.js') }}" defer></script>
<script src="{{ asset('geste/assets/js/jquery.counterup.min.js') }}" defer></script>
<script src="{{ asset('geste/assets/js/imgfix.min.js') }}" defer></script>
<script src="{{ asset('geste/assets/js/slick.js') }}" defer></script>
<script src="{{ asset('geste/assets/js/lightbox.js') }}" defer></script>
<script src="{{ asset('geste/assets/js/isotope.js') }}" defer></script>
<!-- Global Init -->
<script src="{{ asset('geste/assets/js/custom.js') }}" defer></script>





<script>

    $(function () {
        var selectedClass = "";
        $("p").click(function () {
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
            $("#portfolio div").not("." + selectedClass).fadeOut();
            setTimeout(function () {
                $("." + selectedClass).fadeIn();
                $("#portfolio").fadeTo(50, 1);
            }, 500);

        });
    });

</script>

</body>
</html>
