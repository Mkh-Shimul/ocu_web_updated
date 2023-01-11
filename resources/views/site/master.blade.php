<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <!-- Stylesheets -->
    <link href="{{ asset('siteassets/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('siteassets/css/style.css') }}" rel="stylesheet">
    <!-- Responsive File -->
    <link href="{{ asset('siteassets/css/responsive.css') }}" rel="stylesheet">

    <link rel="shortcut icon" href="{{ asset('siteassets/images/favicon.png') }}" type="image/x-icon">
    <link rel="icon" href="{{ asset('siteassets/images/favicon.ico') }}" type="image/x-icon">

    <!-- Responsive Settings -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    <!-- Preloader -->
    <div class="preloader"><div class="icon"></div></div>

    <!-- Main Header -->
    @include('site.header')
    <!-- End Main Header -->

    @yield('content')

    <!-- Main Footer -->
    {{-- @include('site.footer') --}}
    <!-- End Main Footer -->




</div>
<!--End pagewrapper-->

<script src="{{ asset('siteassets/js/jquery.js') }}"></script>
<!--<script src="{{ asset('siteassets/js/popper.min.js') }}"></script>-->
<script src="{{ asset('siteassets/js/bootstrap.min.js') }}"></script>
<!--<script src="{{ asset('siteassets/js/jquery-ui.js') }}"></script>-->
<!--<script src="{{ asset('siteassets/js/jquery.fancybox.js') }}"></script>-->
<script src="{{ asset('siteassets/js/owl.js') }}"></script>
<script src="{{ asset('siteassets/js/scrollbar.js') }}"></script>
<script src="{{ asset('siteassets/js/validate.js') }}"></script>
<script src="{{ asset('siteassets/js/appear.js') }}"></script>
<script src="{{ asset('siteassets/js/wow.js') }}"></script>
<script src="{{ asset('siteassets/js/custom-script.js') }}"></script>

<script>
    $(document).ready(function() {
        var url = window.location.href;
        var activePage = url;
        $('.main-menu a').click(function () {
            // console.log("jdsf");
            var linkPage = this.href;
            if (activePage == linkPage) {
                $(this).closest("li").addClass("current");
            }
        });

        if($('.sponsors-carousel').length)
        {
            var brandsSlider = $('.sponsors-carousel');

            brandsSlider.owlCarousel(
            {
                loop:true,
                autoplay:true,
                autoplayTimeout:5000,
                nav:false,
                dots:false,
                autoWidth:true,
                items:8,
                margin:42
            });

            if($('.brands_prev').length)
            {
                var prev = $('.brands_prev');
                prev.on('click', function()
                {
                    brandsSlider.trigger('prev.owl.carousel');
                });
            }

            if($('.brands_next').length)
            {
                var next = $('.brands_next');
                next.on('click', function()
                {
                    brandsSlider.trigger('next.owl.carousel');
                });
            }
        }
    });
</script>

</body>
</html>
