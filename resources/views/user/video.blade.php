@extends('layout.apps1')
@section('title')
Video || Ingenium Concept LTD
@endsection
@section('content')

<!-- content body -->
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>
                    @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="../../app/images/morning1.png">, {{ Auth::user()->fullname }}</h1>
                        @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="../../app/images/afternoon.png">, {{ Auth::user()->fullname }}</h1>
                            @elseif (date("H") >= 15 && date("H") < 24)</h1>
                                <h1 style="font-size: 20px;">Good evening <img src="../../app/images/evening.png">, {{ Auth::user()->fullname }}</h1>
                                @endif
                </h4>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <div class="col-12">
                @include('include.success')
                @include('include.warning')
                @include('include.error')
                <div class="card">
                    <div class="position-relative">
                        <iframe src="{{ $lessonvideo->videourl }}" class="img-fluid img-full" height="480" allow="autoplay" sandbox="allow-forms allow-pointer-lock allow-same-origin allow-scripts allow-top-navigation"></iframe>
                    </div>
                    <div class="card-body">
                        <div class="btn btn-primary btn-sm" style="background-color: #B78700;color:#fff;">{{ $lessonvideo->lesson->module->name }}</div><br><br>
                        <a href="#">
                            <h4 class="card-title">{{ $lessonvideo->lesson->title }}</h4>
                        </a>
                        <p class="card-text">{{ $lessonvideo->lesson->description }}</p>
                    </div>
                    <div class="card-footer">
                        <p class="card-text d-inline"><span class="text-muted">{{ $lessonvideo->lesson->created_at->format('d M Y') }}</span>
                        </p>
                        <div class="card-link float-right"> <a href="#" class="text-muted"><i class="fa fa-share-alt"></i></a>
                        </div>
                    </div>

                    <div class="container">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Lesson Task</h4><br>
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered zero-configuration">
                                        <tr>
                                            <th>#</th>
                                            <th>Lesson</th>
                                            <th>Download</th>
                                        </tr>
                                        <?php $number = 1; ?>
                                        @foreach($lessontask as $task)
                                        <tr>
                                            <td>{{ $number }}</td>
                                            <td>{{ $task->lesson->title }}</td>
                                            <td><a href="../../upload/{{ $task->source }}" target="_blank"><i class="fa fa-download"></i> Download Task</a> </td>
                                        </tr>
                                        <?php $number++; ?>
                                        @endforeach
                                    </table>
                                </div>
                                <div align="right">
                                    <button class="btn btn-primary btn-sm" style="background-color: #B78700;color:#fff;"  data-toggle="modal" data-target="#exampleModalCenter">Upload Task</button>
                                </div><br><br>
                                <!-- modal content -->
                                <div class="modal fade" id="exampleModalCenter">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4 class="modal-title" id="myModalLabel">Upload Task</h4>
                                                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                            </div>
                                            <form method="POST" action="{{ url('user/save-lesson-task') }}" enctype="multipart/form-data">
                                                @csrf
                                                <div class="modal-body">
                                                    <input type="text" name="lesson_id" value="{{ $lessonvideo->lesson->id }}" hidden>
                                                    <div class="form-group">
                                                        <label>Task</label>
                                                        <input type="file" name="taskfile" class="form-control">
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                    <button type="submit" class="btn btn-primary btn-sm waves-effect waves-light">Upload Task</button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                                <!-- /.modal -->

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