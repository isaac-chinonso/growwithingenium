@extends('layout.master1')
@section('title')
Blog || Ingenium Concept LTD
@endsection
@section('content')

<!-- 
	=============================================
	Theme Inner Banner 
	============================================== 
-->
<div class="inner-page-banner">
    <div class="opacity">
        <h1>Blog Post</h1>
        <ul>
            <li><a href="#">Home</a></li>
            <li>/</li>
            <li>Blog</li>
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
            <div class="row">
                <div class="col-md-5"></div>
                <div class="col-md-3">{{ $blogpost->links() }}</div>
                <div class="col-md-4"></div>
            </div>
        </div>
        <!-- /.blog-masonary -->
    </div>
    <!-- /.container -->
</div>
<!-- /.our-blog -->

@endsection