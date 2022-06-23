@extends('layout.app1')
@section('title')
Blog Post || Ingenium Concept LTD
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
            <button type="button" class="btn btn-primary btn-sm"><a href="{{ url('admin/create-post') }}" class="text-white">Create New Post</a></button>
            
        </div>
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <!-- row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Blog Post</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Name</th>
                                        <th>Category</th>
                                        <th>Short Description</th>
                                        <th>Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <?php $number = 1; ?>
                                <tbody>
                                    @foreach($blogpost as $post)
                                   <tr>
                                       <td>{{ $number }}</td>
                                       <td>{{ $post->title }}</td>
                                       <td>{{ $post->category->name }}</td>
                                       <td>{{ $post->short_desc }}</td>
                                       <td><img src="../{{ $post->blog_image }}" title="{{ $post->title }}" width="50px" height="50px"></td>
                                       <td></td>
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
    </div>
    <!-- #/ container -->
</div>
<!-- #/ content body -->

@endsection