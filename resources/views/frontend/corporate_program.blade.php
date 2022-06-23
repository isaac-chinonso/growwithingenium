@extends('layout.master1')
@section('title')
Corporate Program || Ingenium Concept LTD
@endsection
@section('content')

<!-- 
	=============================================
	Theme Inner Banner 
	============================================== 
-->
<div class="inner-page-banner">
    <div class="opacity">
        <h1>Corporates</h1>
        <ul>
            <li><a href="#">Programs</a></li>
            <li>/</li>
            <li>Corporates</li>
        </ul>
    </div>
    <!-- /.opacity -->
</div>
<!-- /inner-page-banner -->



<!-- 
	=============================================
	Our Blog / Blog V1
	============================================== 
-->
<div class="our-blog blog-v1">
    <div class="container">
        <div class="row">
            @foreach($program as $prog)
            <div class="col-md-3">
                <div class="single-blog">
                    <div class="image"><img src="../upload/{{ $prog->source }}" alt=""></div>
                    <div class="text">
                        <h5><b>{{ $prog->title }}</b></h5>
                        <h6 style="color: #ff3838;font-size: 13px;font-weight: bolder;padding-top: 13px;padding-bottom: 13px;">{{ $prog->date }}</h6>
                        <h6>{{ $prog->venue }}</h6><br>

                        <a href="{{ $prog->reglink }}" target="_blank" class="tran3s"><i class="flaticon-arrows" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
            @endforeach
        </div><br><br>
        <!-- /.blog-masonary -->

        <div class="row">
            <div class="col-md-5"></div>
            <div class="col-md-3">{{ $program->links() }}</div>
            <div class="col-md-4"></div>
        </div>
    </div>
    <!-- /.container -->
</div>
<!-- /.our-blog -->


@endsection