@extends('layout.apps')
@section('title')
Schedule || Ingenium Concept LTD
@endsection
@section('content')
<!-- content body -->
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>
                        @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="../app/images/morning1.png">, {{ Auth::user()->fullname }}</h1>
                        @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="../app/images/afternoon.png">, {{  Auth::user()->fullname }}</h1>
                            @elseif (date("H") >= 15 && date("H") < 24)</h1>
                                <h1 style="font-size: 20px;">Good evening <img src="../app/images/evening.png">, {{  Auth::user()->fullname }}</h1>
                                @endif
                        </h4>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4><span class="pull-right"><i class="ion-android-list f-s-30 text-danger"></i></span></h4>
                                <h4 class="m-t-20 f-s-14">0</h4>
                                <h5>Courses in Progress </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4><span class="pull-right"><i class="icon ion-ios-paper-outline f-s-30 text-success"></i></span></h4>
                                <h4 class="m-t-20 f-s-14">0</h4>
                                <h5>Courses Completed </h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="card">
                            <div class="card-body">
                                <h4><span class="pull-right"><i class="mdi mdi-nfc-variant f-s-30 text-primary"></i></span></h4>
                                <h4 class="m-t-20 f-s-14">0</h4>
                                <h5>Total <br>Courses</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-12 col-xl-12">
                        <div class="row">
                            <div class="col-md-9">
                                <h4>Today's Courses</h4>
                            </div>
                            <div class="col-md-3">
                                <div align="right">
                                    <u><a href="#">Explore Courses</a></u>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="media border-bottom-1 p-t-15 p-b-15">
                                    <img src="../../app/images/avatar/1.jpg" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5>User Experience Design System</h5>
                                        <p class="m-b-0">I shared this on my fb wall a few months back,</p>
                                    </div>
                                </div>
                                <div class="media border-bottom-1 p-t-15 p-b-15">
                                    <img src="../../app/images/avatar/2.jpg" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5>User Interface Design Basics</h5>
                                        <p class="m-b-0">I shared this on my fb wall a few months back,</p>
                                    </div>
                                </div>
                                <div class="media p-t-15 p-b-15">
                                    <img src="../../app/images/avatar/3.jpg" class="mr-3 rounded-circle">
                                    <div class="media-body">
                                        <h5>Tips & Tricks for User Experience Design</h5>
                                        <p class="m-b-0">I shared this on my fb wall a few months back,</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="text-center">
                            <img alt="" class="m-t-15" src="../../app/images/users/4.jpg">
                            <h4 class="m-t-15 m-b-2">Donald John</h4>
                            <p class="text-muted">@donaldjohnjr</p>
                        </div>
                        <hr>
                        <div>
                            <h6><strong>Resources</strong></h6>
                            <div class="card">
                                <div class="card-body">
                                    <div class="custom-media-object-2">
                                        <div class="media border-bottom-1 p-t-15">
                                            <div class="media-body">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h6 class="text-muted f-s-14">UX Design System</h6>
                                                    </div>
                                                    <div class="col-lg-5 text-right">
                                                        <p class="f-s-13 text-muted">25mb &nbsp; &nbsp; <i class="fa fa-download"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media border-bottom-1 p-t-15">
                                            <div class="media-body">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h6 class="text-muted f-s-14">System Images</h6>
                                                    </div>
                                                    <div class="col-lg-5 text-right">
                                                        <p class="f-s-13 text-muted">10mb &nbsp; &nbsp; <i class="fa fa-download"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="media border-bottom-1 p-t-15">
                                            <div class="media-body">
                                                <div class="row">
                                                    <div class="col-lg-7">
                                                        <h6 class="text-muted f-s-14">Mirro Dashboard UI</h6>
                                                    </div>
                                                    <div class="col-lg-5 text-right">
                                                        <p class="f-s-13 text-muted">15mb &nbsp; &nbsp; <i class="fa fa-download"></i></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- #/ container -->
</div>
<!-- #/ content body -->
@endsection