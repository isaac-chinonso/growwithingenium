@extends('layout.app3')
@section('title')
Blog Details || Ingenium Concept LTD
@endsection
@section('content')

<!-- content body -->
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="../../app/images/morning1.png">, {{ Auth::user()->fullname }}</h1>
                    @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="../app/images/afternoon.png">, {{ Auth::user()->fullname }}</h1>
                        @elseif (date("H") >= 15 && date("H") < 24)</h1>
                            <h1 style="font-size: 20px;">Good evening <img src="../../app/images/evening.png">, {{ Auth::user()->fullname }}</h1>
                            @endif
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Dashboard</a>
                    </li>
                    <li class="breadcrumb-item active">Blog</li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="email-right-box">
                            <div class="read-content">
                                <div class="media p-t-15">
                                    <div class="media-body">
                                        <h5 class="m-b-3">Admin</h5>
                                        <p class="m-b-2">{{ $blogview->created_at->format('d M Y ') }}</p>
                                    </div>
                                    <a href="{{ url('admin/post') }}" class="btn btn-primary btn-sm text-white">Back to Blog</a>
                                </div>
                                <hr>
                                <div class="media mb-4 mt-1">
                                    <div class="media-body">
                                        <h4 class="m-0 text-primary">{{ $blogview->title }}</h4><small class="text-muted">{{ $blogview->category->name }}</small><br>
                                        <div>
                                            <img src="../../uploads/{{ $blogview->blog_image }}" title="{{ $blogview->title }}" class="img-thumbnail">
                                        </div>
                                    </div>
                                </div>
                                <p style="text-align: justify;">{!! $blogview->long_desc !!}</p>
                                <hr>
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