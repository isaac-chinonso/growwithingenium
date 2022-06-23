@extends('layout.apps')
@section('title')
Dashboard || Ingenium Concept LTD
@endsection
@section('content')
<!-- content body -->
<div class="content-body">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                @if (Auth::user()->status == 0)
                  <div class="alert alert-danger"><i class="fa fa-warning"></i> Account not Activated. Please contact Admin for activation to Gain Full Access</div>
                @endif
                <div class="row page-titles">
                    <div class="col p-0">
                        <h4>
                            @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="../app/images/morning1.png">, {{ Auth::user()->fullname }}</h1>
                                @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="../app/images/afternoon.png">, {{ Auth::user()->fullname }}</h1>
                                    @elseif (date("H") >= 15 && date("H") < 24)</h1>
                                        <h1 style="font-size: 20px;">Good evening <img src="../app/images/evening.png">, {{ Auth::user()->fullname }}</h1>
                                        @endif
                        </h4>
                        <span>Welcome back, {{ Auth::user()->fullname }}! you are doing great this week keep it up!</span>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4> Modules <span class="pull-right"><i class="mdi mdi-nfc-variant f-s-30 text-primary"></i></span></h4>
                                <h4 class="m-t-20 f-s-14">{{ $allmodules }}</h4>
                                <div class="progress m-t-0 h-7px">
                                    <div role="progressbar" class="progress-bar bg-primary wow animated progress-animated w-100pc h-7px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card">
                            <div class="card-body">
                                <h4>Lessons <span class="pull-right"><i class="icon ion-ios-paper-outline f-s-30 coll"></i></span></h4>
                                <h4 class="m-t-20 f-s-14">{{ $alllesson }}</h4>
                                <div class="progress m-t-0 h-7px">
                                    <div role="progressbar" class="progress-bar bgg wow animated progress-animated w-100pc h-7px"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-7">
                        <div class="row">
                            <div class="col-md-8">
                                <h4>Popular Courses</h4>
                            </div>
                            <div class="col-md-4">
                                <div align="right">
                                    <u><a href="#">Explore Courses</a></u>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <div class="active-member">
                                    <div class="table-responsive">
                                        <table class="table table-xs table-stripped">
                                            <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Course</th>
                                                    <th>Worksheet</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            <?php $number = 1; ?>
                                                @foreach($lesson as $less)
                                                <tr>
                                                    <td>{{ $number }}</td>
                                                    <td>{{ $less->title }}</td>
                                                    <td>{{ $less->worksheet }} </td>
                                                    <td><button class="btn btn-sm" style="background-color: #B78700;color:#fff;">View</button></td>
                                                </tr>
                                                <?php $number++; ?>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="card">
                            <div class="card-body">
                                <div class="text-center">
                                    <h4 class="m-t-15 m-b-2">{{ Auth::user()->fullname }}</h4>
                                    <ul class="list-inline m-t-15">
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-facebook-square f-s-20 text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-twitter f-s-20 text-muted"></i></a>
                                        </li>
                                        <li class="list-inline-item"><a href="#"><i class="fa fa-instagram f-s-20 text-muted"></i></a>
                                        </li>
                                    </ul>
                                    <div class="row">
                                        <div class="col-12 border-bottom-1 p-t-20 p-b-10"><span class="pull-left f-w-600">Name:</span> <span class="pull-right">{{ Auth::user()->profile->first()->lname }} {{ Auth::user()->profile->first()->fname }}</span>
                                        </div>
                                        <div class="col-12 border-bottom-1 p-t-10 p-b-10"><span class="pull-left f-w-600">Email:</span> <span class="pull-right">{{ Auth::user()->email}}</span>
                                        </div>
                                        <div class="col-12 p-t-10 p-b-10"><span class="pull-left f-w-600">Business:</span> <span class="pull-right">{{ Auth::user()->profile->first()->businessname }}</span>
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