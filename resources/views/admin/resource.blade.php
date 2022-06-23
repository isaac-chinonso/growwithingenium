@extends('layout.app1')
@section('title')
Resources || Ingenium Concept LTD
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
            <button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#exampleModalCenter">Add New Resource</button>
            <!-- modal content -->
            <div class="modal fade" id="exampleModalCenter">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title" id="myModalLabel">Add New Resource</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                        </div>
                        <form method="POST" action="{{ url('admin/save-resource') }}" enctype="multipart/form-data">
                            @csrf
                            <div class="modal-body">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Program Category:</label>
                                            <select class="form-control" name="category_id">
                                                <option selected disabled>Select Category</option>
                                                @foreach($resourcecatgeory as $reso)
                                                <option value="{{ $reso->id }}">{{ $reso->title }}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Title:</label>
                                            <input type="text" class="form-control" name="title" value="{{ Request::old('title')}}">
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="control-label">Description:</label>
                                            <textarea class="form-control" name="description"></textarea>
                                        </div>
                                    </div><br>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label class="control-label">Cover Image:</label>
                                            <input type="file" class="form-control" name="coverimage">
                                        </div>
                                        <div class="col-md-6">
                                            <label class="control-label">Resource File:</label>
                                            <input type="file" class="form-control" name="rfile">
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
        @include('include.success')
        @include('include.warning')
        @include('include.error')
        <!-- row -->
        <div class="row">

            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">All Resources</h4>
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered zero-configuration">
                                <thead>
                                    <tr>
                                        <th>S/N</th>
                                        <th>Category</th>
                                        <th>Title</th>
                                        <th>Description</th>
                                        <th>Cover Image</th>
                                        <th>Resource file</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $number = 1; ?>
                                    @foreach($resource as $reso)
                                    <tr>
                                        <td>{{ $number }}</td>
                                        <td>{{ $reso->resourcecategory->title }}</td>
                                        <td>{{ $reso->title }}</td>
                                        <td>{{ $reso->description }}</td>
                                        <td><img src="../upload/{{ $reso->source }}" width="80px" height="80px"></td>
                                        <td><a href="{{ $reso->rfile }}" target="_blank">{{ $reso->rfile }}</a></td>
                                        <td><a href="{{ route('editresource', $reso->id) }}"><i class="fa fa-pencil"></i></a> &nbsp; &nbsp; <i class="fa fa-trash" data-toggle="modal" data-target="#responsive-modal2{{ $reso->id }}"></i> </td>
                                        <div id="responsive-modal2{{ $reso->id }}" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true" style="display: none;">
                                            <div class="modal-dialog modal-dialog-centered" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title" id="myModalLabel">Delete Resource </h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h4><strong>Confirm Deletion</strong></h4>
                                                        <p>Are you sure you want to Delete {{ $reso->title }}</p>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-default waves-effect" data-dismiss="modal">Close</button>
                                                        <a href="{{ route('deleteresource', $reso->id) }}" class="btn btn-danger btn-sm waves-effect waves-light">Delete Resource</a>
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