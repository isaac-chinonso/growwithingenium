@extends('layout.master')
@section('title')
Homepage || Ingenium Concept LTD
@endsection
@section('content')
<style type="text/css">
    .container1 {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding-top: 1.25%;
        /* 16:9 Aspect Ratio (divide 9 by 16 = 0.5625) */
    }

    /* Then style the iframe to fit in the container div with full height and width */
    .responsive-iframe {
        position: absolute;
        top: 0;
        left: 0;
        bottom: 0;
        right: 0;
        width: 100%;
        height: 50%;
    }
</style>

<!-- 
	=============================================
	Theme Main Banner
	============================================== 
-->
<div id="theme-main-banner" class="banner-two">
    <div data-src="asset/images/home/banner.png">
        <div class="camera_caption">
            <div class="container" align="center">
                <h1 class="wow fadeInUp animated" data-wow-delay="0.2s"><span style="font-size: 37px;text-transform: capitalize;">Building Structures for Business Growth </span><br>A Journey of Excellence</h1><br><br><br>
                <!-- Scroll Top Button -->
                <h2 style="color: #fff;"><i class="fa fa-angle-down floating" data-animation="floating" data-delay="250"></i></h2><br>
            </div>
            <!-- /.container -->
        </div>
        <!-- /.camera_caption -->
    </div>
</div>
<!-- /#theme-main-banner -->



<!-- 
	=============================================
	What We Do
	============================================== 
-->
<div class="what-we-do">
    <div class="container">
        <h3>We deploy a strategic and structured approach in refining business culture, advocate for good customer relationship and inspire excellence in Entrepreneurs and Business Owners through our service offerings.</h3>


        <div class="row">
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInLeft">
                <div class="single-block">
                    <div class="icon color-one"><i class="flaticon-note"></i></div>
                    <h6>Business Strategy</h6>
                    <h5><a href="#" class="tran3s">Working Strategies, with Competitive Approaches</a></h5>
                </div>
                <!-- /.single-block -->
            </div>
            <!-- /.col- -->
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeInUp">
                <div class="single-block">
                    <div class="icon color-two middle-block"><i class="flaticon-bar-chart2"></i></div>
                    <h6>Start-up Planning</h6>
                    <h5><a href="#" class="tran3s">Initial ideas, Market Research, Startup Business Planning</a></h5>
                </div>
                <!-- /.single-block -->
            </div>
            <!-- /.col- -->
            <div class="col-md-4 hidden-sm col-xs-12 wow fadeInRight">
                <div class="single-block">
                    <div class="icon color-three"><i class="flaticon-diamond"></i></div>
                    <h6>Business Advisory</h6>
                    <h5><a href="#" class="tran3s"> Planning, Financial Management, Organizational Structuring,
                            Succession Planning,</a></h5>
                </div>
                <!-- /.single-block -->
            </div>
            <!-- /.col- -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.what-we-do -->



<!-- 
	=============================================
	More About Us
    ============================================== 
-->

<div class="more-about-us bg-color">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-offset-3">
                <div class="main-content">
                    <h2>Who we are</h2>
                    <div class="main-wrapper">
                        <h4>we are committed to inspiring excellence.</h4>
                        <p style="text-align: justify;">Ingenium Concepts Ltd is a management consulting and business advisory firm that seeks to deploy the cumulative expertise, experience and intellectual capital of her team to inspire nothing but excellence in people and
                            businesses. Founded and incorporated in Lagos, Nigeria
                        </p>
                        <div class="button-wrapper p-bg-color">
                            <span>Learn More</span>
                            <a href="about.html" class="hvr-icon-wobble-horizontal">More About us <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a>
                        </div>
                        <!-- /.button-wrapper -->
                    </div>
                    <!-- /.main-wrapper -->
                </div>
                <!-- /.main-content -->
            </div>
            <!-- /.col- -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div><br><br><br><br><br><br>


<!-- 
	=============================================
	Short Banner
    ============================================== 
-->
<!-- The video -->
<div class="container1">
    <div class="responsive-iframe">
        <video poster="asset/video/Drink-Wine.jpg" controls>
            <source src="asset/video/intro.mp4" type="video/mp4">
        </video>
    </div>

</div>
<h2 align="center">
    <button class="btn p-bg-color" style="font-size: 23px;background-color:#b78700;"><a href="https://bit.ly/CustomerRetentionHacks" target="_blank" style="color: #fff;">Book a Session</a></button><br><br>
</h2>




<!-- 
	=============================================
	Home Service Section
	============================================== 
-->
<div class="home-service-section">
    <div class="container">
        <div class="col-md-9 col-md-offset-3 main-container">
            <div class="theme-title">
                <h2>Our Offerings</h2>
                <h4 style="line-height: 44px;">We deploy a strategic and structured approach in refining business culture and inspiring excellence in people and businesses through the following service offering:</h4>
                <p>We’ve strong work history with different business services</p>
                <a href="{{ url('our-offerings') }}" class="tran3s">See All Services</a>
            </div>
            <!-- /.theme-title -->
            <ul class="clearfix row">
                <li class="col-md-6">
                    <div>
                        <i class="flaticon-user"></i>
                        <h5><a href="#" class="tran3s">Business Strategy</a></h5>
                        <p style="text-align: justify;font-size:15px;">Business success is dependent on the set down tactics and strategies with which the business is navigating its market and whether it can secure its competitors in the market...</p>
                    </div>
                </li>
                <li class="col-md-6">
                    <div>
                        <i class="flaticon-layers"></i>
                        <h5><a href="#" class="tran3s">Start-up Planning</a></h5>
                        <p style="text-align: justify;font-size:15px;">We groom startups from initial business ideas, market research, startup business planning until the idea is standing as a refined business...<br><br> </p>
                    </div>
                </li>
                <li class="col-md-6">
                    <div>
                        <i class="flaticon-bar-chart"></i>
                        <h5><a href="#" class="tran3s">Corporate Restructuring</a></h5>
                        <p style="text-align: justify;font-size:15px;">Most corporate businesses experience significant structural challenges, sometimes they are organizational, other times they have to do with processes or even finance... </p>
                    </div>
                </li>
                <li class="col-md-6">
                    <div>
                        <i class="flaticon-smartphone"></i>
                        <h5><a href="#" class="tran3s">Business Advisory:</a></h5>
                        <p style="text-align: justify;font-size:15px;">We support Entrepreneurs and Business Owners through their business growth diversity process by offering them our expertise, experience and intellectual capacities..</p>
                    </div>
                </li>
            </ul>
        </div>
        <!-- /.main-container -->
        <img src="asset/images/home/shape-2.png " alt="Image " class="wow fadeInLeft ">
    </div>
    <!-- /.container -->
</div>
<!-- /.home-service-section -->



<!-- ==================== TWO SECTION WRAPPER ====================== -->
<div class="two-section-wrapper ">

    <!-- 
	=============================================
		Testimonial
	============================================== 
				-->
    <div class="testimonial-section bg-image">
        <div class="container">
            <div class="main-container col-md- col-md-offset-5">
                <div class="theme-title">
                    <h6>Testimonials</h6>
                    <h2>Check what’s our client <br>Say about us</h2>
                </div> <!-- /.theme-title -->
                <div class="testimonial-slider">
                    <div class="item">
                        <div class="wrapper">
                            <p>You are truly professional at your work. The integrity is why clients like me trust you with their huge sum of funds. Thank you for everything. </p>
                            <div class="name clearfix">
                                <img src="asset/images/home/4.jpg" alt="">
                                <h5>Kadri Yusuf</h5>
                            </div>
                        </div> <!-- /.wrapper -->
                    </div> <!-- /.item -->
                    <div class="item">
                        <div class="wrapper">
                            <p>I love the professionalism and the fact that you kept to terms of the agreement. Delivery of service was also top-notch!</p>
                            <div class="name clearfix">
                                <img src="asset/images/home/4.jpg" alt="">
                                <h5>Ijeoma I</h5>
                            </div>
                        </div> <!-- /.wrapper -->
                    </div> <!-- /.item -->
                    <div class="item">
                        <div class="wrapper">
                            <p>Working with Jennifer and the team has been an amazing experience as she is very professional and relates with Clients as family. Always on top of her game and highly result-oriented. Her advice has been very helpful in my decision making and I've never regretted any idea we bounce off each other.</p>
                            <div class="name clearfix">
                                <img src="asset/images/home/4.jpg" alt="">
                                <h5>Olushola O.</h5><br>
                            </div>
                        </div> <!-- /.wrapper -->
                    </div> <!-- /.item -->
                    <div class="item">
                        <div class="wrapper">
                            <p>Highly skilled, experienced and strategic professionals that are results-oriented</p>
                            <div class="name clearfix">
                                <img src="asset/images/home/4.jpg" alt="">
                                <h5>Onakorere R.O</h5>
                            </div>
                        </div> <!-- /.wrapper -->
                    </div> <!-- /.item -->
                    <div class="item">
                        <div class="wrapper">
                            <p>Always professional in all aspects.</p>
                            <div class="name clearfix">
                                <img src="asset/images/home/4.jpg" alt="">
                                <h5>Mr clement</h5>
                            </div>
                        </div> <!-- /.wrapper -->
                    </div> <!-- /.item -->
                    <div class="item">
                        <div class="wrapper">
                            <p>Always available to respond to issues and create solution.</p>
                            <div class="name clearfix">
                                <img src="asset/images/home/4.jpg" alt="">
                                <h5>Constance O.</h5>
                            </div>
                        </div> <!-- /.wrapper -->
                    </div> <!-- /.item -->
                </div> <!-- /.testimonial-slider -->
            </div> <!-- /.main-container -->
        </div> <!-- /.container -->
    </div> <!-- /.testimonial-section -->

    <!-- 
	=============================================
	Home Blog Section
    ============================================== 
-->
    <div class="our-blog blog-v1">
        <div class="container">
            <div class="theme-title text-center ">
                <h2>Recent Blog Post from Ingenium</h2>
            </div><br><br><br>
            <div class="blog-masonary row">
                @foreach($blogpost as $post)
                <div class="col-md-4">
                    <div class="single-blog">
                        <div class="image"><img src="{{ $post->blog_image }}" alt=""></div>
                        <div class="text">
                            <h6>{{ $post->category->name }}</h6>
                            <h5><a href="#" class="tran3s color-one"><span>{{ $post->title }}</span> </a></h5>
                            <p>{{ $post->short_desc }}</p>
                            <a href="#" class="tran3s"><i class="flaticon-arrows" aria-hidden="true"></i></a>
                        </div>
                        <!-- /.single-blog -->
                    </div>
                </div>
                @endforeach
            </div>
            <!-- /.blog-masonary -->
        </div>
        <!-- /.container -->
    </div>
    <!-- /.our-blog -->
    <!-- /.home-blog-section -->

    <!-- 
		=============================================
		Partner Logo
	    ============================================== 
	-->
    <div class="partent-logo-section">
        <div class="container">
            <div class="theme-title text-center ">
                <h2>Organizations and Media Mentions</h2>
            </div><br><br><br>
            <div id="partner-logo">
                <div class="item"><img src="asset/images/logo/p-1.png" alt="logo"></div>
            </div>
        </div>
    </div> <!-- /.partent-logo-section -->



    <script>
        // Get the video

        jQuery(document).ready(function($) {
            "use strict";

            /* activate pause for lightbulb video if scrolled out of viewport */
            $(window).scroll(function() {
                $('myVideo').each(function() {
                    if ($(this).is(":in-viewport( 400 )")) {
                        $(this)[0].play();
                    } else {
                        $(this)[0].pause();
                    }
                });
            });
        });
    </script>
    @endsection