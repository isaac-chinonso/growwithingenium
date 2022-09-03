@extends('layout.master2')
@section('title')
Blog || Ingenium Concept LTD
@endsection @section('content')
<!-- 
	=============================================
	Inner Banner 
    ============================================== 
			-->
<div class="inner-page-banner">
    <div class="opacity">
        <h1>{{ $blogdetails->title }}</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li>/</li>
            <li>News</li>
        </ul>
    </div>
    <!-- /.opacity -->
</div>
<!-- /inner-page-banner -->



<!-- 
	=============================================
	Blog Details
	============================================== 
-->
<div class="blog-details blog-details-sidebar">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 col-md-8 col-xs-12">
                <div class="clearfix">
                    <div class="blog-main-post">
                        <img src="images/blog/18.jpg" alt="">
                        <h6>{{ $blogdetails->category->name }}</h6>
                        <h3>{{ $blogdetails->title }}</h3>
                        <hr>
                        <p>{!! $blogdetails->long_desc !!} </p> <br>

                    </div>
                    <!-- /.blog-main-post -->
                </div>
                <!-- /.wrapper -->
            </div>
            <!-- /.col- -->
            <!-- ======================== Sidebar ========================= -->
            <div class="col-lg-3 col-md-4 col-sm-6 col-xs-12 blog-sidebar">
                <div class="sidebar-box sidebar-recent-post">
                    <h3>Recent News</h3>
                    <ul>
                        @foreach($blogpost as $blog)
                        <li>
                            <a href="#">{{ $blog->title }}.</a>
                            <span>{{ $blog->created_at->format('d M Y ') }}</span>
                        </li>
                        @endforeach
                    </ul>
                </div>
                <!-- /.sidebar-recent-post -->
            </div>
            <!-- /.blog-sidebar -->
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->
</div>
<!-- /.blog-details -->
@endsection