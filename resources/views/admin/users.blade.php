@extends('layout.app')
@section('title')
Users || Ingenium Concept LTD
@endsection
@section('content')
<!-- content body -->
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>
                    @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="../app/images/morning1.png">, {{ Auth::user()->profile->first()->fname }}</h1>
                        @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="../app/images/afternoon.png">, {{ Auth::user()->profile->first()->fname }}</h1>
                            @elseif (date("H") >= 15 && date("H") < 24)</h1>
                                <h1 style="font-size: 20px;">Good evening <img src="../app/images/evening.png">, {{ Auth::user()->profile->first()->fname }}</h1>
                                @endif
                </h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Users</li>
                </ol>
            </div>
        </div>
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Users</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>fullname</th>
                                        <th>Email</th>
                                        <th>Business Name</th>
                                        <th>Fullname</th>
                                        <th>Phone</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($allusers as $use)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $use->fullname }}</td>
                                        <td>{{ $use->email }}</td>
                                        <td>{{ $use->profile->first()->businessname }}</td>
                                        <td>{{ $use->profile->first()->fname}} {{ $use->profile->first()->lname}}</td>
                                        <td>{{ $use->profile->first()->phone}}</td>
                                        <td>
                                            @if( $use->status == 0)
                                            <span class="alert alert-danger px-1 py-1">Unactivated</span>
                                            @elseif($use->status == 1)
                                            <span class="alert alert-success px-1 py-1">Activated</span>
                                            @endif
                                        </td>
                                        <td>
                                            <h2>
                                                @if( $use->status == 0)
                                                <i class="fa fa-check text-success" title="Activate" data-toggle="modal" data-target="#activate{{ $use->id }}"></i>
                                                @elseif($use->status == 1)
                                                <i class="fa fa-times text-danger" title="Deactivate" data-toggle="modal" data-target="#deactivate{{ $use->id }}"></i>
                                                @endif
                                            </h2>
                                        </td>
                                        
                                        <!-- modal content1 -->
                                        <div id="activate{{ $use->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Activate User</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Activation</strong></h4>
                                                        <p>Are you sure you want to Activate <strong>{{ $use->fullname }}</strong> </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('activateuser', $use->id) }}" class="btn btn-success btn-sm waves-effect waves-light">Activate User</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                        <!-- modal content -->
                                        <div id="deactivate{{ $use->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Deactivate User</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deactivation</strong></h4>
                                                        <p>Are you sure you want to Deactivate <strong>{{ $use->fullname }}</strong> </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('deactivateuser', $use->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Deactivate User</a>
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