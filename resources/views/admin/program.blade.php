@extends('layout.app1')
@section('title')
Program || Ingenium Concept LTD
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
            <button type="button" class="btn btn-primary btn-sm"><a href="{{ url('admin/add-program') }}" class="text-white">Add Program</a></button>

        </div>
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <!-- row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Program</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Venue</th>
                                        <th>Date</th>
                                        <th>Description</th>
                                        <th>Reg Link</th>
                                        <th>Cover Image</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($program as $prog)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $prog->programcategory->title }}</td>
                                        <td>{{ $prog->title }}</td>
                                        <td>{{ $prog->venue }}</td>
                                        <td>{{ $prog->date }}</td>
                                        <td>{{ $prog->description }}</td>
                                        <td>{{ $prog->reglink }}</td>
                                        <td><img src="../upload/{{ $prog->source }}" width="80px" height="80px"></td>
                                        <td>
                                            @if($prog->status == 1)
                                            <span class="btn btn-primary btn-sm">UpComing</span>
                                            @elseif($prog->status == 0)
                                            <span>Outdated</span>
                                            @endif
                                        </td>
                                        <td><a href="{{ route('editprogram') }}"><i class="fa fa-edit"></i></a> &nbsp; &nbsp; <i class="fa fa-trash" data-toggle="modal" data-target="#responsive-modal2{{ $prog->id }}"></i></td>
                                        <div id="responsive-modal2{{ $prog->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Program</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete {{ $prog->title }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('deleteprogram', $prog->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Program</a>
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