@extends('layout.app1')
@section('title')
Create Blog Post || Ingenium Concept LTD
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
            <button type="button" class="btn btn-primary btn-sm"><a href="{{ url('admin/post') }}" class="text-white">See all Post</a></button>
        
        </div>
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <!-- row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Create Blog Post</h4>
                        <form action="{{ url('admin/add-blog') }}" method="POST" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Title:</label>
                                            <input type="text" class="form-control" name="title" value="{{ Request::old('title')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Category:</label>
                                            <select class="form-control" name="category_id">
                                                <option selected disabled>Select Category</option>
                                                @foreach($categories as $cat)
                                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Meta Description:</label>
                                            <input type="text" class="form-control" name="short_desc" value="{{ Request::old('title')}}">
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Blog Image:</label>
                                            <input type="file" class="form-control" name="blog_image" value="{{ Request::old('image')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label">Long Description:</label>
                                    <textarea class="form-control" id="summernote"  name="long_desc"></textarea>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Create Blog Post</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- #/ container -->
</div>
<!-- #/ content body -->

@endsection