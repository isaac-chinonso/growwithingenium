<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="../app/images/favicon.png">
    <link href="../app/plugins/tables/css/datatable/dataTables.bootstrap4.min.css" rel="stylesheet">
    <link href="../app/css/style.css" rel="stylesheet">
    <script src="../app/js/modernizr-3.6.0.min.js"></script>
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
</head>

<body class="v-light vertical-nav fix-header fix-sidebar">
    <div id="preloader">
        <div class="loader">
            <svg class="circular" viewBox="25 25 50 50">
                <circle class="path" cx="50" cy="50" r="20" fill="none" stroke-width="3" stroke-miterlimit="10" />
            </svg>
        </div>
    </div>
    <div id="main-wrapper">
        <!-- header -->
        <div class="header">
            <div class="nav-header">
                <div class="brand-logo"><a href="#"><b><img src="../app/images/logo.png" alt=""> </b><span class="brand-title"><img src="../app/images/logo-text.png" alt=""></span></a>
                </div>
                <div class="nav-control">
                    <div class="hamburger"><span class="line"></span> <span class="line"></span> <span class="line"></span>
                    </div>
                </div>
            </div>
            <div class="header-content">
                <div class="header-right">
                    <ul>
                        <li class="icons"><a href="javascript:void(0)"><i class="mdi mdi-account f-s-20" aria-hidden="true"></i></a>
                            <div class="drop-down dropdown-profile animated bounceInDown">
                                <div class="dropdown-content-body">
                                    <ul>
                                        <li><a href="#"><i class="mdi mdi-settings"></i> <span>Setting</span></a>
                                        </li>
                                        <li><a href="#"><i class="icon-power"></i> <span>Logout</span></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- #/ header -->
        <!-- sidebar -->
        <div class="nk-sidebar">
            <div class="nk-nav-scroll">
                <ul class="metismenu" id="menu">
                    <li><a href="{{ url('admin/dashboard') }}"><i class=" mdi mdi-view-dashboard"></i> <span class="nav-text">Dashboard</span></a>
                    </li>


                    <li class="nav-label">Components</li>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-nfc-variant"></i> <span class="nav-text">Blog</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('admin/category') }}">Categories</a>
                            </li>
                            <li><a href="{{ url('admin/post') }}">Post</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-calendar"></i> <span class="nav-text">Programs</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('admin/program-category') }}">Categories</a>
                            </li>
                            <li><a href="{{ url('admin/program') }}">Program</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-nfc-variant"></i> <span class="nav-text">Resources</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('admin/program-category') }}">Categories</a>
                            </li>
                            <li><a href="{{ url('admin/resource') }}">Resources</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="icon ion-ios-paper-outline"></i> <span class="nav-text">Class</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('admin/module') }}">Modules</a>
                            </li>
                            <li><a href="{{ url('admin/lesson') }}">Lesson</a>
                            </li>
                            <li><a href="{{ url('admin/lesson-video') }}">Videos</a>
                            </li>
                            <li><a href="{{ url('admin/task') }}">Task</a>
                            </li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="mdi mdi-google-pages"></i> <span class="nav-text">Reviews</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('admin/reviews') }}">Reviews</a>
                            </li>
                            <li><a href="{{ url('admin/complain') }}">Complains</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="#"><i class="mdi mdi-email"></i> <span class="nav-text">Messages</span></a>
                    </li>
                    <li><a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-users"></i> <span class="nav-text">Users</span></a>
                        <ul aria-expanded="false">
                            <li><a href="{{ url('admin/users') }}">Users</a>
                            </li>
                            <li><a href="{{ url('post') }}">Sub Admin</a>
                            </li>
                        </ul>
                    </li>
                    <li><a href="{{ url('/') }}"><i class="mdi mdi-home"></i> <span class="nav-text">Main Website</span></a>
                    </li>
                </ul>
            </div>
            <!-- #/ nk nav scroll -->
        </div>
        <!-- #/ sidebar -->

        @yield('content')
        <!-- footer -->
        <div class="footer">
            <div class="copyright">
                <p>Copyright &copy; <a href="#">Ingenium Concept LTD</a> 2021. By <a href="https://www.dcodearena.com" target="_blank">Dcode Arena</a></p>
            </div>
        </div>
        <!-- #/ footer -->
    </div>

    <script>
        $('#summernote').summernote({
            placeholder: 'Enter Long Description Here',
            tabsize: 2,
            height: 250
        });
    </script>
    <!-- Common JS -->
    <script src="../app/plugins/common/common.min.js"></script>
    <!-- Custom script -->
    <script src="../app/js/custom.min.js"></script>

    <script src="../app/plugins/tables/js/jquery.dataTables.min.js"></script>
    <script src="../app/plugins/tables/js/datatable/dataTables.bootstrap4.min.js"></script>
    <script src="../app/plugins/tables/js/datatable-init/datatable-basic.min.js"></script>
    <!-- include summernote css/js -->

</html>