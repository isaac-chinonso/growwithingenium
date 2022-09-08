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
<div class="">
    <div class="container1">
        <video poster="asset/video/intro.jpg" class="img-responsive intro" controls>
            <source src="asset/video/intro.mp4" type="video/mp4">
        </video>
    </div>
    <h2 align="center">
        <button class="btn p-bg-color" style="font-size: 23px;background-color:#b78700;"><a href="https://bit.ly/CustomerRetentionHacks" target="_blank" style="color: #fff;">Book a Session</a></button>
    </h2>
</div>




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
    <div class="testimonial-section homeThree">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-xs-12 float-right">
                    <div class="main-container">
                        <div class="theme-title-two">
                            <h6>Testimonials</h6>
                            <h2><span>Check what’s<strong>our</strong></span> <span>client Say about us</span></h2>
                        </div> <!-- /.theme-title -->
                        <div class="testimonial-slider">
                            <div class="item">
                                <div class="wrapper">
                                    <p>Working with Jennifer and the team has been an amazing experience as she is very professional and relates with Clients as family. Always on top of her game and highly result-oriented. Her advice has been very helpful in my decision making and I've never regretted any idea we bounce off each other.!</p>

                                    <h5>Olushola O.</h5>
                                </div> <!-- /.wrapper -->
                            </div> <!-- /.item -->
                            <div class="item">
                                <div class="wrapper">
                                    <p>I really didn't want the session to end because I was getting some insights and strategies I can develop to increase my brand awareness and positioning. It was a pleasure to engage you during the 30 minutes free session. I didn’t know I could explore my uniqueness to get lots of clients for my business. It was an eye-opener for me.</p>

                                    <h5>Ilyich T. Ghana.</h5>
                                </div> <!-- /.wrapper -->
                            </div> <!-- /.item -->
                            <div class="item">
                                <div class="wrapper">
                                    <p>The session was mind-blowing, I wish I could give the whole world for this. The training is so impactful. This is what I need.</p>

                                    <h5>Tongs F. Nigeria</h5>
                                </div> <!-- /.wrapper -->
                            </div> <!-- /.item -->
                            <div class="item">
                                <div class="wrapper">
                                    <p>I enjoyed my call, quite eye opening. Customer retention is key and sending a reminder to your customers so that they can try to replenish their products is important. I have never thought of it yet as a customer this would be an excellent service. My business is minding my customer's business!</p>

                                    <h5>Mary N. Kenya</h5>
                                </div> <!-- /.wrapper -->
                            </div> <!-- /.item -->
                            <div class="item">
                                <div class="wrapper">
                                    <p>Thank you very much..it a was brilliant and amazing 30minutes. My wow moment was when I was told branding isn't about colours and pictures. It's about who needs and can afford your value. Just amazing!!
                                        I never knew all that!!!</p>
                                    <h5>Chongo C. Zambia</h5>
                                </div> <!-- /.wrapper -->
                            </div> <!-- /.item -->
                        </div> <!-- /.testimonial-slider -->
                    </div> <!-- /.main-container -->
                </div>
                <div class="col-md-6 col-xs-12"><img src="asset/images/home/5.jpg" alt=""></div>
            </div>
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
                        <div class="image"><img src="uploads/{{ $post->blog_image }}" alt=""></div>
                        <div class="text">
                            <h6>{{ $post->category->name }}</h6>
                            <h5><a href="{{ route('blogdetails', $post->slug) }}" class="tran3s color-one"><span>{{ $post->title }}</span> </a></h5>
                            <p>{{ $post->short_desc }}</p>
                            <a href="{{ route('blogdetails', $post->slug) }}" class="tran3s"><i class="flaticon-arrows" aria-hidden="true"></i></a>
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
                <div class="item">
                    <a href="https://tribuneonlineng.com/jennifer-orode-tackles-customer-service-concerns-in-new-e-book/?utm_source=dlvr.it&utm_medium=twitter" target="_blank">
                        <img src="asset/images/logo/p-2.jpg" alt="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="https://newsboardforme.com/good-customer-relations-are-the-key-to-business-sustainability-orode/61218/?amp=1" target="_blank">
                        <img src="asset/images/logo/p-3.jpg" alt="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="https://newz-today.com/good-customer-relationships-is-key-to-business-sustainability-orode/" target="_blank">
                        <img src="asset/images/logo/p-4.jpg" alt="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="https://www.thisdaylive.com/index.php/2022/07/29/jennifer-orode-tackles-customer-service-concerns-in-new-ebook/" target="_blank">
                        <img src="asset/images/logo/p-5.jpg" alt="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="https://businessday.ng/brands-advertising/article/good-customer-relationships-is-key-to-business-sustainability-orode/" target="_blank">
                        <img src="asset/images/logo/p-6.jpg" alt="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="https://www.vanguardngr.com/2022/07/jennifer-orode-tackles-customer-service-concerns-in-new-ebook/" target="_blank">
                        <img src="asset/images/logo/p-5.jpg" alt="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="https://www.youtube.com/watch?v=uy0dBZDjDUo" target="_blank">
                        <img src="asset/images/logo/p-8.png" alt="logo">
                    </a>
                </div>
                <div class="item">
                    <a href="https://www.youtube.com/watch?v=9Hynz1IBqQs" target="_blank">
                        <img src="asset/images/logo/p-9.jpg" alt="logo">
                    </a>
                </div>
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