@extends('layout.app')
@section('title')
Dashboard || Ingenium Concept LTD
@endsection
@section('content')
<!-- content body -->
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>
                @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="../app/images/morning1.png">, {{ Auth::user()->fullname }}</h1>
                    @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="../app/images/afternoon.png">, {{ Auth::user()->fullname }}</h1>
                        @elseif (date("H") >= 15 && date("H") < 24)</h1> <h1 style="font-size: 20px;">Good evening <img src="../app/images/evening.png">, {{ Auth::user()->fullname }}</h1>
                            @endif
                </h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Total Modules <span class="pull-right"><i class="mdi mdi-nfc-variant f-s-30 text-primary"></i></span></h4>
                        <h4 class="m-t-20 f-s-14">{{ $allmodules }}</h4>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-primary wow animated progress-animated w-100pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Total Lessons <span class="pull-right"><i class="icon ion-ios-paper-outline f-s-30 coll"></i></span></h4>
                        <h4 class="m-t-20 f-s-14">{{ $alllesson }}</h4>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bgg wow animated progress-animated w-100pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Total Reviews <span class="pull-right"><i class="mdi mdi-google-pages f-s-30 text-primary"></i></span></h4>
                        <h4 class="m-t-20 f-s-14">{{ $allreviews }}</h4>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-primary wow animated progress-animated w-100pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Total Blog Post <span class="pull-right"><i class="mdi mdi-square-edit-outline f-s-30 coll"></i></span></h4>
                        <h4 class="m-t-20 f-s-14">{{ $allblogpost }}</h4>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bgg wow animated progress-animated w-100pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Total Blog Category<span class="pull-right"><i class="mdi mdi-nfc-variant f-s-30 text-primary"></i></span></h4>
                        <h4 class="m-t-20 f-s-14">{{ $allcategory }}</h4>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bg-primary wow animated progress-animated w-100pc h-7px"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h4>Total Users <span class="pull-right"><i class="fa fa-users f-s-30 coll"></i></span></h4>
                        <h4 class="m-t-20 f-s-14">{{ $allusers }}</h4>
                        <div class="progress m-t-0 h-7px">
                            <div role="progressbar" class="progress-bar bgg wow animated progress-animated w-100pc h-7px"></div>
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