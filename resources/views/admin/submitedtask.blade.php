@extends('layout.app3')
@section('title')
Submitted Lesson Task || Ingenium Concept LTD
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
            <button type="button" class="btn btn-primary btn-sm"><a href="{{ url('admin/task') }}" class="text-white">Go back to Task</a></button>
        </div>
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <!-- row -->
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Submitted Lesson Task</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>fullname</th>
                                        <th>Lesson</th>
                                        <th>Task File</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($submittedlessontask as $less)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $less->user->fullname }}</td>
                                        <td>{{ $less->lesson->title }}</td>
                                        <td>{{ $less->source }}</td>
                                        <td><a href="../../upload/{{ $less->source }}"><i class="fa fa-download"></i></a> </td>
                                       
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