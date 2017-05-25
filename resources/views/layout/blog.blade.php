<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8 lt-ie7 "> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie10 lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie10 lt-ie9"> <![endif]-->
<!--[if IE 9]><html class="no-js lt-ie10"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>

    <!-- Basic Page Needs -->
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Favicons -->
    <link rel="shortcut icon" href="">

    <!-- FONTS -->
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Roboto:100,300,400,400italic,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Open+Sans:100,300,400,400italic,500,700'>
    <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Patua+One:100,300,400,400italic,700'>

    <!-- CSS -->
    <link rel='stylesheet' href='{{asset('css/global.css')}}'>
    <link rel='stylesheet' href='{{asset('university/css/structure.css')}}'>
    <link rel='stylesheet' href='{{asset('university/css/university.css')}}'>
    <link rel='stylesheet' href='{{asset('university/css/custom.css')}}'>

    @yield('assets')
</head>
<body class="blog with_aside aside_right layout-full-width header-classic minimalist-header sticky-header sticky-white subheader-title-left no-content-padding">
<!-- Main Theme Wrapper -->
<div id="Wrapper">
    <!-- Header Wrapper -->
    <div id="Header_wrapper">
        <!-- Header -->
        <header id="Header">

            <!-- Header -  Logo and Menu area -->
            <div id="Top_bar">
                <div class="container">
                    <div class="column one">
                        <div class="top_bar_left clearfix">
                            <!-- Logo-->
                            <div class="logo">
                                <a id="logo" href="../../index-university.html" title="BeUniversity - BeTheme"><img class="scale-with-grid" src="images/university.png" alt="BeUniversity - BeTheme" /> </a>
                            </div>
                            <!-- Main menu-->
                            <div class="menu_wrapper">
                                <nav id="menu">

                                    <ul id="menu-main-menu" class="menu">
                                        <li >
                                            <a href="{{url('/')}}"><span>Home</span></a>
                                        </li>
                                        <li>
                                            <a href="#departments"><span>Services</span></a>
                                        </li>
                                        <li >
                                            <a disabled><span>Programmes</span></a>
                                            <ul class="sub-menu">
                                                <li>
                                                    <a href="{{route('featured')}}"><span>Featured Internships</span></a>
                                                </li>
                                                <li>
                                                    <a href="{{route('special')}}"><span>Special Programmes Internships</span></a>
                                                </li>
                                                <li>
                                                    <a href="{{route('ambassador')}}"><span>Student Ambassador Internships</span></a>
                                                </li>
                                                <li>
                                                    <a href="{{route('platinum')}}"><span>Platinum Plus Internships</span></a>
                                                </li>
                                            </ul>

                                        </li>

                                        <li>
                                            <a href="{{url('')}}"><span>Apply</span></a>
                                        </li>
                                        <li class="current_page_item">
                                            <a href="{{url('')}}"><span>News &#038; Events</span></a>
                                        </li>
                                        <li>
                                            <a href="{{route('contact')}}"><span>Contact</span></a>
                                        </li>
                                    </ul>
                                </nav><a class="responsive-menu-toggle" href="#"><i class="icon-menu"></i></a>
                            </div>
                            <!-- Header Searchform area-->
                            <div class="search_wrapper">
                                <form method="get" action="#">
                                    <i class="icon_search icon-search"></i><a href="#" class="icon_close"><i class="icon-cancel"></i></a>
                                    <input type="text" class="field" name="s" placeholder="Enter your search" />
                                    <input type="submit" class="submit flv_disp_none" value="" />
                                </form>
                            </div>
                        </div>
                        <div class="top_bar_right">
                            <div class="top_bar_right_wrapper">
                                <a id="search_button" href="#"><i class="icon-search"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </header>
        <!--Subheader area - only for certain pages -->
        <div id="Subheader">
            <div class="container">
                <div class="column one">
                    <h1 class="title">News &#038; Events</h1>
                    <!--BreadCrumbs area-->
                    <ul class="breadcrumbs">
                        <li>
                            <a href="{{url('/')}}">Home</a><span><i class="icon-right-open"></i></span>
                        </li>
                        <li>
                            <a href="{{url('news')}}">News &#038; Events</a><span><i class="icon-right-open"></i></span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @yield('header')
    </div>

        @yield('content')

    <footer id="Footer" class="clearfix">
        <!-- Footer copyright-->
        <div class="footer_copy">
            <div class="container">
                <div class="column one">
                    <a id="back_to_top" href="#" class="button button_left button_js"><span class="button_icon"><i class="icon-up-open-big"></i></span></a>
                    <div class="copyright">
                        &copy; <?php echo date('Y')?> A2B powered by <a target="_blank" rel="nofollow" href="http://worthafrica.org"> Worthafrica Group</a>
                    </div>
                    <!--Social info area-->
                    <ul class="social">
                        <li class="facebook">
                            <a href="#" title="Facebook"><i class="icon-facebook"></i></a>
                        </li>
                        <li class="twitter">
                            <a href="#" title="Twitter"><i class="icon-twitter"></i></a>
                        </li>

                    </ul>
                </div>
            </div>
        </div>
    </footer>
    @yield('footer')
</div>
    <!-- JS -->
    <script src="../../js/jquery-2.1.4.min.js"></script>

    <script src="../../js/mfn.menu.js"></script>
    <script src="../../js/jquery.plugins.js"></script>
    <script src="../../js/jquery.jplayer.min.js"></script>
    <script src="../../js/animations/animations.js"></script>
    <script src="../../js/scripts.js"></script>

    <script>
        jQuery(window).load(function() {
            var retina = window.devicePixelRatio > 1 ? true : false;
            if (retina) {
                var retinaEl = jQuery("#logo img.logo-main");
                var retinaLogoW = retinaEl.width();
                var retinaLogoH = retinaEl.height();
                retinaEl.attr("src", "images/retina-university.png").width(retinaLogoW).height(retinaLogoH);
                var stickyEl = jQuery("#logo img.logo-sticky");
                var stickyLogoW = stickyEl.width();
                var stickyLogoH = stickyEl.height();
                stickyEl.attr("src", "images/retina-university.png").width(stickyLogoW).height(stickyLogoH);
            }
        });
    </script>

</body>
@yield('scripts')
</html>