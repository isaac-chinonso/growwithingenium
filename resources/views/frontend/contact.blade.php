@extends('layout.master1')
@section('title')
Contact Us || Ingenium Concept LTD
@endsection
@section('content')

<!-- 
	=============================================
	Theme Inner Banner 
	============================================== 
-->
<div class="inner-page-banner">
    <div class="opacity">
        <h1>Contact us</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li>/</li>
            <li>Contact</li>
        </ul>
    </div>
    <!-- /.opacity -->
</div>
<!-- /inner-page-banner -->



<!-- 
	=============================================
	Contact Us
	============================================== 
-->
<div class="contact-us">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-xs-12">
                <div class="contact-us-form">
                    <form action="inc/sendemail.php" class="form-validation" autocomplete="off">
                        <input type="email" placeholder="Email Address*" name="email">
                        <input type="text" placeholder="Subject*" name="sub">
                        <textarea placeholder="Your Message*" name="message"></textarea>
                        <button class="p-bg-color hvr-trim-two">SEND MESSAGE</button>
                    </form>
                </div>
                <!-- /.contact-us-form -->
            </div>
            <!-- /.col- -->
            <div class="col-lg-5 col-md-6 col-xs-12">
                <div class="contact-address">
                    <h2>Don’t Hesitate to contact with us for any kind of information</h2>
                    <h6 style="line-height: 40px;">
                        <a href="#" class="tran3s"><i class="fa fa-phone"></i>&nbsp;&nbsp; +234 8154 644 462; +447440548221</a><br>
                        <a href="mailto:info@growwithingenium.com" class="tran3s"><i class="fa fa-envelope"></i>&nbsp;&nbsp; info@growwithingenium.com</a><br>
                        <a href="#" class="tran3s"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;Nigeria: Suite J227, Road 5 Ikota Shopping Complex beside VGC Lagos-Epe
                            Expressway, Lagos.</a><br>
                        <a href="#" class="tran3s"><i class="fa fa-map-marker"></i>&nbsp;&nbsp;United Kingdom: 33 Crown Street, Smethwick, West Midlands Birmingham.</a>
                    </h6>
                    <ul>
                        <li><a href="https://www.facebook.com/growwithingenium" target="_blank" class="tran3s"><i class="fa fa-facebook-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://twitter.com/growithingenium" target="_blank" class="tran3s"><i class="fa fa-twitter-square" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.instagram.com/growwithingenium" target="_blank" class="tran3s"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                        <li><a href="https://www.linkedin.com/company/78315360/admin/" target="_blank" class="tran3s"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li><br><br>
                    </ul>
                </div>
                <!-- /.contact-address -->
            </div>
            <!-- /.col- -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.conatiner -->

    <!--Contact Form Validation Markup -->
    <!-- Contact alert -->
    <div class="alert-wrapper" id="alert-success">
        <div id="success">
            <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
            <div class="wrapper">
                <p>Your message was sent successfully.</p>
            </div>
        </div>
    </div>
    <!-- End of .alert_wrapper -->
    <div class="alert-wrapper" id="alert-error">
        <div id="error">
            <button class="closeAlert"><i class="fa fa-times" aria-hidden="true"></i></button>
            <div class="wrapper">
                <p>Sorry!Something Went Wrong.</p>
            </div>
        </div>
    </div>
    <!-- End of .alert_wrapper -->
</div>
<!-- /.contact-us -->


<!-- Google Map _______________________ -->
<div id="google-map-area">
    <div class="google-map" id="contact-google-map" data-map-lat="6.668240" data-map-lng="3.673050" data-map-title="Find Map" data-map-zoom="12"></div>
</div>

@endsection