@extends('layout.app1')
@section('title')
Lesson Task || Ingenium Concept LTD
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
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Add Lesson Task</button>
            <!-- modal content -->
            <div class="modal fade" id="exampleModalCenter">
                <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Add New Task</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form method="POST" action="{{ url('admin/save-lesson-task') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <label class="control-label">Lesson:</label>
                                    <select class="form-control" name="lesson_id">
                                        <option selected disabled>Select Lesson</option>
                                        @foreach($lesson as $less)
                                        <option value="{{ $less->id }}">{{ $less->title }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Task</label>
                                    <input type="file" name="taskfile" class="form-control">
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Add Task</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.modal -->
        </div>
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Task</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Lesson</th>
                                        <th>Task File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($lessontask as $less)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $less->lesson->title }}</td>
                                        <td>{{ $less->source }}</td>
                                        <td><a href="../upload/{{ $less->source }}"><i class="fa fa-download"></i></a> &nbsp; &nbsp; <i class="fa fa-trash" data-toggle="modal" data-target="#responsive-modal2{{ $less->id }}"></i> &nbsp; <a href="{{ route('submittedtask', $less->lesson_id) }}">Submmited Task</a</td>
                                        <!-- modal content -->
                                        <div id="responsive-modal2{{ $less->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Lesson</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete {{ $less->lesson->title }} Task</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('deletelessontask', $less->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Lesson</a>
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