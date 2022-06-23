@extends('layout.app')
@section('title')
Complains || Ingenium Concept LTD
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
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Reviews</li>
                </ol>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Complains</h4>
                        @include('include.success')
                        @include('include.warning')
                        @include('include.error')
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>fullname</th>
                                        <th>Email</th>
                                        <th>Feedback</th>
                                        <th>Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                <?php $number = 1; ?>
                                    @foreach($allcomplain as $complain)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $complain->user->fullname }}</td>
                                        <td>{{ $complain->lesson }}</td>
                                        <td>{{ $complain->feedback }}</td>
                                        <td>{{ $complain->created_at->format('d M Y') }}</td>
                                        <td><i class="fa fa-trash bg-danger" data-toggle="modal" data-target="#delete{{ $complain->id }}"></i></td>
                                        <!-- modal content -->
                                        <div id="delete{{ $complain->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Complain</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete Complain  </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('deletecomplain', $complain->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
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