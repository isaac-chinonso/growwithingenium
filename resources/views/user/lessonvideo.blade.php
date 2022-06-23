@extends('layout.apps1')
@section('title')
Lessons || Ingenium Concept LTD
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
                    <div class="card-body">
                        <h4 class="card-title">Module Lessons</h4>
                        <div class="table-responsive">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Module</th>
                                        <th>Title</th>
                                        <th>Focus Area</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($lessonvideo as $lessvid)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $lessvid->lesson->module->name }}</td>
                                        <td>{{ $lessvid->lesson->title }}</td>
                                        <td>{{ $lessvid->focusarea }} </td>
                                        <td><button class="btn btn-sm" style="background-color: #B78700;color:#fff;"><a href="{{ route('viewvideo', $lessvid->id) }}" class="text-white">Watch Video</a></button></td>
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