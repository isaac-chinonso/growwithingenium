@extends('layout.app1')
@section('title')
Lessons Videos || Ingenium Concept LTD
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
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Add New Lesson Video</button>
            <!-- modal content -->
            <div class="modal fade" id="exampleModalCenter">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Add New Resource</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form method="POST" action="{{ url('admin/save-lesson-video') }}">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
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
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Add Resource</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.modal -->
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Lesson Videos</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Lesson</th>
                                        <th>Focus Area</th>
                                        <th>Video</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($lessonvideo as $lessvid)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $lessvid->lesson->title }}</td>
                                        <td>{{ $lessvid->focusarea }}</td>
                                        <td><a href="{{ $lessvid->videourl }}" target="_blank"> {{ $lessvid->videourl }}</a></td>
                                        <td> <i class="fa fa-pencil" data-toggle="modal" data-target="#exampleModalCenter{{ $lessvid->id }}"></i> &nbsp; &nbsp; <i class="fa fa-trash" data-toggle="modal" data-target="#responsive-modal2{{ $lessvid->id }}"></i></td>

                                        <!-- modal content -->
                                        <div class="modal fade" id="exampleModalCenter{{ $lessvid->id }}">
                                            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Update Lesson Video</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <form method="POST" action="{{ route('updatelessonvideo', $lessvid->id) }}">
                                                        @csrf
                                                        <div class="modal-body">
                                                            <div class="form-group">
                                                                <div class="row">
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Lesson:</label>
                                                                            <select class="form-control" name="lesson_id">
                                                                                <option selected value="{{ $lessvid->lesson->id }}">{{ $lessvid->lesson->title }}</option>
                                                                                <option disabled>Select other Lesson</option>
                                                                                @foreach($lesson as $less)
                                                                                <option value="{{ $less->id }}">{{ $less->title }}</option>
                                                                                @endforeach
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="col-md-6">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Focus Area:</label>
                                                                            <input type="text" class="form-control" name="focusarea" value="{{ $lessvid->focusarea }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-md-12">
                                                                        <div class="form-group">
                                                                            <label class="control-label">Video Url:</label>
                                                                            <input type="text" class="form-control" name="videourl" value="{{ $lessvid->videourl }}">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="modal-footer">
                                                            <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                            <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Update Lesson Video</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->

                                        <!-- modal content -->
                                        <div id="responsive-modal2{{ $lessvid->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Lesson Video</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete {{ $lessvid->lesson->title }} Video</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('deletelessonvideo', $lessvid->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Lesson Video</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
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