<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#2c2c2c">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#2c2c2c">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#2c2c2c">

    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" type="image/png" sizes="56x56" href="../asset/images/fav-icon/icon.png">


    <!-- Main style sheet -->
    <link rel="stylesheet" type="text/css" href="../asset/css/style.css">
    <!-- responsive style sheet -->
    <link rel="stylesheet" type="text/css" href="../asset/css/responsive.css">

    <link rel="stylesheet" href="../asset/css/animations.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-EBC6R8X109"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-EBC6R8X109');
    </script>
    <!-- Hotjar Tracking Code for https://growwithingenium.com/ -->
        <script>
        (function(h, o, t, j, a, r) {
            h.hj = h.hj || function() {
                (h.hj.q = h.hj.q || []).push(arguments)
            };
            h._hjSettings = {
                hjid: 2740720,
                hjsv: 6
            };
            a = o.getElementsByTagName('head')[0];
            r = o.createElement('script');
            r.async = 1;
            r.src = t + h._hjSettings.hjid + j + h._hjSettings.hjsv;
            a.appendChild(r);
        })(window, document, 'https://static.hotjar.com/c/hotjar-', '.js?sv=');
    </script>

    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API = Tawk_API || {},
            Tawk_LoadStart = new Date();
        (function() {
            var s1 = document.createElement("script"),
                s0 = document.getElementsByTagName("script")[0];
            s1.async = true;
            s1.src = 'https://embed.tawk.to/620ffb99a34c2456412706c0/1fs76tkac';
            s1.charset = 'UTF-8';
            s1.setAttribute('crossorigin', '*');
            s0.parentNode.insertBefore(s1, s0);
        })();
    </script>
    <!--End of Tawk.to Script-->


</head>

<body>
    <div class="main-page-wrapper">

        <!-- 
			=============================================
				Theme Header
			============================================== 
			-->
        <header class="theme-menu-wrapper menu-style-two full-width-menu inner-menu">
            <div class="header-wrapper">
                <div class="clearfix">
                    <!-- Logo -->
                    <div class="logo float-left tran4s">
                        <a href="index.html"><img src="../asset/images/logo/logo12.png" alt="Logo"></a>
                    </div>

                    <!-- ============================ Theme Menu ========================= -->
                    <nav class="theme-main-menu float-right navbar" id="mega-menu-wrapper">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="navbar-collapse-1">
                            <ul class="nav">
                                <li class="menu-list {{ request()->is('/*') ? 'active' : '' }}"><a href="{{ url('/') }}" class="tran3s">Home</a> </li>
                                <li class="dropdown-holder menu-list {{ request()->is('who-we-are*') ? 'active' : '' }}"><a href="#" class="tran3s">About</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('who-we-are') }}">Who we are</a></li>
                                        <li><a href="{{ url('who-we-are#team') }}">Our Team</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-holder menu-list {{ request()->is('our-offerings*') ? 'active' : '' }}"><a href="#" class="tran3s">Services</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('our-offerings#startup-planning') }}">Start-up Planning</a></li>
                                        <li><a href="{{ url('our-offerings#business-strategy') }}">Business Strategy</a></li>
                                        <li><a href="{{ url('our-offerings#business-advisory') }}">Business Advisory</a></li>
                                        <li><a href="{{ url('our-offerings#corporate-restructuring') }}">Corporate Restructuring</a></li>
                                        <li><a href="{{ url('our-offerings#training-and-development') }}">Training and Development</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown-holder menu-list {{ request()->is('corporate-program*') ? 'active' : '' }}{{ request()->is('entrepreneur-program*') ? 'active' : '' }}"><a href="#" class="tran3s">Program</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('corporate-program') }}">Corporates</a></li>
                                        <li><a href="{{ url('entrepreneur-program') }}">Entrepreneurs</a></li>
                                    </ul>
                                </li>

                                <li class="dropdown-holder menu-list {{ request()->is('blog-post*') ? 'active' : '' }}{{ request()->is('material*') ? 'active' : '' }}"><a href="#" class="tran3s">Resources</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{ url('blog-post') }}">Blog</a></li>
                                        <li><a href="{{ url('material') }}">Materials</a></li>
                                    </ul>
                                </li>
                                <li class="menu-list {{ request()->is('crsp*') ? 'active' : '' }}"><a href="{{ url('crsp') }}" class="tran3s">CRSP</a> </li>
                                <li class="menu-list {{ request()->is('contact-us*') ? 'active' : '' }}"><a href="{{ url('contact-us') }}" class="tran3s">Contact</a></li>
                                <li class="login-button"><a href="{{ url('login') }}" class="tran3s" style="color:#000;">login</a></li>
                            </ul>
                        </div>
                        <!-- /.navbar-collapse -->
                    </nav>
                    <!-- /.theme-main-menu -->
                </div>
                <!-- /.clearfix -->
            </div>
        </header>
        <!-- /.theme-menu-wrapper -->

        @yield('content')

        <!-- 
			=============================================
				Footer
			============================================== 
			-->
        <footer class="bg-one">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-list">
                        <h4>Uk Office</h4>
                        <ul>
                            <li>33 Crown Street, Smethwick,</li>
                            <li>West Midlands Birmingham,</li>
                            <li>United Kingdom.</li>
                            <li>+447440548221</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-list">
                        <h4>Nigeria Office</h4>
                        <ul>
                            <li>Suite J227, Road 5 Ikota Shopping </li>
                            <li>Complex beside VGC Lagos-Epe</li>
                            <li>Expressway, Lagos Nigeria.</li>
                            <li>+234 8154 644 462</li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-list">
                        <h4>Quick Links</h4>
                        <ul>
                            <li><a href="#" class="tran3s">Corporate Training</a></li>
                            <li><a href="#" class="tran3s">Entrepreneural Development</a></li>
                            <li><a href="#" class="tran3s">Blog</a></li>
                            <li><a href="#" class="tran3s">Materials</a></li>
                        </ul>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12 footer-subscribe">
                        <h4>Subscribe Us</h4>
                        <form action="#">
                            <input type="text" placeholder="Enter your mail">
                        </form>
                        <ul>
                            <li><a href="https://www.facebook.com/growwithingenium" target="_blank" class="tran3s"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                            <li><a href="https://twitter.com/growithingenium" target="_blank" class="tran3s"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.instagram.com/growwithingenium" target="_blank" class="tran3s"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li><a href="https://www.linkedin.com/company/78315360/admin/" target="_blank" class="tran3s"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li><br><br>
                        </ul>
                    </div>
                </div>
                <!-- /.row -->

                <div class="bottom-footer clearfix">
                    <p class="float-left">&copy; 2021 <a href="#" class="tran3s p-color">Ingenium Concept LTD</a>. All rights reserved. Designed with <i class="fa fa-heart"></i> Dcode Arena</p>
                </div>
            </div>
            <!-- /.container -->
        </footer>


        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </button>



        <!-- Js File_________________________________ -->

        <!-- j Query -->
        <script type="text/javascript" src="../asset/vendor/jquery.2.2.3.min.js"></script>
        <!-- Bootstrap Select JS -->
        <script type="text/javascript" src="../asset/vendor/bootstrap-select/dist/js/bootstrap-select.js"></script>

        <!-- Bootstrap JS -->
        <script type="text/javascript" src="../asset/vendor/bootstrap/bootstrap.min.js"></script>

        <!-- Vendor js _________ -->
        <!-- Camera Slider -->
        <script type='text/javascript' src='../asset/vendor/Camera-master/scripts/jquery.mobile.customized.min.js'></script>
        <script type='text/javascript' src='../asset/vendor/Camera-master/scripts/jquery.easing.1.3.js'></script>
        <script type='text/javascript' src='../asset/vendor/Camera-master/scripts/camera.min.js'></script>
        <!-- Mega menu  -->
        <script type="text/javascript" src="../asset/vendor/bootstrap-mega-menu/js/menu.js"></script>

        <!-- WOW js -->
        <script type="text/javascript" src="../asset/vendor/WOW-master/dist/wow.min.js"></script>
        <!-- owl.carousel -->
        <script type="text/javascript" src="../asset/vendor/owl-carousel/owl.carousel.min.js"></script>
        <!-- js count to -->
        <script type="text/javascript" src="../asset/vendor/jquery.appear.js"></script>
        <script type="text/javascript" src="../asset/vendor/jquery.countTo.js"></script>
        <!-- Fancybox -->
        <script type="text/javascript" src="../asset/vendor/fancybox/dist/jquery.fancybox.min.js"></script>
        <script type="text/javascript" src="../asset/vendor/jquery.ripples-master/dist/jquery.ripples-min.js"></script>
        <!-- Masonary js -->
        <script type="text/javascript" src="../asset/vendor/masonry.pkgd.min.js"></script>

        <!-- Theme js -->
        <script type="text/javascript" src="../asset/js/theme.js"></script>

    </div>
    <!-- /.main-page-wrapper -->
</body>

</html>