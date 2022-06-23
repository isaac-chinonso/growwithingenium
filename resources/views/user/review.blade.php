@extends('layout.apps')
@section('title')
Reviews || Ingenium Concept LTD
@endsection
@section('content')

<!-- content body -->
<div class="content-body">
    <div class="container">
        <div class="row page-titles">
            <div class="col p-0">
                <h4>
                    @if (date("H") < 12) <h1 style="font-size: 20px;">Good morning <img src="../app/images/morning1.png">, {{ Auth::user()->fullname }}</h1>
                        @elseif (date("H") >= 12 && date("H") < 16) <h1 style="font-size: 20px;">Good afternoon <img src="../app/images/afternoon.png">, {{  Auth::user()->fullname }}</h1>
                            @elseif (date("H") >= 15 && date("H") < 24)</h1>
                                <h1 style="font-size: 20px;">Good evening <img src="../app/images/evening.png">, {{  Auth::user()->fullname }}</h1>
                                @endif
                </h4>
            </div>
            <div class="col p-0">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a>
                    </li>
                    <li class="breadcrumb-item active">Review</li>
                </ol>
            </div>
        </div>
        <!-- row -->
        <div class="row">
            <!-- /# column -->
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        @include('include.success')
                        @include('include.warning')
                        @include('include.error')
                        <div class="row">
                            <div class="col-md-3"></div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-6">
                                        <button class="btn btn-secondary btn-block" data-toggle="modal" data-target="#modalreview">Write Review</button>
                                    </div>
                                    <div class="col-md-6">
                                        <button class="btn btn-primary btn-block" data-toggle="modal" data-target="#modalcomplain">Make Complaint</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3"></div>
                        </div><br><br>
                        <div class="table-responsive"><hr>
                            <h3 class="text-center">Reviews</h3><hr>
                            <table class="table table-striped">
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($allreview as $review)
                                    <tr>
                                        <th>{{ $number }}</th>
                                        <td>{{ $review->lesson }}</td>
                                        <td>{{ $review->feedback }}</td>
                                        <td>{{ $review->created_at->format('d M Y') }}</td>
                                        <td class="color-danger"><i class="fa fa-trash" data-toggle="modal" data-target="#delete{{ $review->id }}"></i></td>
                                        <!-- modal content -->
                                        <div id="delete{{ $review->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog  modal-dialog-centered">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Review</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete Review  </p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('deletereview', $review->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- /.modal -->
                                    </tr>
                                    <?php $number++; ?>
                                    @endforeach
                                </tbody>
                            </table><br><hr>

                            <h3 class="text-center">Complains</h3><hr>
                            <table class="table table-striped">
                                <tbody>
                                <?php $number = 1; ?>
                                    @foreach($allcomplain as $complain)
                                    <tr>
                                        <th>{{ $number }}</th>
                                        <td>{{ $complain->feedback }}</td>
                                        <td>{{ $complain->created_at->format('d M Y') }}</td>
                                        <td class="color-danger"><i class="fa fa-trash" data-toggle="modal" data-target="#delete{{ $complain->id }}"></i></td>
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
                        <!-- Modal -->
                        <div class="modal fade" id="modalreview">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Write Review</h2>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" action="{{ url('user/savereview') }}">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-field">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>fullname</label>
                                                        <input type="text" class="form-control" name="" value="{{ $allusers->fullname }}" disabled>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Course Taken</label>
                                                        <input type="text" class="form-control" name="lesson">
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Feedback</label>
                                                        <textarea class="form-control" rows="5" cols="40" name="feedback"></textarea>
                                                    </div>
                                                </div><br>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Post Review</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <!-- Modal1 -->
                        <div class="modal fade" id="modalcomplain">
                            <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h2 class="modal-title">Make Complaint</h2>
                                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span>
                                        </button>
                                    </div>
                                    <form method="post" action="{{ url('user/savecomplain') }}">
                                        @csrf
                                        <div class="modal-body">
                                            <div class="form-field">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Email</label>
                                                        <input type="email" class="form-control" value="{{ $allusers->email }}" disabled>
                                                    </div>
                                                </div><br>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <label>Feedback</label>
                                                        <textarea class="form-control" rows="5" cols="40" name="feedback"></textarea>
                                                    </div>
                                                </div><br>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Make Complaint</button>
                                        </div>
                                    </form>
                                </div>
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