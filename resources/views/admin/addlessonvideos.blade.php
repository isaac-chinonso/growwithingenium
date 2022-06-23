@extends('layout.app1')
@section('title')
Add Lesson Video || Ingenium Concept LTD
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
                            @elseif (date("H") >= 15 && date("H") < 24)</h1>
                                <h1 style="font-size: 20px;">Good evening <img src="../app/images/evening.png">, {{ Auth::user()->fullname }}</h1>
                                @endif
                </h4>
            </div>
            <button type="button" class="btn btn-primary btn-sm"><a href="{{ url('admin/lesson-video') }}" class="text-white">See all Lesson Videos</a></button>

        </div>
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <!-- row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Add Lesson Video</h4>
                        <form action="{{ url('admin/save-lesson-video') }}" method="POST">
                            @csrf
                            <div class="modal-body">
                                <input type="text" class="form-control" name="lesson_id" value="{{ $lessons->id }}" hidden>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Lesson:</label>
                                            <select class="form-control" name="lesson_id">
                                                <option selected disabled>Select Lesson</option>
                                                @foreach($lesson as $less)
                                                <option value="{{ $less->id }}">{{ $less->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label class="control-label">Focus Area:</label>
                                            <input type="text" class="form-control" name="focusarea" value="{{ Request::old('focusarea')}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label class="control-label">Video Url:</label>
                                            <input type="text" class="form-control" name="videourl" value="{{ Request::old('videourl')}}">
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="modal-footer">
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Add Lesson Video</button>
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